<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderDetailsModel extends Model
{
    protected $table = 'order_details';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['order_id', 'menu_item_id', 'quantity', 'subtotal', 'status', 'note', 'kitchen_id'];

    public function getOrderWithMenuDetails($orderId)
    {
        return $this->select('order_details.*, menu.name, menu.price, menu.image')
            ->join('menu', 'menu.id = order_details.menu_item_id') // Corrected join condition
            ->where('order_details.order_id', $orderId) // Assuming '' is the FK
            ->findAll();
    }

    public function removeNoteByItem($orderId, $menuItemId)
    {
        return $this->where('order_id', $orderId)
                    ->where('menu_item_id', $menuItemId)
                    ->set(['note' => null])  // Set the note to null
                    ->update();
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
