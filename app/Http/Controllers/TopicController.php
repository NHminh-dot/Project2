<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lop;


class LopController extends Controller
{
    public function view_all()
    {
    	$array_lop = Lop::all();
    	return view('view_all',[
    		'array_lop' => $array_lop
    	]);
    }
    public function view_insert()
    {
    	return view('view_insert');
    }
    public function process_insert(Request $rq)
    {
    	Lop::insert([
    		'ten' => $rq->ten
    	]);
    	return redirect() -> route('lop.view_all') -> with('success', 'Thêm lớp thành công');
    }
    public function view_update($ma)
    {
    	$lop = Lop::find($ma);

    	return view('view_update', ['lop' => $lop]);
    }
    public function process_update($ma, Request $rq)
    {
    	Lop::find($ma) -> update(['ten' => $rq->ten]);

    	return redirect() -> route('lop.view_all') -> with('success', 'Sửa lớp thành công');
    }
}
