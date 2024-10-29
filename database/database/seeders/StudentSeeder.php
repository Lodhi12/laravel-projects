<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $students = collect([
            [
                'student_name' => "Ammar Lodhi",
                'email' => "ammarlodhi67@gmail.com",
                'city' => "Karachi",
                'age' => 22,
            ],
            [
                'student_name' => "Ammar Lodhi",
                'email' => "ammarlodhi67@gmail.com",
                'city' => "Karachi",
                'age' => 22,
            ],
            [
                'student_name' => "Ammar Lodhi",
                'email' => "ammarlodhi67@gmail.com",
                'city' => "Karachi",
                'age' => 22,
            ]
            ]);

            $students->each(function($student) {
                student::insert($student);
            });
        student::create([
            'student_name' => "Ammar Lodhi",
            'email' => "ammarlodhi67@gmail.com",
            'city' => "Karachi",
            'age' => 22,
        ]);
    }
}
