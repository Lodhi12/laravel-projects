<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AttendanceDetails;


class Attendance extends Model
{
    public function attendanceDetails(){
        return $this->hasMany(AttendanceDetail::class, 'attendance_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
