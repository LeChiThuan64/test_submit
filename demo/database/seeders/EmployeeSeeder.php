<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Tạo admin
        Employee::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('adminpassword'),  // Mã hóa mật khẩu
            'role' => 0,  // admin
        ]);

        // Tạo 4 user
        Employee::create([
            'name' => 'User One',
            'email' => 'user1@example.com',
            'password' => Hash::make('userpassword'),  // Mã hóa mật khẩu
            'role' => 1,  // user
        ]);

        Employee::create([
            'name' => 'User Two',
            'email' => 'user2@example.com',
            'password' => Hash::make('userpassword'),  // Mã hóa mật khẩu
            'role' => 1,  // user
        ]);

        Employee::create([
            'name' => 'User Three',
            'email' => 'user3@example.com',
            'password' => Hash::make('userpassword'),  // Mã hóa mật khẩu
            'role' => 1,  // user
        ]);

        Employee::create([
            'name' => 'User Four',
            'email' => 'user4@example.com',
            'password' => Hash::make('userpassword'),  // Mã hóa mật khẩu
            'role' => 1,  // user
        ]);
    }
}
