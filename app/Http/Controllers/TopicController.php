<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\User;
use App\Models\Category;
use Session;


class TopicController extends Controller
{
    public function view_topic($category)
    {
    	$array_topic = Topic::all();
    	$array_category = Category::all();//->orderBy('created_at','desc');
        // $user = User::find($id)
        // dd($array_topic);
    	return view("topic",[
    		"array_topic" => $array_topic,
    		"array_category" => $array_category
    	]);
    }
    public function view_category()
    {
    	return view ("category");
    }
    
}
