<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_attributes extends Model
{
    use HasFactory;
    protected $table = "product_attributes";
    public function get_attr(){
        return $this->hasOne(Attribute::class,'id','attribute_id');
    } 
    public function get_attr_value(){
        return $this->hasOne(AttributeValue::class,'id','attribute_value_id');
    } 
}
