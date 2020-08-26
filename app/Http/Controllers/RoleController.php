<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;


class RoleController extends Controller
{
    protected $table = "admin.role";
    public function view_all()
    {
    	$array_role = Role::all();
    	return view("$this->table.view_all",[
    		'array_role' => $array_role
    	]);	
    }
    public function view_insert()
    {
    	return view("$this->table.view_insert");
    }
    public function process_insert(Request $rq)
    {
    	Role::create($rq->all());

    	return redirect()->route("$this->table.view_all")->with("success", "Thêm role thành công");
    }
    public function view_update($id)
    {
    	$role = Role::find($id);
    	return view("$this->table.view_update",[
    		'role' => $role
    	]);
    }
    public function process_update($id, Request $rq)
    {
    	Role::find($id)->update($rq->all());

    	return redirect()->route("$this->table.view_all")->with("success", "Sửa role thành công");
    }
    public function delete($id)
    {
    	Role::find($id)->delete();
    	return redirect()->route("$this->table.view_all")->with("success", "Xóa role thành công");
    }
}
