<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Storage;


class Controller
{
    public function welcome()
    {
    	return view('welcome');
    }
    public function test()
    {
    	return view('test');
    }
    public function post_test(Request $rq)
    {
    	// $file_anh = $rq->file_anh->store('photo');

    	Storage::disk('public')->put('photo',$rq->file_anh);
    }
    public function show()
    {
    	return view('show');
    }
    public function index()
    {
        return view('index');
    }
    public function reddit()
    {
        return view('reddit');
    }
    public function view_self_info($id)
    {
        $user = User::find($id);
        $array_user = User::where('id','=',$id)->get();
        return view("view_self_info",[
            "user" => $user,
            "array_user" => $array_user,
        ]);
    }
}
