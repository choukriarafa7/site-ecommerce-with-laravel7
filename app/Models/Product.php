<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use App\Models\WishList;
use App\Models\Brand;

class Product extends Model
{
    protected $fillable=['title','slug','summary','description','cat_id','child_cat_id','price','brand_id','discount','status','photo','size','stock','is_featured','condition'];

    public function categroy(){
        return $this->hasOne(Category::class,'id','cat_id');
    }

    public function subCategory(){
        return $this->hasOne(Category::class,'id','child_cat_id');
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function brand()
    {
        return $this->hasOne(Brand::class,'id','brand_id');
    }

}
