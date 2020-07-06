<?php 

$controller = "UserController";
Route::group(["prefix" => "user","as" => "user."], function() use($controller)
{
	Route::get("","$controller@view_all")->name("view_all");
	Route::get("view_insert","$controller@view_insert")->name("view_insert");
	Route::post("process_insert","$controller@process_insert")->name("process_insert");  
	Route::get("view_update/{id}","$controller@view_update")->name("view_update");
	Route::post("process_update/{id}","$controller@process_update")->name("process_update");
	Route::get("delete/{id}","$controller@delete")->name("delete");
});

$controller = "RoleController";
Route::group(["prefix" => "role","as" => "role."], function() use($controller)
{
	Route::get("","$controller@view_all")->name("view_all");
	Route::get("view_insert","$controller@view_insert")->name("view_insert");
	Route::post("process_insert","$controller@process_insert")->name("process_insert");  
	Route::get("view_update/{id}","$controller@view_update")->name("view_update");
	Route::post("process_update/{id}","$controller@process_update")->name("process_update");
	Route::get("delete/{id}","$controller@delete")->name("delete");
});

$controller = "TopicController";
Route::group(["prefix" => "topic","as" => "topic."], function() use($controller)
{
	Route::get("","$controller@view_all")->name("view_all");
	Route::get("view_insert","$controller@view_insert")->name("view_insert");
	Route::post("process_insert","$controller@process_insert")->name("process_insert");  
	Route::get("view_update/{id}","$controller@view_update")->name("view_update");
	Route::post("process_update/{id}","$controller@process_update")->name("process_update");
	Route::get("delete/{id}","$controller@delete")->name("delete");
});

$controller = "CategoryController";
Route::group(["prefix" => "category","as" => "category."], function() use($controller)
{
	Route::get("","$controller@view_all")->name("view_all");
	Route::get("view_insert","$controller@view_insert")->name("view_insert");
	Route::post("process_insert","$controller@process_insert")->name("process_insert");  
	Route::get("view_update/{id}","$controller@view_update")->name("view_update");
	Route::post("process_update/{id}","$controller@process_update")->name("process_update");
	Route::get("delete/{id}","$controller@delete")->name("delete");
});