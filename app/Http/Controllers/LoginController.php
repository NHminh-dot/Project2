<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Session;
use Carbon\Carbon;


class LoginController //extends Controller
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "admin";
    public function view_login()
    {
    	return view("$this->table.view_login");
    }
    public function process_login(Request $rq)
    {
    	try {
    		$user = User::where("login_name", $rq->login_name)
    		->where("password", $rq->password)
    		->firstOrFail();

    		Session::put("user_id",$user->id);
    		Session::put("username",$user->username);
            Session::put("role_id",$user->role_id);
            Session::put("picture", $user->picture);

    		return redirect()->route("$this->table.welcome")->with("success", "Đăng nhập thành công");
    	} catch (Exception $e) {
    		return redirect()->route("$this->table.view_login")->with("error", "Đăng nhập sai rồi");
    	}
    }
    public function logout()
    {
        $user_id = Session::get("user_id");
        User::find($user_id)->update([
            "last_time_login" => Carbon::now()->toDateTimeString()
        ]);
    	Session::flush();
    	return redirect()->route("$this->table.view_login")->with("success", "Đăng xuất thành công");
    }
}
