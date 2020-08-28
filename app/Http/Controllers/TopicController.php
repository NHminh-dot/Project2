<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\User;
use Session;


class TopicController extends Controller
{
    public function view_topic()
    {
    	$array_topic = Topic::all();//->orderBy('created_at','desc');
        // $user = User::find($id)
        // dd($array_topic);
    	return view("topic",[
    		"array_topic" => $array_topic
    	]);
    }
}
