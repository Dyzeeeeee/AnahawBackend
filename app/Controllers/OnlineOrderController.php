<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\{OnlineOrderModel, OnlineOrderDetailsModel, OrderModel, OrderDetailsModel};
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;

class OnlineOrderController extends ResourceController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect(); // Explicitly load database
    }

    use ResponseTrait;

    public function startOnlineOrder()
    {
        $model = new OnlineOrderModel();

        // Retrieve JSON input
        $data = $this->request->getJSON(true);

        // Basic validation of input data
        if (!$data || !isset($data['customer_id']) || !isset($data['qrcode'])) {
            return $this->fail('Invalid data provided.', ResponseInterface::HTTP_BAD_REQUEST);
        }

        // Create an order in the database
        $orderId = $model->createOrder($data); // Ensure createOrder accepts an array and uses it directly

        if ($orderId) {
            // If order is successfully created, return the order ID
            return $this->respondCreated(['message' => 'Order created successfully', 'id' => $orderId]);
        } else {
            // Handle the error scenario
            return $this->failServerError('Could not create the order. Please try again.');
        }
    }

    public function getOnlineOrder($orderId)
    {
        $model = new OnlineOrderModel();

        // Fetch the online order by ID
        $order = $model->find($orderId);

        if ($order) {
            return $this->respond($order, ResponseInterface::HTTP_OK);
        } else {
            return $this->failNotFound('Order not found');
        }
    }

    public function updateOnlineOrder($id)
    {
        $model = new OnlineOrderModel();

        // Fetch the existing order
        $order = $model->find($id);
        if (!$order) {
            return $this->failNotFound('Order not found.');
        }

        // Get JSON data
        $data = $this->request->getJSON(true);

        // Check for the fields to update
        $updateData = [
            'total_price' => $data['total_price'] ?? $order['total_price'],
            'customer_tag' => $data['customer_tag'] ?? $order['customer_tag'],
            'service' => $data['service'] ?? $order['service'],
            'confirmed' => $data['confirmed'] ?? $order['confirmed'],
        ];

        // Update the order in the database
        if ($model->update($id, $updateData)) {
            return $this->respondUpdated(['message' => 'Order updated successfully']);
        } else {
            return $this->failServerError('Could not update the order. Please try again.');
        }
    }


    public function confirmOrder($qrcode)
    {
        $onlineOrderModel = new OnlineOrderModel();
        $detailsModel = new OnlineOrderDetailsModel();
        $orderModel = new OrderModel();
        $orderDetailsModel = new OrderDetailsModel();

        // Check if the order exists with the given QR code
        $onlineOrder = $onlineOrderModel->where('qrcode', $qrcode)->first();
        if (!$onlineOrder) {
            return $this->failNotFound('Order not found with provided QR code.');
        }

        // Assume we are setting the status to 'confirmed'
        if ($onlineOrder['confirmed'] === 'confirmed') {
            return $this->fail('Order is already confirmed.', ResponseInterface::HTTP_BAD_REQUEST);
        }
        

        $onlineOrderDetails = $detailsModel->where('online_order_id', $onlineOrder['id'])->findAll();

        // Retrieve session_id from request, assuming it's in the JSON payload
        $jsonData = $this->request->getJSON();
        $session_id = $jsonData->session_id ?? null; // Use null coalescing operator to handle cases where session_id is not provided
        // $service = $jsonData->service ?? null; // Use null coalescing operator to handle cases where session_id is not provided

        // Validate session_id if necessary, e.g., check if it's not null or perform additional checks

        // Start transaction
        $this->db->transStart();

        // Create a new order including the session_id
        $newOrderId = $orderModel->insert([
            'session_id' => '1',
            'service' => $onlineOrder['service'],
            'total_price' => array_sum(array_column($onlineOrderDetails, 'subtotal')),
            'created_at' => date('Y-m-d H:i:s', time() + 8 * 3600),
            'customer_id' => $onlineOrder['customer_id'],
        ]);

        // Check if new order creation was successful
        if (!$newOrderId) {
            $this->db->transRollback();
            return $this->failServerError('Failed to create a new order.');
        }

        // Add details to the new order
        foreach ($onlineOrderDetails as $detail) {
            $orderDetailsModel->insert([
                'order_id' => $newOrderId,
                'menu_item_id' => $detail['menu_item_id'],
                'quantity' => $detail['quantity'],
                'subtotal' => $detail['subtotal']
            ]);
        }

        // Update the online order to confirmed
        $onlineOrderModel->update($onlineOrder['id'], ['confirmed' => "confirmed"]);

        // Commit transaction
        $this->db->transComplete();

        if ($this->db->transStatus() === false) {
            return $this->failServerError('Failed to confirm the order. Please try again.');
        } else {
            return $this->respondUpdated([
                'message' => 'Order confirmed successfully',
                'newOrderId' => $newOrderId,
                'service' => $onlineOrder['service']
            ]);
        }
    }


    public function getOnlineOrders()
    {
        $model = new OnlineOrderModel();

        // Retrieve orders with customer name
        $orders = $model->getOrdersWithCustomerName();

        if ($orders) {
            return $this->respond($orders, ResponseInterface::HTTP_OK);
        } else {
            return $this->failNotFound('No orders found');
        }
    }

    public function getAllOnlineOrders()
    {
        $model = new OnlineOrderModel();

        // Retrieve orders with customer name and order details
        $orders = $model->getOrdersWithCustomerNameAndDetails();  // Assuming you have a method to fetch orders with details

        if ($orders) {
            // Format the data as per your required structure
            $formattedOrders = [];

            foreach ($orders as $order) {
                // For each order, get the details and format them as well
                if (!isset($formattedOrders[$order['id']])) {
                    $formattedOrders[$order['id']] = [
                        'id' => $order['id'],
                        'customer_id' => $order['customer_id'],
                        'customer_tag' => $order['customer_tag'],
                        'created_at' => $order['created_at'],
                        'updated_at' => $order['updated_at'],
                        'total_price' => $order['total_price'],
                        'confirmed' => $order['confirmed'],
                        'service' => $order['service'],
                        'details' => []
                    ];
                }

                // Add order details to the 'details' array
                $formattedOrders[$order['id']]['details'][] = [
                    'detail_id' => $order['id'],
                    'menu_name' => $order['menu_name'],
                    'menu_price' => $order['menu_price'],
                    'menu_image' => $order['menu_image'],
                    'quantity' => $order['quantity'],
                    'subtotal' => $order['subtotal'],
                ];
            }

            // Respond with the formatted orders
            return $this->respond(array_values($formattedOrders), ResponseInterface::HTTP_OK);
        } else {
            return $this->failNotFound('No orders found');
        }
    }




    public function confirmOnlineOrder($id)
    {
        $onlineOrderModel = new OnlineOrderModel();
        $orderModel = new OrderModel(); // Assuming you have an OrderModel
        $orderDetailsModel = new OrderDetailsModel(); // Assuming you have an OrderDetailsModel

        // Fetch the existing online order
        $onlineOrder = $onlineOrderModel->find($id);
        if (!$onlineOrder) {
            return $this->failNotFound('Order not found.');
        }

        // Get JSON data
        $data = $this->request->getJSON(true);

        // Check for the fields to update
        $updateData = [
            'total_price' => $data['total_price'] ?? $onlineOrder['total_price'],
            'customer_tag' => $data['customer_tag'] ?? $onlineOrder['customer_tag'],
            'service' => $data['service'] ?? $onlineOrder['service'],
            'confirmed' => $data['confirmed'] ?? $onlineOrder['confirmed'],
        ];

        // Update the online order in the database
        if ($onlineOrderModel->update($id, $updateData)) {
            // Check if the order is confirmed
            if (isset($data['confirmed']) && $data['confirmed'] == 'confirmed') {
                // Fetch related order details for this online order
                $onlineOrderDetails = $this->db->table('online_order_details')->where('online_order_id', $id)->get()->getResultArray();

                // Create a new order using the transferred data
                $newOrderData = [
                    'session_id' => 1, // Assuming you want to set session_id as 1
                    'service' => $onlineOrder['service'],
                    'total_price' => array_sum(array_column($onlineOrderDetails, 'subtotal')),
                    'customer_id' => $onlineOrder['customer_id'],
                    'customer_tag' => $onlineOrder['customer_tag'],
                ];

                // Insert new order into the orders table
                $newOrderId = $orderModel->insert($newOrderData);

                if ($newOrderId) {
                    // Now, insert each order detail into the order_details table
                    foreach ($onlineOrderDetails as $detail) {
                        $orderDetailData = [
                            'order_id' => $newOrderId,
                            'menu_item_id' => $detail['menu_item_id'],
                            'quantity' => $detail['quantity'],
                            'subtotal' => $detail['subtotal'],
                        ];

                        // Insert into order_details table
                        $orderDetailsModel->insert($orderDetailData);
                    }

                    return $this->respondUpdated([
                        'message' => 'Order updated and confirmed, new order created successfully',
                        'orderId' => $newOrderId,
                        'customer_tag' => $onlineOrder['customer_tag']
                    ]);
                } else {
                    return $this->failServerError('Could not create a new order. Please try again.');
                }
            }

            return $this->respondUpdated(['message' => 'Order updated successfully']);
        } else {
            return $this->failServerError('Could not update the order. Please try again.');
        }
    }


}


