<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInquery extends Model
{
    protected $table="product_inquerys";
    protected $primarykey="id";
    use HasFactory;
}
