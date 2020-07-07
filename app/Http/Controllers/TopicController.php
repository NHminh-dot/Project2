<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;


class TopicController extends Controller
{
    public function view_all()
    {
    	$array_topic = Topic::all();
    	return view("view_all",[
    		'array_topic' => $array_topic
    	]);
    }
    public function view_insert()
    {
    	return view("topic.view_insert");
    }
    public function process_insert(Request $rq)
    {
    	Topic::create($rq->all());

    	return redirect()->route('topic.view_all')->with("success", "Thêm topic thành công");
    }
    public function view_update($id)
    {
    	$topic = Topic::find($id);

    	return view("topic.view_update", [
            'topic' => $topic]
        );
    }
    public function process_update($id, Request $rq)
    {
    	Topic::find($id)->update($rq->all());

    	return redirect()->route("topic.view_all")->with("success", "Sửa topic thành công");
    }
    public function delete($id)
    {
        Topic::find($id)->delete();

        return redirect()->route("topic.view_all")->with("Success", "Xóa topic thành công");
    }
}
