<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\User;


class TopicController extends Controller
{
    protected $table = "topic";
    public function view_all()
    {
    	$array_topic = Topic::with("user")->paginate(10);
    
    	return view("$this->table.view_all",[
    		"array_topic" => $array_topic
    	]);
    }
    public function view_insert()
    {
        
    	return view("$this->table.view_insert");
    }
    public function process_insert(Request $rq)
    {
    	Topic::create($rq->all());
    	return redirect()->route("$this->table.view_all")->with("success", "Thêm topic thành công");
    }
    public function view_update($id)
    {
    	$topic = Topic::find($id);

    	return view("$this->table.view_update", [
            "topic" => $topic]
        );
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
