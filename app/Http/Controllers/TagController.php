<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    protected $table = "admin.tag";
    public function view_all()
    {
    	$array_tag = Tag::all();
    	return view("$this->table.view_all",[
    		'array_tag' => $array_tag
    	]);	
    }
    public function view_insert()
    {
    	return view("$this->table.view_insert");
    }
    public function process_insert(Request $rq)
    {
    	Tag::create($rq->all());

    	return redirect()->route("$this->table.view_all")->with("success", "Thêm tag thành công");
    }
    public function view_update($id)
    {
    	$tag = Tag::find($id);
    	return view("$this->table.view_update",[
    		'tag' => $tag
    	]);
    }
    public function process_update($id, Request $rq)
    {
    	Tag::find($id)->update($rq->all());

    	return redirect()->route("$this->table.view_all")->with("success", "Sửa tag thành công");
    }
    public function delete($id)
    {
    	Tag::find($id)->delete();
    	return redirect()->route("$this->table.view_all")->with("success", "Xóa tag thành công");
    }
}
