<?php

namespace App\Models;

use CodeIgniter\Model;

class OnlineOrderDetailsModel extends Model
{
    protected $table            = 'online_order_details';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['menu_item_id', 'quantity', 'subtotal', 'online_order_id'];  

    public function getOrderWithMenuDetails($orderId)
    {
        return $this->select('online_order_details.*, menu.name, menu.price, menu.image')
                    ->join('menu', 'menu.id = online_order_details.menu_item_id') // Corrected join condition
                    ->where('online_order_details.online_order_id', $orderId) // Assuming 'online_order_id' is the FK
                    ->findAll();
    }
    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
