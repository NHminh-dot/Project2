<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use Session;

class CommentController extends Controller
{
    protected $table = "comment";
    public function view_all()
    {
    	$array_comment = Comment::with("post")->paginate(30);
    	return view("$this->table.view_all", [
    		"array_comment" => $array_comment
    	]);
    }
    public function view_insert()
    {
    	$array_post = Post::get();
    	return view("$this->table.view_insert", [
    		"array_post" => $array_post
    	]);
    }
    public function process_insert(Request $rq)
    {
    	// Comment::create($rq->all());
        $user_id = Session::get('user_id');
        $content = $rq->content;
        $post_id = $rq->post_id;
        Comment::create([
            'content' => $content,
            'created_by' => $user_id,
            'post_id' => $post_id,
        ]); 

    	return redirect()->route("$this->table.view_all")->with("success", "Thêm comment thành công");
    }
    public function view_update($id)
    {
    	$comment = Comment::find($id);
        $array_category = Category::get();
        $array_user = User::get();
        // dd($array_user);
    	return view("$this->table.view_update", [
            "comment" => $comment,
            "array_category" => $array_category,
            "array_user" => $array_user,
        ]);
       
    }
    public function process_update($id, Request $rq)
    {
    	Comment::find($id)->update($rq->all());

    	return redirect()->route("$this->table.view_all")->with("success", "Sửa comment thành công");
    }
    public function delete($id)
    {
        Comment::find($id)->delete();

        return redirect()->route("$this->table.view_all")->with("success", "Xóa comment thành công");
    }
}
