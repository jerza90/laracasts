<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use JWTFactory;
use JWTAuth;
use Validator;
use Response;

use Illuminate\Http\Request;
use App\Tasks as Jomblo;
use App\Http\Resources\Tasks as TaskResources;
use App\Http\Resources\PostCollection;

class Posts extends Controller
{
    //
    public function create(){
    	//dd("die");
    	$tasks = Jomblo::all();
    	return view('tasks.create',compact('tasks'));
    }

    public function indexpost(){
    	//dd("here");
    	$tasks = Jomblo::all();
        //createdd($tasks);
        return view('tasks.index',compact('tasks'));
    }
}
