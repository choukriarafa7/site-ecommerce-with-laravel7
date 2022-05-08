<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class PostCategory extends Model
{
    protected $fillable=['title','slug','status'];

    public function post(){
        return $this->hasMany(Post::class);
    }
}
