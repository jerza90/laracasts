<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use JWTFactory;
use JWTAuth;
use Validator;
use Response;


use Illuminate\Http\Request;
use App\Post as Jomblo;
use App\Http\Resources\Tasks as TaskResources;
use App\Http\Resources\PostCollection;

class TasksController extends Controller
{
    //
    public function index(){

        $tasks = Jomblo::all();
        
        return view('tasks.index',compact('tasks'));
    }

    public function show(Jomblo $selectedtask){
    	//$tasks = Tasks::find($id);
        //dd($selectedtask);
        return view('tasks.show',compact('selectedtask'));
    }

    public function gettest(){
    	//$task = Jomblo::all();
    	dd($task);
    	return new PostCollection($task);
    }

    public function loginApi(Request $request){
    	dd($request);
    	// $validation = Validator::make($request->all(),[
    	// 	'username'=>'required|string|email',
    	// 	'password'=>'required'
    	// ]);

    	// if ($validator->fails()) {
     //        return response()->json($validator->errors());
     //    }
    }

    public function register(Request $request)
    {
    	//dd($request);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email'=>'required|unique',
            'password'=> 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
        ]);
        $user = User::first();
        $token = JWTAuth::fromUser($user);
        
        return Response::json(compact('token'));
    }

}
