<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use Storage;


class UserController extends Controller
{
    protected $table = 'user';
    public function view_all(Request $rq)
    {
        $search_username = $rq->search_username;
    	$array_user = User::where('username','like',"%$search_username%")->with("role")->paginate(10);

    	return view("$this->table.view_all",[
    		"array_user" => $array_user,
            "search_username" => $search_username,
    	]);	
    }
    public function view_insert()
    {
        $array_role = Role::get();
    	return view("$this->table.view_insert",[
            "array_role" => $array_role
        ]);
    }
    public function process_insert(Request $rq)
    {
        Storage::disk('public')->put('photo',$rq->picture);
    	User::create($rq->all());
    	return redirect()->route("$this->table.view_all")->with("success", "Thêm user thành công");
    }
    public function view_update($id)
    {
    	$user = User::find($id);
        $array_role = Role::get();
    	return view("$this->table.view_update",[
    		"user" => $user,
            "array_role" => $array_role,
    	]);
    }
    public function process_update($id, Request $rq)
    {
    	User::find($id)->update($rq->all());

    	return redirect()->route("$this->table.view_all")->with("success", "Sửa user thành công");
    }
    public function delete($id)
    {
    	User::find($id)->delete();
    	return redirect()->route("$this->table.view_all")->with("success", "Xóa user thành công");
    }
    public function view_self_info(Request $rq)
    {
        Controller::process_login();
        $user = User::find($id);
        $array_role = Role::get();
        return view("$this->table.view_self",[
            "user" => $user,
            "array_role" => $array_role,
        ]);
    }
}
