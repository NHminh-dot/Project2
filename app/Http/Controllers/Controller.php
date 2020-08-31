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
    public function write_post()
    {
        $array_category = Post::with("category");
        $array_topic = Post::with("topic");
        return view("write_post",
        ["array_topic" => $array_topic,
        "array_category" => $array_category,
        ]);
    }
    public function index()
    {
        return view('index');
    }
    public function reddit()
    {
        // $time = now()->subDay();
        // $correctedComparisons = Comment::where('post_id')->get();
        // $commentList = Comment::where('post_id', '<=', $correctedComparisons)->get();
        // $commentCount = $commentList->count();
        // $comments = Comment::all();
        // $comment = Comment::groupBy('post_id')->having('count("post_id")', '<=', 'post_id')->get();
        $array_post = Post::with("user")->paginate(20);
        // $array_comment = Comment::with("post")->get();
        // $comments = Post::find('id')->comments;
        return view("reddit",[
            "array_post" => $array_post,
            // "comments" => $comments,
            // "array_comment" => $array_comment,
        ]);
    }
    public function comments($id)
    {
        $post_id = Post::find($id);
        // $array_post = Post::where('id',$id)->get();
        $array_post2 = Post::where('id',$id)->with("comments")->get();
        // dd($array_post2);
        return view("comments",[
            "post_id" => $post_id,
            // "array_post" => $array_post,
            "array_post2" => $array_post2
            // "array_comment" => $array_comment,
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
