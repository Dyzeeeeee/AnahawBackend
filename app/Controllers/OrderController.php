<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\OrderModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;

class OrderController extends ResourceController
{
    use ResponseTrait;

    public function getOrders()
    {
        $model = new OrderModel();
        $orders = $model->getOrdersWithDetails(); // This retrieves all orders with their details and menu information

        return $this->respond($orders);
    }




    public function addOrder()
    {
        $model = new OrderModel();
        $data = $this->request->getJSON(true);

        // $data['created_at'] = date('Y-m-d H:i:s', time() + 8 * 3600); 

        if ($model->insert($data)) {
            $response = [
                'id' => $model->getInsertID(),
                'status' => 'success',
                'message' => 'Order added successfully'
            ];
            return $this->respondCreated($response);
        } else {
            return $this->failValidationErrors($model->errors());
        }
    }


    public function deleteOrder($orderId)
    {
        $model = new OrderModel();
        $currentOrder = $model->find($orderId);

        // Check if the order exists
        if (!$currentOrder) {
            return $this->failNotFound("Order not found with ID: {$orderId}");
        }

        // Prevent deletion of orders that are either completed or cancelled
        if (in_array($currentOrder['status'], ['completed', 'cancelled'])) {
            return $this->failForbidden("Cannot delete completed or cancelled orders.");
        }

        // Attempt to delete the order
        if ($model->delete($orderId)) {
            return $this->respondDeleted(['message' => 'Order deleted successfully']);
        } else {
            return $this->failServerError('Failed to delete the order.');
        }
    }

    public function updateOrder($orderId)
    {
        $model = new OrderModel();
        $data = $this->request->getJSON(true);

        // Fetch the current order details
        $currentOrder = $model->find($orderId);
        if (!$currentOrder) {
            return $this->failNotFound("Order not found with ID: {$orderId}");
        }

        // Check if the order status is 'completed' and prevent updates if trying to cancel
        if (
            ($currentOrder['status'] === 'completed' && isset($data['status']) && $data['status'] === 'cancelled') ||
            ($currentOrder['status'] === 'cancelled' && isset($data['status']) && $data['status'] === 'cancelled')
        ) {
            return $this->failForbidden("Completed or already cancelled orders cannot be canceled.");
        }

        // Update the order
        if ($model->update($orderId, $data)) {
            return $this->respondUpdated(['message' => 'Order updated successfully']);
        } else {
            return $this->failValidationErrors("Failed to update the order.");
        }
    }


    public function getOrdersBySession($sessionId)
    {
        $model = new OrderModel();

        // Validate the input
        if (!$sessionId) {
            return $this->fail('Session ID is required', ResponseInterface::HTTP_BAD_REQUEST);
        }

        $orders = $model->getOrdersBySession($sessionId);
        if ($orders) {
            return $this->respond($orders);
        } else {
            return $this->failNotFound('No orders found for the specified session.');
        }
    }


    public function getLatestOrder()
    {
        $model = new OrderModel();
        $latestOrder = $model->getLatestOrder();

        if ($latestOrder) {
            return $this->respond($latestOrder);
        } else {
            return $this->failNotFound('No orders found.');
        }
    }

    public function batchUpdateOrders()
    {
        $model = new OrderModel();
        $data = $this->request->getJSON(true); // Get the incoming data as an array

        // Ensure that orders data is provided and is an array
        if (empty($data['orders']) || !is_array($data['orders'])) {
            return $this->fail('No valid orders data provided', ResponseInterface::HTTP_BAD_REQUEST);
        }

        $orders = $data['orders'];
        $updatedOrders = [];
        $failedOrders = [];

        foreach ($orders as $order) {
            if (isset($order['id'])) {
                // Find the order by ID
                $currentOrder = $model->find($order['id']);

                if (!$currentOrder) {
                    // Order not found, log error and skip this order
                    $failedOrders[] = [
                        'order_id' => $order['id'],
                        'message' => 'Order not found'
                    ];
                    continue;  // Skip this order if not found
                }

                // Prevent updating completed or cancelled orders if status is being changed
                if (in_array($currentOrder['status'], ['completed', 'cancelled']) && isset($order['status'])) {
                    $failedOrders[] = [
                        'order_id' => $order['id'],
                        'message' => 'Cannot update completed or cancelled orders'
                    ];
                    continue;  // Skip this order if status update is forbidden
                }

                // Prepare the data to update (only the necessary fields)
                $updateData = [];
                if (isset($order['status'])) {
                    $updateData['status'] = $order['status'];
                }
                if (isset($order['tendered'])) {
                    $updateData['tendered'] = $order['tendered'];
                }
                if (isset($order['change1'])) {
                    $updateData['change1'] = $order['change1'];
                }
                if (isset($order['completed'])) {
                    $updateData['completed'] = $order['completed'];
                }

                // Attempt to update the order
                if ($model->update($order['id'], $updateData)) {
                    $updatedOrders[] = $order['id'];
                } else {
                    $failedOrders[] = [
                        'order_id' => $order['id'],
                        'message' => 'Failed to update order'
                    ];
                }
            } else {
                // Handle missing order ID
                $failedOrders[] = [
                    'order_id' => null,
                    'message' => 'Order ID is missing'
                ];
            }
        }

        // Prepare the response
        $response = [];

        if (!empty($updatedOrders)) {
            $response['status'] = 'success';
            $response['updated_orders'] = $updatedOrders;
        }

        if (!empty($failedOrders)) {
            $response['failed_orders'] = $failedOrders;
        }

        // If there are no updated or failed orders, return a generic response
        if (empty($updatedOrders) && empty($failedOrders)) {
            $response = [
                'status' => 'no updates',
                'message' => 'No orders were updated or failed.'
            ];
        }

        return $this->respond($response);
    }


}
