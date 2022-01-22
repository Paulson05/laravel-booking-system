<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'post';

    public function tags(){
        return $this->belongsTo(Tags::class, 'tag_id' );
    }

    public function category(){
        return $this->belongsTo(Category::class, 'categories_id');
    }
    function comments(){
        return $this->hasMany('App\Models\Comment')->orderBy('id','desc');
    }

}
