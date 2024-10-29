<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = []; //agr mein ismein kisi bhi column ka naam paas krdeta hun tou uski value save nahi hogi
    //protected $fillable = ['name', 'email', 'age', 'city']; //agr kuch hatadou tou uska data save nahi hoga
}
