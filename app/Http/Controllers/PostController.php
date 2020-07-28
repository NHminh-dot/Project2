<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;



class PostController extends Controller
{
    protected $table = "post";
    public function view_all()
    {
    	$array_post = Post::with("category")->paginate(10);
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
    	Post::create($rq->all());

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
    	Post::find($id)->update($rq->all());

    	return redirect()->route("$this->table.view_all")->with("success", "Sửa post thành công");
    }
    public function delete($id)
    {
        Post::find($id)->delete();

        return redirect()->route("$this->table.view_all")->with("success", "Xóa post thành công");
    }
}
