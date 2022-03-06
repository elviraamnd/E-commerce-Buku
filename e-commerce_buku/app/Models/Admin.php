<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = array('username', 'password', 'name', 'profile_image', 'phone');
    use HasFactory;
}
