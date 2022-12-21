<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    
    use HasFactory;
    public function categories(){
        return $this->hasOne(Category::class,'id','category_id');
    } 
    public function brand(){
        return $this->hasOne(Brand::class,'id','brand_id');
    } 

    public function image(){
        return $this->hasOne(Product_image::class,'product_id','id');
    } 
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
