<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AttendanceDetail;

class AttendanceStatus extends Model
{
    public function attendances(){
        return $this->hasMany(AttendanceDetail::class, 'attendance_status_id', 'id');
    }
}
