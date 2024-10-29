<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\AttendanceDetail;

class User extends Authenticatable
{
    protected $fillable = [
        'full_name', 
        'email', 
        'emp_id',
        'password'
    ];

    public function attendanceDetails(){
        return $this->hasMany(AttendanceDetail::class, 'user_id', 'id');
    }
}
