<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Topic;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
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
        // $array_category = topic::with("category")->get();
        $array_topic = [];
        $list_topic = Topic::get();
        foreach ($list_topic as $key => $topic) {
            $array_category = Category::where('topic_id', $topic->id)
            ->get()->toArray();
            $array_topic[$topic->id]["category"] = $array_category;
            $array_topic[$topic->id]["name"] = $topic->name;
        }
        // dd($array_topic);
        return view("topic",
        ["array_topic" => $array_topic,
        ]);
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
    public function category($id)
    {
        $category_id = Category::find($id);

        // $array_post = Post::where('id',$id)->get();
        $array_category = Category::where('id',$id)->with("post")->get();
      
        return view("category",[
            "category_id" => $category_id,
            "array_category" => $array_category,
            // "array_comment" => $array_comment,
        ]);
    }
<<<<<<< HEAD
    public function follow()
    {
       $user_id = Session::get('user_id');
       $category_id = Category::find($id);
       FollowedCategory::create([
            'user_id' => $user_id,
            'category_id' => $category_id
       ]);
       return redirect()->route('category');
    } 
    public function reddit()
=======
    public function reddit(Request $rq)
>>>>>>> 87da27f39f848c389e6b3d2a1697f2576f9cf4b3
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
