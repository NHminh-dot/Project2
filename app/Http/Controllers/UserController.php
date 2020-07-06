<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;



class UserController extends Controller
{
    protected $table = 'user';
    public function view_all()
    {
    	$array_user = User::with("role")->get();

    	return view("$this->table.view_all",[
    		"array_user" => $array_user
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
}
