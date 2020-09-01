<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostTag;
use App\Models\Tag;
use App\Models\Post;

class PostTagController extends Controller
{
    protected $table = "admin.post_tag";
    public function view_all()
    {
    	$array_post_tag = PostTag::all();
    	return view("$this->table.view_all",[
    		'array_post_tag' => $array_post_tag
    	]);	
    }
    public function view_insert()
    {
        $array_tag = Tag::all();
        $array_post = Post::all();
    	return view("$this->table.view_insert",[
            "array_tag" => $array_tag,
            "array_post" => $array_post,
        ]);
    }
    public function process_insert(Request $rq)
    {
    	PostTag::create($rq->all());

    	return redirect()->route("$this->table.view_all")->with("success", "Thêm post tag thành công");
    }
    public function view_update($id)
    {
    	$post_tag = PostTag::find($id);
    	return view("$this->table.view_update",[
    		'post_tag' => $post_tag
    	]);
    }
    public function process_update($id, Request $rq)
    {
    	PostTag::find($id)->update($rq->all());

    	return redirect()->route("$this->table.view_all")->with("success", "Sửa post tag thành công");
    }
    public function delete($id)
    {
    	PostTag::find($id)->delete();
    	return redirect()->route("$this->table.view_all")->with("success", "Xóa post tag thành công");
    }
}
