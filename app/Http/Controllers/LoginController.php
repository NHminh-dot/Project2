<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class LoginController extends Controller
{
    public function view_login()
    {
    	return view('view_login');
    }
    public function process_login(Request $rq)
    {
    	try {
    		$user = User::where('login_name', $rq->login_name)
    		->where('password', $rq->password)
    		->firstOrFail();

    		Session::put('id',$user->id);
    		Session::put('username',$user->username);

    		return redirect()->route('welcome')->with('success', 'Đăng nhập thành công');
    	} catch (Exception $e) {
    		return redirect()->route('view_login')->with('error', 'Đăng nhập sai rồi');
    	}
    }
    public function logout()
    {
    	Session::flush();

    	return redirect()->route('view_login')->with('success', 'Đăng xuất thành công');
    }
}