<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Cold Drinks'],
            ['name' => 'Alcoholic Drinks'],
            ['name' => 'Mixed Cocktails'],
            ['name' => 'Hot Drinks'],
            ['name' => 'Boodle Bundles'],
            ['name' => 'Seafoods'], 
            ['name' => 'Noodles'],
            ['name' => 'Shrimp Squid'],
            ['name' => 'Sizzling Plates'],
            ['name' => 'Appetizers'],
            ['name' => 'Snacks'],
            ['name' => 'Breakfast'],
            ['name' => 'Sandwiches'],
            ['name' => 'Solo Plated'],
            ['name' => 'Rice'],
            ['name' => 'Soups'],
            ['name' => 'Vegetables'],
            ['name' => 'Biscuits'],
            ['name' => 'Hot Drinks'],
            ['name' => 'Snacks'],
            ['name' => 'Shake'],
            ['name' => 'Medicines'],
            ['name' => 'Groceries'],
            ['name' => 'Medicines'],
            ['name' => 'Liquors'],
            ['name' => ''],
            ['name' => ''],
        ];

        // Simple Query
        // $this->db->table('categories')->insert($data);

        // Batch Query (recommended for multiple inserts)
        $this->db->table('categories')->insertBatch($data);
    }
}