<?php 

Route::get('lop','LopController@view_all');
Route::get('lop/view_insert','LopController@view_insert')->name('lop.view_insert');