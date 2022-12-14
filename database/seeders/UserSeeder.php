<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrays = [
            [
                'name' => 'Admin',
                'email' => 'admin1@carin.com',
                'password' => Hash::make('admin'),
                'role' => 'admin',
            ],
            [
                'name' => 'Customer 1',
                'email' => 'customer3@carin.com',
                'password' => Hash::make('customer'),
                'role' => 'customer',
            ],
            [
                'name' => 'Customer 2',
                'email' => 'customer2@carin.com',
                'password' => Hash::make('customer'),
                'role' => 'customer',
            ],
        ];

        foreach ($arrays as $row) {
            User::create([
                'name' => $row['name'],
                'email' => $row['email'],
                'password' => $row['password'],
                'role' => $row['role'],
                'photo' => null,
            ]);
        }
    }
}
