<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Topic;



class CategoryController extends Controller
{
    protected $table = "category";
    public function view_all()
    {
    	$array_category = Category::with("topic")->paginate(10);
    	return view("$this->table.view_all",[
    		"array_category" => $array_category
    	]);
    }
    public function view_insert()
    {
        $array_topic = Topic::get();
    	return view("$this->table.view_insert",[
            "array_topic" => $array_topic
        ]);
    }
    public function process_insert(Request $rq)
    {
    	Category::create($rq->all());

    	return redirect()->route("$this->table.view_all")->with("success", "Thêm category thành công");
    }
    public function view_update($id)
    {
    	$category = Category::find($id);
        $array_topic = Topic::get();
        $array_user = User::get();
        // dd($array_user);
    	return view("$this->table.view_update", [
            "category" => $category,
            "array_topic" => $array_topic,
            "array_user" => $array_user,
        ]);
        
    }
    public function process_update($id, Request $rq)
    {
    	Category::find($id)->update($rq->all());

    	return redirect()->route("$this->table.view_all")->with("success", "Sửa category thành công");
    }
    public function delete($id)
    {
        Category::find($id)->delete();

        return redirect()->route("$this->table.view_all")->with("success", "Xóa category thành công");
    }
}
