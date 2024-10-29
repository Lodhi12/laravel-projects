<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Phone_number;
use App\Models\Company;

class users extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function company(){
        return $this->hasOne(company::class);
    }

    public function phoneNumber(){
        return $this->hasOneThrough(Phone_number::class, Company::class);
    }
}
