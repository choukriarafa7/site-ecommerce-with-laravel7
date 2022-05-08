<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PostCategory;
use App\Models\User;
use App\Models\PostComment;

class Post extends Model
{
    protected $fillable=['title','tags','summary','slug','description','photo','quote','post_cat_id','post_tag_id','added_by','status'];


    public function category(){
        return $this->hasOne(PostCategory::class);
    }
    public function tag(){
        return $this->hasOne(PostTag::class,'id','post_tag_id');
    }

    public function author(){
        return $this->hasOne(User::class,'id','added_by');
    } 

    public function comments(){
        return $this->hasMany(PostComment::class);
    }

    public function allComments(){
        return $this->hasMany(PostComment::class);
    }
}
