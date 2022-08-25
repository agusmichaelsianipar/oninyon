<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'date_of_birth', 'address', 'photo','phone_number','user_id'
    ];
}
