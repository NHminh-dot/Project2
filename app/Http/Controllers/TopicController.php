<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\User;
use App\Models\Category;
use Session;


class TopicController extends Controller
{
    protected $table = "admin.topic";
    public function view_all()
    {
    	$array_topic = Topic::with("user")->get();//->orderBy('created_at','desc');
        // $user = User::find($id)

    	return view("$this->table.view_all",[
    		"array_topic" => $array_topic
    	]);
    }
    public function view_insert()
    {
        $user_id = Session::get('user_id');
    	return view("$this->table.view_insert",[
            'user_id' => $user_id,
        ]);
    }
    public function process_insert(Request $rq)
    {
        $user_id = Session::get('user_id');
        $name = $rq->name;
        $description = $rq->description;
    	Topic::create([
            'name' => $name,
            'description' => $description,
            'created_by' => $user_id,
        ]);
    	return redirect()->route("$this->table.view_all")->with("success", "Thêm topic thành công");
    }
    public function view_update($id)
    {
    	$topic = Topic::find($id);

    	return view("$this->table.view_update", [
            "topic" => $topic
        ]);
    }
    public function process_update($id, Request $rq)
    {
    	Topic::find($id)->update($rq->all());

    	return redirect()->route("$this->table.view_all")->with("success", "Sửa topic thành công");
    }
    public function delete($id)
    {
        Topic::find($id)->delete();

        return redirect()->route("$this->table.view_all")->with("success", "Xóa topic thành công");
    }
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
