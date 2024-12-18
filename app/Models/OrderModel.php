<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['customer_id', 'created_at', 'updated_at', 'total_price', 'status', 'session_id', 'tendered', 'change1', 'service', 'note', 'payment_method', 'completed', 'customer_tag'];
    public function getOrdersBySession($sessionId)
    {
        return $this->where('session_id', $sessionId)->findAll();
    }

    public function getOrdersWithDetails()
    {
        $results = $this->select('orders.*, order_details.id as detail_id, menu.name as menu_name, menu.price as menu_price, menu.image as menu_image, order_details.quantity, order_details.note, order_details.status as detail_status, order_details.subtotal, categories.name as category_name, categories.icon as category_icon, users.firstname, users.lastname')
            ->join('order_details', 'order_details.order_id = orders.id', 'left')
            ->join('menu', 'menu.id = order_details.menu_item_id', 'left')
            ->join('categories', 'categories.id = menu.category_id', 'left')
            ->join('users', 'users.id = orders.customer_id', 'left') // Join the users table to get customer names
            ->findAll();

        // Restructure the results
        $orders = [];
        foreach ($results as $row) {
            $orderId = $row['id'];

            // Initialize the order if it doesn't exist
            if (!isset($orders[$orderId])) {
                $orders[$orderId] = [
                    'id' => $row['id'],
                    'customer_id' => $row['customer_id'],
                    'customer_tag' => $row['customer_tag'],
                    'customer_name' => $row['firstname'] . ' ' . $row['lastname'], // Concatenate firstname and lastname
                    'created_at' => $row['created_at'],
                    'updated_at' => $row['updated_at'],
                    'total_price' => $row['total_price'],
                    'status' => $row['status'],
                    'session_id' => $row['session_id'],
                    'tendered' => $row['tendered'],
                    'completed' => $row['completed'],
                    'change1' => $row['change1'],
                    'service' => $row['service'],
                    'note' => $row['note'],
                    'payment_method' => $row['payment_method'],
                    'details' => [] // Initialize the details array
                ];
            }

            // Add menu details to the details array
            if ($row['menu_name']) {
                $orders[$orderId]['details'][] = [
                    'detail_id' => $row['detail_id'],
                    'menu_name' => $row['menu_name'],
                    'menu_price' => $row['menu_price'],
                    'menu_image' => $row['menu_image'], // Add the image field
                    'quantity' => $row['quantity'],
                    'subtotal' => $row['subtotal'],
                    'note' => $row['note'],
                    'status' => $row['detail_status'],
                    'category_name' => $row['category_name'],
                    'category_icon' => $row['category_icon'],

                ];
            }
        }

        return array_values($orders); // Reset keys and return results
    }


    public function getLatestOrder()
    {
        return $this->orderBy('created_at   ', 'DESC') // or 'id', 'DESC'
            ->first();
    }


    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];
}
