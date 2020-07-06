<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller
{
    public function welcome()
    {
    	return view('welcome');
    }
}
