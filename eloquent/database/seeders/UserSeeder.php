<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/users.json');
        $users = collect(json_decode($json));

        $users->each(function($users){
            User::create([
                'name'=> $users->name,
                'email'=> $users->email,
                'age'=> $users->age,
                'city'=> $users->city,
            ]);
            
        });
    }
}
