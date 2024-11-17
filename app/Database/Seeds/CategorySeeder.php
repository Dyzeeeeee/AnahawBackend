<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Cold Drinks', 'icon' => 'mdi:glass-cocktail'], // Example: Cocktail glass icon
            ['name' => 'Alcoholic Drinks', 'icon' => 'mdi:beer'], // Example: Beer mug icon
            ['name' => 'Mixed Cocktails', 'icon' => 'mdi:cocktail'], // Example: Cocktail icon
            ['name' => 'Hot Drinks', 'icon' => 'mdi:coffee'], // Example: Coffee icon
            ['name' => 'Boodle Bundles', 'icon' => 'mdi:food-fork-drink'], // Example: Food icon
            ['name' => 'Seafoods', 'icon' => 'mdi:fish'], // Example: Fish icon
            ['name' => 'Noodles', 'icon' => 'mdi:noodle'], // Example: Noodle icon
            ['name' => 'Shrimp Squid', 'icon' => 'mdi:shrimp'], // Example: Shrimp icon
            ['name' => 'Sizzling Plates', 'icon' => 'mdi:plate'], // Example: Plate icon
            ['name' => 'Appetizers', 'icon' => 'mdi:apps'], // Example: Appetizer icon
            ['name' => 'Snacks', 'icon' => 'mdi:chips'], // Example: Chips icon
            ['name' => 'Breakfast', 'icon' => 'mdi:bread-slice'], // Example: Bread slice icon
            ['name' => 'Sandwiches', 'icon' => 'mdi:sandwich'], // Example: Sandwich icon
            ['name' => 'Solo Plated', 'icon' => 'mdi:plate-outline'], // Example: Outline plate icon
            ['name' => 'Rice', 'icon' => 'mdi:rice'], // Example: Rice icon
            ['name' => 'Soups', 'icon' => 'mdi:pot'], // Example: Pot icon
            ['name' => 'Vegetables', 'icon' => 'mdi:carrot'], // Example: Carrot icon
            ['name' => 'Biscuits', 'icon' => 'mdi:cookie'], // Example: Cookie icon
            ['name' => 'Shake', 'icon' => 'mdi:cup'], // Example: Cup icon
            ['name' => 'Medicines', 'icon' => 'mdi:pill'], // Example: Pill icon
            ['name' => 'Groceries', 'icon' => 'mdi:cart'], // Example: Cart icon
            ['name' => 'Liquors', 'icon' => 'mdi:whiskey'], // Example: Whiskey glass icon
        ];

        // Batch Query (recommended for multiple inserts)
        $this->db->table('categories')->insertBatch($data);
    }
}
