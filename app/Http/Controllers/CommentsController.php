<?php

namespace App\Http\Controllers;
use App\Post;
use App\Comment;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //
    public function addComment(Post $post){
    	dd($post);
    	
    	Comment::create([
    		'post_body' => request('body'),

    		'post_id' => request('')
    	]);
    }
}
