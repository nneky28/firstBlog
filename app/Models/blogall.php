<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogall extends Model
{
    use HasFactory;
    protected $table = 'blogalls';
    protected $fillable = ['author', 'name','title','content'];
}
