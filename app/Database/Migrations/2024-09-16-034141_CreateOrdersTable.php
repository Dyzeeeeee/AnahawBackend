<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'customer_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => true,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'total_price' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'customer_tag' => [
                'type'       => 'ENUM',
                'constraint' => range('A', 'Z'), // Create an enum from A to Z
                'null'       => true, // Set to false if you want this field to be required
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['pending', 'completed', 'cancelled'],
                'default' => 'pending',
            ],
            'session_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'tendered' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null' => true,
            ],
            'change1' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null' => true,
            ],
            'service' => [
                'type' => 'ENUM',
                'constraint' => ['Dine in', 'Take out'],
                'default' => 'Dine in',
            ],
            'note' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'payment_method' => [ // New column for payment method
                'type' => 'ENUM',
                'constraint' => ['gcash', 'bank', 'cash', 'paypal'], // Define the possible values
                'default' => 'cash', // Default value if not specified
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('customer_id', 'users', 'id', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('session_id', 'sessions', 'id', 'CASCADE', 'CASCADE'); // Add foreign key for session_id
        $this->forge->createTable('orders');
    }


    public function down()
    {
        $this->forge->dropTable('orders');
    }
}