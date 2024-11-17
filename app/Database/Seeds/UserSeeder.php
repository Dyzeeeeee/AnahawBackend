<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Define roles and their corresponding emails
        $roles = [
            'admin',
            'customer',
            'staff',
            'kitchen',
            'bar',
            'waiter',
            'accountant',
            'cashier',
        ];

        foreach ($roles as $role) {
            $this->db->table('users')->insert([
                'firstname' => ucfirst($role) . ' Firstname',
                'lastname'  => ucfirst($role) . ' Lastname',
                'phone'     => '1234567890', // Sample phone number
                'email'     => strtolower($role) . '@example.com',
                'password'  => password_hash(strtolower($role) . '@example.com', PASSWORD_DEFAULT), // Hashing the password
                'picture'   => null, // Set this to a default picture URL if needed
                'birthday'  => null, // Set this to a default date if needed
                'address'   => null, // Set this to a default address if needed
                'role'      => $role,
            ]);
        }
    }
}
