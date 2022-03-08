<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogss extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = ['email', 'name', 'password'];
}
