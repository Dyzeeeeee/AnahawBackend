<?php

namespace App\Models;

use CodeIgniter\Model;

class OnlineOrderModel extends Model
{
    protected $table = 'online_orders';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['customer_id', 'qrcode', 'confirmed', 'service', 'total_price', 'customer_tag', 'created_at', 'updated_at'];

    public function getOrdersWithCustomerName()
    {
        return $this->select('online_orders.*, users.firstname, users.lastname')
            ->join('users', 'users.id = online_orders.customer_id')
            ->findAll();
    }

    public function getOrdersWithCustomerNameAndDetails()
    {
        return $this->select('
            online_orders.id,
            online_orders.customer_id,
            online_orders.customer_tag,
            online_orders.created_at,
            online_orders.updated_at,
            online_orders.total_price,
            online_orders.service,
            online_orders.confirmed,
            online_order_details.id,
            menu.name as menu_name,
            menu.price as menu_price,
            menu.image as menu_image,
            online_order_details.quantity,
            online_order_details.subtotal,
            categories.name
        ')
            ->join('online_order_details', 'online_order_details.online_order_id = online_orders.id')
            ->join('menu', 'menu.id = online_order_details.menu_item_id') // Join with the menu table using menu_item_id
            ->join('categories', 'categories.id = menu.category_id')  // Assuming menu has category_id
            ->findAll();
    }

    public function createOrder($data)
    {
        $this->insert($data);
        return $this->insertID ? $this->insertID : false;
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
