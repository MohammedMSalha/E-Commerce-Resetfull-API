<?php

namespace App\Models;
use App\Models\Product; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Review extends Model
{

    /**
    * Get the product for review.
    * @version 1.0 
    * @author Mohammed M.Salha
    */
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
