<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ProductReview extends Model
{
    protected $fillable=['user_id','product_id','rate','review','status'];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }

    public function product(){
        return $this->hasOne(Product::class,'id','product_id');
    }

}
