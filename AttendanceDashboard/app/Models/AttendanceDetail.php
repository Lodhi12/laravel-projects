<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AttendanceStatus;
use App\Models\Attendance;
use App\Models\User;

class AttendanceDetail extends Model
{
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function attendance()
    {
        return $this->belongsTo(Attendance::class);
    }

    public function attendanceStatus(){
        return $this->belongsTo(AttendanceStatus::class, 'attendance_status_id', 'id');
    }
}
