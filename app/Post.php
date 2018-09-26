<?php

namespace App;

class Post extends Model
{
    //
    public function create(){
    	
    }

    public function comments(){
    	return $this->hasMany(Comment::class);
    }
}
