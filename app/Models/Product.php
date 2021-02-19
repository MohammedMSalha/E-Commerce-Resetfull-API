<?php

namespace App\Models;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Product extends Model
{
    protected $fillable = ['name','details','stock','price','discount'];
    /**
    * Get all reviews for product.
    * @version 1.0 
    * @author Mohammed M.Salha
    */
    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
