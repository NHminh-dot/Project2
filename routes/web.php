<?php 

// Route::get('index','Controller@index');
// Route::get('view_all_test', 'Controller@view_all_test')->name('view_all_test');
// Route::get('test','Controller@test');
// Route::get('show','Controller@show');
// Route::post('post_test','Controller@post_test')->name('post_test');

/*Route user side*/
Route::get('','Controller@reddit')->name('reddit');
Route::get('comments/{id}','Controller@comments')->name('comments');
Route::get('login','UserLoginController@login')->name('login');
Route::post('process_login','UserLoginController@process_login')->name('process_login');
Route::get('sign_up','Controller@sign_up')->name('sign_up');
Route::get('topic','Controller@topic')->name('topic');
Route::get('category/{id}','Controller@category')->name('category');
Route::post('sign_up_process','SignUpController@sign_up_process')->name('sign_up_process');
Route::get('user_category/{category}','TopicController@view_category')->name('user_category');
/*Route user after login*/
Route::group(["middleware" => "CheckUser"], function() {
	Route::get('write_post','Controller@write_post')->name('write_post');
    Route::get("logout","UserLoginController@logout")->name("logout");
    Route::get("submit","PostController@submit")->name("submit");
    Route::post("comment_process_insert/{id}","CommentController@comment_process_insert")->name("comment_process_insert");
    Route::post("follow","Controller@follow")->name("follow");
});


/*Route admin side*/
Route::group(["prefix" => "admin","as" => "admin."], function() {
	Route::get("","LoginController@view_login")->name("view_login");
	Route::post("process_login","LoginController@process_login")->name("process_login");
	/*Route admin after login*/
	Route::group(["middleware" => "CheckUserIsAdmin"], function() {
	    Route::get("welcome","Controller@welcome")->name("welcome");
	    Route::get("logout","LoginController@logout")->name("logout");
	    
	    Route::get("view_self_info/{id}","Controller@view_self_info")->name("view_self_info");
		$controller = "UserController";
		Route::group(["prefix" => "user","as" => "user."], function() use($controller)
		{
			Route::get("","$controller@view_all")->name("view_all");
			Route::get("view_insert","$controller@view_insert")->name("view_insert");
			Route::post("process_insert","$controller@process_insert")->name("process_insert");  
			Route::get("view_update/{id}","$controller@view_update")->name("view_update");
			Route::post("process_update/{id}","$controller@process_update")->name("process_update");
			Route::get("delete/{id}","$controller@delete")->name("delete");

			// Route::get("view_self_info/{id}","$controller@view_self_info")->name("view_self_info");
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

		$controller = "PostController";
		Route::group(["prefix" => "post","as" => "post."], function() use($controller)
		{
			Route::get("","$controller@view_all")->name("view_all");
			Route::get("view_insert","$controller@view_insert")->name("view_insert");
			Route::post("process_insert","$controller@process_insert")->name("process_insert");  
			Route::get("view_update/{id}","$controller@view_update")->name("view_update");
			Route::post("process_update/{id}","$controller@process_update")->name("process_update");
			Route::get("delete/{id}","$controller@delete")->name("delete");
		});
		$controller = "CommentController";
		Route::group(["prefix" => "comment","as" => "comment."], function() use($controller)
		{
			Route::get("","$controller@view_all")->name("view_all");
			Route::get("view_insert","$controller@view_insert")->name("view_insert");
			Route::post("process_insert","$controller@process_insert")->name("process_insert");  
			Route::get("view_update/{id}","$controller@view_update")->name("view_update");
			Route::post("process_update/{id}","$controller@process_update")->name("process_update");
			Route::get("delete/{id}","$controller@delete")->name("delete");
		});
	});
});