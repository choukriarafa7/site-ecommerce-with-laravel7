<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    protected $fillable=['user_id','post_id','comment','replied_comment','parent_id','status'];

    public function user(){
        return $this->hasOne(User::class);
    }   

    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function replies(){
        return $this->hasMany(PostComment::class);
    }
}
