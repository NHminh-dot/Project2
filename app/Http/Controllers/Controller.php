<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller//extends BaseController

{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function form()
    {
        return view('form');
    }
    public function process(Request $rq)
    {
        $ten = $rq->get('ten');
        return $ten;
    }

}
