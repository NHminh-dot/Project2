<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Session;
use Carbon\Carbon;

class UserLoginController //extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function process_login(Request $rq)
    {
        // dd($rq);
         // $user = User::where('login_name', $rq->username)
         // ->where('password', $rq->password)
         // ->first();
         // dd($user);

    	try {
    		$user = $user = User::where('login_name', $rq->username)
         ->where('password', $rq->password)
    		->firstOrFail();

    		Session::put('user_id',$user->id);
    		Session::put('username',$user->username);
            Session::put('picture', $user->picture);

    		return redirect()->route('reddit',[$user->username,$user->picture]);//->with('success', 'Đăng nhập thành công');
    	} catch (Exception $e) {
    		// dd($e);
    		return redirect()->route('login')->with('error', 'Đăng nhập sai rồi');
    	}
    }
    public function logout()
    {
        $user_id = Session::get('user_id');
        User::find($user_id)->update([
            'last_time_login' => Carbon::now()->toDateTimeString()
        ]);
    	Session::flush();

    	return redirect()->route('reddit')->with('success', 'Đăng xuất thành công');
    }
}
