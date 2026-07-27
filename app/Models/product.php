<?php

namespace App\Models;

use illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //use HasFactory;
    protected $fillable = ['name', 'price', 'description', 'stok'];
}
