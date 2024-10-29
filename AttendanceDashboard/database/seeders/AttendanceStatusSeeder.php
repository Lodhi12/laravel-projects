<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AttendanceStatus;

class AttendanceStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AttendanceStatus::create([
            "attendance_status" => "Present"
        ]);

        AttendanceStatus::create([
            "attendance_status" => "Absent"
        ]);

        AttendanceStatus::create([
            "attendance_status" => "Late"
        ]);

        AttendanceStatus::create([
            "attendance_status" => "Leave"
        ]);

        AttendanceStatus::create([
            "attendance_status" => "Leave Without Informed"
        ]);
    }
}
