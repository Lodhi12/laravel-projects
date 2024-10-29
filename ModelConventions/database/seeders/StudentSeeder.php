<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/students.json');
        $students = collect(json_decode($json));

        $students->each(function($student){
            Student::create([
                'name' => $student->name,
                'age' => $student->age,
                'city' => $student->city,
            ]);
        });
    }
}
