<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Correctly extending the User class
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable // Extend the Authenticatable class
{
    use HasFactory, Notifiable, HasApiTokens; // Include necessary traits

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Hide sensitive attributes such as password and remember_token
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Cast attributes to a specific data type
    protected $casts = [
        'email_verified_at' => 'datetime', // Optional: Cast email_verified_at to a datetime object
    ];
}
