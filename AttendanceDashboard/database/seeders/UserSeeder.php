<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "full_name" => "Admin",
            "email" => "admin@live.com",
            "password" => Hash::make("admin"),
            "emp_id" => "0001"
        ]);
    }
}
