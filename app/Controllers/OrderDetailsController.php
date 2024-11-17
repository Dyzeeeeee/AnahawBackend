<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\OrderDetailsModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;

class OrderDetailsController extends ResourceController
{
    use ResponseTrait;

    public function addOrUpdateOrderDetail()
    {
        $model = new OrderDetailsModel();
        $data = $this->request->getJSON(true);

        // Check for necessary fields; assuming 'order_id' and 'menu_item_id' are required to identify a record
        if (!isset($data['order_id'], $data['menu_item_id'])) {
            return $this->failValidationErrors('Both order_id and menu_item_id are required.');
        }

        // Try to find an existing detail entry
        $existingDetail = $model->where('order_id', $data['order_id'])
            ->where('menu_item_id', $data['menu_item_id'])
            ->first();

        if ($existingDetail) {
            // If exists, update the existing record
            $updateStatus = $model->update($existingDetail['id'], $data);
            if ($updateStatus) {
                return $this->respondUpdated(['message' => 'Order detail updated successfully.', 'data' => $model->find($existingDetail['id'])]);
            } else {
                return $this->failServerError('Failed to update the order detail.');
            }
        } else {
            // If not exists, create a new record
            $insertedId = $model->insert($data);
            if ($insertedId) {
                return $this->respondCreated(['message' => 'Order detail created successfully.', 'data' => $model->find($insertedId)]);
            } else {
                return $this->failServerError('Failed to create a new order detail.');
            }
        }
    }
    public function getAllOrderDetails()
    {
        // Load the OrderDetailsModel
        $model = new OrderDetailsModel();

        // Perform a query to join the users table and fetch the needed fields
        $orderDetails = $model
            ->select('order_details.*, users.firstname AS kitchen_firstname, users.lastname AS kitchen_lastname,menu.name AS menu_name, menu.image AS menu_image ') // Select necessary columns
            ->join('users', 'users.id = order_details.kitchen_id', 'left') // Join users table on kitchen_id
            ->join('menu', 'menu.id = order_details.menu_item_id', 'left') // Join users table on kitchen_id
            ->findAll(); // Execute the query and get the results

        // Return the order details as JSON response
        return $this->respond($orderDetails);
    }
    public function getOrderDetails($orderId)
    {
        $model = new OrderDetailsModel();

        // Ensure the order ID is provided
        if (!$orderId) {
            return $this->failValidationErrors('Order ID is required');
        }

        $orderDetails = $model->getOrderWithMenuDetails($orderId);

        // Check if any order details were found
        if (is_array($orderDetails) && count($orderDetails) > 0) {
            return $this->respond($orderDetails);
        } else {
            // Instead of failing, return an empty array with a success response
            return $this->respond([]);
        }
    }


    public function addOrUpdateOnlineOrderDetail()
    {
        $model = new OrderDetailsModel();
        $data = $this->request->getJSON(true);

        // Check for necessary fields; assuming 'order_id' and 'menu_item_id' are required to identify a record
        if (!isset($data['order_id'], $data['menu_item_id'])) {
            return $this->failValidationErrors('Both order_id and menu_item_id are required.');
        }

        // Try to find an existing detail entry
        $existingDetail = $model->where('order_id', $data['order_id'])
            ->where('menu_item_id', $data['menu_item_id'])
            ->first();

        if ($existingDetail) {
            // If exists, update the existing record
            $updateStatus = $model->update($existingDetail['id'], $data);
            if ($updateStatus) {
                return $this->respondUpdated(['message' => 'Order detail updated successfully.', 'data' => $model->find($existingDetail['id'])]);
            } else {
                return $this->failServerError('Failed to update the order detail.');
            }
        } else {
            // If not exists, create a new record
            $insertedId = $model->insert($data);
            if ($insertedId) {
                return $this->respondCreated(['message' => 'Order detail created successfully.', 'data' => $model->find($insertedId)]);
            } else {
                return $this->failServerError('Failed to create a new order detail.');
            }
        }
    }

    public function updateOrderDetail($id)
    {
        $model = new OrderDetailsModel();

        // Check if the order detail ID is valid and numeric
        if (!is_numeric($id)) {
            return $this->failValidationErrors("Invalid order detail ID provided.");
        }

        $data = $this->request->getJSON(true);

        // Ensure that quantity and subtotal are provided and are valid
        // if (
        //     !isset($data['quantity']) || !is_numeric($data['quantity']) ||
        //     !isset($data['subtotal']) || !is_numeric($data['subtotal']) ||
        //     !isset($data['status'])
        // ) {
        //     return $this->failValidationErrors("Invalid or missing quantity or subtotal.");
        // }

        // Update the order detail record
        if ($model->update($id, $data)) {
            return $this->respondUpdated($data, 'Order detail updated successfully.');
        } else {
            return $this->failServerError('Failed to update order detail. Please check the provided data.');
        }
    }

    public function deleteOrderDetail($detailId)
    {
        $model = new OrderDetailsModel();

        // Check if the detail ID is provided
        if (!$detailId) {
            return $this->failValidationErrors('Detail ID is required');
        }

        // Try to find an existing detail entry
        $existingDetail = $model->find($detailId);

        if (!$existingDetail) {
            return $this->failNotFound('No detail found with ID: ' . $detailId);
        }

        // Attempt to delete the detail entry
        if ($model->delete($detailId)) {
            return $this->respondDeleted(['message' => 'Order detail deleted successfully.']);
        } else {
            return $this->failServerError('Failed to delete the order detail.');
        }
    }

    public function updateOrderStatus()
    {
        $json = $this->request->getJSON();
        $detailId = $json->detailId;
        $newStatus = $json->newStatus;

        // Assuming you have a model named OrderDetailModel
        $model = new OrderDetailsModel();
        if ($model->update($detailId, ['status' => $newStatus])) {
            return $this->response->setJSON(['success' => true, 'message' => 'Status updated successfully.']);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Failed to update status.']);
        }
    }
    public function deleteNote()
    {
        $model = new OrderDetailsModel();
        $data = $this->request->getJSON(true);

        // Check if 'order_id' and 'menu_item_id' are provided
        if (!isset($data['order_id'], $data['menu_item_id'])) {
            return $this->failValidationErrors('Both order_id and menu_item_id are required.');
        }

        // Find the existing order detail with the provided IDs
        $existingDetail = $model->where('order_id', $data['order_id'])
            ->where('menu_item_id', $data['menu_item_id'])
            ->first();

        if (!$existingDetail) {
            return $this->failNotFound('No detail found for the given order_id and menu_item_id');
        }

        // Set the note to null and update the record
        $updateStatus = $model->update($existingDetail['id'], ['note' => null]);

        if ($updateStatus) {
            return $this->respond(['message' => 'Note deleted successfully']);
        } else {
            return $this->failServerError('Failed to delete the note.');
        }
    }

}
