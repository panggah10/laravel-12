<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Factories\HasFactory;
class Product extends Model
{
    // untuk mengisi data ke dalam database
    use HasFactory;

    protected $fillable=[
        'image',
        'title',
        'description',
        'price',
        'stock',
    ];
}
