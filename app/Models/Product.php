<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // 🔥 WAJIB untuk CRUD (biar bisa insert/update)
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
    ];
}