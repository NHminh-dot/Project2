<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSignUp;
use App\Http\Requests\SignUpRequest;

class SignUpController extends Controller
{
    public function sign_up_process(Request $rq)
	 {

	 	// dd($rq);
	 	$username = $rq->username;
	 	$login_name = $rq->login_name;
	 	$password = $rq->password;
	 	$email = $rq->email;
	 	$dob = $rq->date_of_birth;
	 	$gender = $rq->gender;
	 	UserSignUp::create([
	 		'username' => $username,
	 		'login_name' => $login_name,
	 		'password' => $password,
	 		'email'=> $email,
	 		'date_of_birth'=>$dob,
	 		'gender'=>$gender,
	 		'role_id' => '1',
	 	]);
	 	// dd($rq);
	 	return redirect()->route("reddit")->with("success","Sign up success!");
	 }
}
