<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
    protected $fillable=['user_id','order_number','sub_total','quantity','delivery_charge','status','total_amount','first_name','last_name','country','post_code','address1','address2','phone','email','payment_method','payment_status','shipping_id','coupon'];

    public function cart(){
        return $this->hasMany(Cart::class);
    }
   
    public function shipping(){
        return $this->belongsTo(Shipping::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
