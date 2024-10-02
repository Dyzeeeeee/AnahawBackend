<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class try_table extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'description' => [
                'type'       => 'TEXT',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ]
        ]);
    
        $this->forge->addKey('id', true);
        $this->forge->createTable('try');
    }
    

    public function down()
    {
        $this->forge->dropTable('try');
    }
    
}