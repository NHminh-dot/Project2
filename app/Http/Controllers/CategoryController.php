<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Topic;
use Session;



class CategoryController extends Controller
{
    protected $table = "admin.category";
    public function view_all()
    {
    	$array_category = Category::with("topic")->get();
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
    	// Category::create($rq->all());
        $user_id = Session::get('user_id');
        $name = $rq->name;
        $description = $rq->description;
        $topic_id = $rq->topic_id;
        Category::create([
            'name' => $name,
            'description' => $description,
            'created_by' => $user_id,
            'topic_id' => $topic_id,
        ]);

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
    public function view_category()
    {
        $array_category = Category::with("topic")->get();
        return view("category",[
            "array_category" => $array_category
        ]);
    }
}
