<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    public $table = 'products';

    protected $fillable = [
        'image',
        'name',
        'description',
        'qty',
        'price'
    ];
}
