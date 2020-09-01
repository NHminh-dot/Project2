<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Storage;
use Carbon\Carbon;


class Controller
{
    public function welcome()
    {
    	return view("admin.welcome");
    }
    public function topic()
    {
        return view("topic");

    }
    public function post_test(Request $request)
    {
    	// $file_anh = $rq->file_anh->store('photo');

    	Storage::disk('public')->put('photo',$request->file_anh);
    }
    public function show()
    {
    	return view('show');
    }
    public function index()
    {
        return view('index');
    }
    public function reddit(Request $rq)
    {
        // $time = now()->subDay();
        // $correctedComparisons = Comment::where('post_id')->get();
        // $commentList = Comment::where('post_id', '<=', $correctedComparisons)->get();
        // $commentCount = $commentList->count();
        // $comments = Comment::all();
        // $comment = Comment::groupBy('post_id')->having('count("post_id")', '<=', 'post_id')->get();
        // $array_comment = Comment::with("post")->get();
        // $comments = Post::find('id')->comments;
        $search = $rq->search;
        $array_post = Post::with("user")->where('title','like',"%$search%")->orderBy('id','desc')->paginate(20);
        return view("reddit",[
            "search" => $search,
            "array_post" => $array_post,
        ]);
    }
    public function comments($id, Request $rq)
    {
        // $array_post = Post::where('id',$id)->get();
        // dd($array_post2);
        $search = $rq->search;
        $post_id = Post::find($id);
        $array_post2 = Post::where('id',$id)->where('title','like',"%$search%")->with("comments")->get();
        return view("comments",[
            'search' => $search,
            "post_id" => $post_id,
            "array_post2" => $array_post2
        ]);
    }
    public function view_self_info($id)
    {
        $user = User::find($id);
        $array_user = User::where('id','=',$id)->get();
        return view("admin.view_self_info",[
            "user" => $user,
            "array_user" => $array_user,
        ]);
    }
    public function updatePicture($id, Request $rq)
    {
        // if ($rq->has('new_picture')) {
        //     $user->update(['new_picture' => $rq->file('new_picture')->store('photo','public')]);
        // }
        Storage::disk('public')->put('photo',$request->new_picture);
    }
    protected $table = 'user';
    public function view_all_test(Request $rq)
    {
        $search_username = $rq->search_username;
        $array_user = User::where('username','like',"%$search_username%")->with("role")->paginate(10);
        return view("$this->table.view_all_test",[
            "array_user" => $array_user,
            "search_username" => $search_username,
        ]); 
        // return view('user.view_all_test');
    }
    public function sign_up()
    {
        return view('sign_up');
    }
}
