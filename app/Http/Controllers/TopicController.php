<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\User;
use Session;


class TopicController extends Controller
{
    protected $table = "topic";
    public function view_all()
    {
    	$array_topic = Topic::with("user")->paginate(10);//->orderBy('created_at','desc');
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
        // Topic::create($rq->all());
        // $create = Topic::create(request([
        //     'name' => request('name'),
        //     'description' => request('description'),
        //     'created_by' => $user_id
        // ]));
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
}
