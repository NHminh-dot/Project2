<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use Storage;


class UserController extends Controller
{
    protected $table = 'admin.user';
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
        // Storage::disk('public')->put('photo',$rq->picture);
    	$user = User::create($rq->all());
        if ($rq->has('picture')) {
            $user->update(['picture' => $rq->file('picture')->store('photo','public')]);
        }
        // dd($user);
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
        // if ($rq->has('new_picture')) {
        //     Storage::disk('public')->put('photo',$rq->new_picture);
        // }
        // $user = User::find($id);
        // Storage::disk('public')->put('photo',$rq->new_picture);
    	User::find($id)->update($rq->all());
    	return redirect()->route("$this->table.view_all")->with("success", "Sửa user thành công");
    }
    public function delete($id)
    {
    	User::find($id)->delete();
    	return redirect()->route("$this->table.view_all")->with("success", "Xóa user thành công");
    }
    public function view_self_info($id)
    {
        // $user = User::find($id);
        // $array_role = Role::get();
        // return view("$this->table.view_self_info",[
        //     "user" => $user,
        //     "array_role" => $array_role,
        // ]);
        $user = User::find($id);
        return view("$this->table.view_self_info",[
            "user" => $user,
        ]);
    }
    // public function updatePhoto($id, Request $rq)
    // {
    //     Controller::updatePicture();
    // }
}
