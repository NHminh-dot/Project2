<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Session;
use App\Http\Requests\PostRequest;
use Datetime;

class PostController extends Controller
{
    protected $table = "admin.post";
    public function view_all()
    {
    	$array_post = Post::with("category")->orderBy('id','desc')->paginate(50);
    	return view("$this->table.view_all",[
    		"array_post" => $array_post
    	]);
    }
    public function view_insert()
    {
        $array_category = Category::get();
    	return view("$this->table.view_insert",[
            "array_category" => $array_category
        ]);
    }
    public function process_insert(Request $rq)
    {
    	// Post::create($rq->all());
        $user_id = Session::get('user_id');
        $title = $rq->title;
        $content = $rq->content;
        $category_id = $rq->category_id;
        Post::create([
            'title' => $title,
            'content' => $content,
            'created_by' => $user_id,
            'category_id' => $category_id,
        ]); 

    	return redirect()->route("$this->table.view_all")->with("success", "Thêm post thành công");
    }
    public function view_update($id)
    {
    	$post = Post::find($id);
        $array_category = Category::get();
        $array_user = User::get();
        // dd($array_user);
    	return view("$this->table.view_update", [
            "post" => $post,
            "array_category" => $array_category,
            "array_user" => $array_user,
        ]);
        
    }
    public function process_update($id, Request $rq)
    {
        if ($rq->has('status')) {
            $created_at = new DateTime('now');
            $array_update = array_merge($rq->except('created_at'),['created_at' => $created_at]);
        }
        else{
            $array_update = array_merge($rq->except('created_at'));   
        }
        Post::find($id)->update($array_update);
    	// Post::find($id)->update($rq->all());

    	return redirect()->route("$this->table.view_all")->with("success", "Sửa post thành công");
    }
    public function delete($id)
    {
        Post::find($id)->delete();

        return redirect()->route("$this->table.view_all")->with("success", "Xóa post thành công");
    }
    public function submit(Request $rq)
    {
        $array_post = Post::get();
        $array_category = Category::get();
        return view("submit",[
            "array_post" => $array_post,
            "array_category" => $array_category,
        ]);
    }
    public function store(Request $rq)
    {
        // validate
        // $validatedData = $request->validate([
        //     'title' => 'required|unique:posts|max:255',
        //     'content' => 'required',
        // ]);

        //Store
        $user_id = Session::get('user_id');
        $title = $rq->title;
        $content = $rq->content;
        $category_id = $rq->category_id;
        $insert_post = Post::create([
            'title' => $title,
            'content' => $content,
            'created_by' => $user_id,
            'category_id' => $category_id,
        ]);
        // dd($insert_post);
        return redirect()->route("reddit");
    }
    public function list_post_confirm()
    {
        $array_post = Post::with("category")->paginate(50);
        return view("$this->table.view_all",[
            "array_post" => $array_post
        ]);
    }
}
