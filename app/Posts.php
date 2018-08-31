<?php

namespace App;



class Posts extends Model
{
    public function comments()
    {
    		return $this->hasMany(Comment::class);
    } 

    public function addComment($body)
    {
    		 $this->comments()->create(compact('body'));
    }
}
