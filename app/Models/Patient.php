<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
    'names' ,
    'last_names' ,
    'age' ,
    'gender' ,
    'CI' ,
    'blood_type' ,
    'phone' ,
    'email' ,
    'address'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
