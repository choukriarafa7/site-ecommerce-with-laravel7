<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Category;

class Category extends Model
{
    protected $fillable=['title','slug','summary','photo','status','is_parent','parent_id','added_by'];

    public function category(){
        return $this->hasOne(Category::class,'id','parent_id');
    }

    public function subCategory(){
        return $this->hasMany('App\Models\Category','parent_id','id');
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
