<!DOCTYPE html>
<html>
<head>
	<title>Submit</title>
</head>
<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		border: 0;
		font-size: 100%;
<<<<<<< HEAD
		font: inherit;
=======
		font: sans-serif;
>>>>>>> 87da27f39f848c389e6b3d2a1697f2576f9cf4b3
		vertical-align: baseline;
		background-color: #DAE0E6;
	}
	.global{
		width: 100%;
		height: auto;
		/*background-color: green;*/
	}
	.header{
		width: 100%;
		height: 50px;
		background: #000;
	}
	.nav-bar-logo{
		float: left;
	}
	.nav-bar-search{
		margin-left: 100px;
		float: left;
	}
	.nav-bar-search #search{
		width: 500px;
		height: 45px;
		border-radius: 10px;
	}
	.nav-bar-login-signUp-logout{
		margin-left: 300px;
		float: left;
		display: flex;
		flex-direction: row;
		/*height: 50px;*/
	}
	.nav-bar-login-signUp-logout #button{
		margin-top: 5px;
		margin-right: 15px;
		padding: 10px 35px;
		text-transform: uppercase;
		border: 2px solid #3030FE;
		border-radius: 6px;
		font-weight: 700;
		text-decoration: none;
		font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
	}
	.login{
		background-color: #fff;
		color: #3030FE;
	}
	.login:hover{
		background-color: #fff;
		color: #1501D8;
	}
	.sign_up{
		background-color: #3030FE;
		color: #fff;
	}
	.sign_up:hover{
		background-color: #C8C8C8;
	}
	.sign_up:active{
		background-color: #18318A;
	}
	.container{
		/*background-color: #DAE0E6;*/
	}
	.container-head{
		color:#5C5858;
		font-family: sans-serif;
<<<<<<< HEAD
=======
		border-bottom: 1px solid #fff;
		margin-bottom: 20px;
	}
	#select-category{
		height: 40px;
		width: 30%;
		font-weight: bold;
	}
	#title{
		width: 100%;
		height: 40px;
	}
	.button{
		font-size: 100%;
		font: inherit;
		font-weight: bold;
		padding: 5px 10px;
		text-transform: uppercase;
		border-radius: 5px;
	}
	#button-post{
		background-color: #3030FE;
		color: white;
		border: none;
	}
	#button-cancel{
		color: #3030FE;
		background-color: white;
		border: 1px solid #3030FE;
>>>>>>> 87da27f39f848c389e6b3d2a1697f2576f9cf4b3
	}
</style>
<body>
	<div class="global">
		@include('layoutuser/header', ['some' => 'data'])
		<div class="container">
			<div style="margin: auto; max-width: 60%;">
<<<<<<< HEAD
				<div class="container-head">
					<h3>Create a post</h3>
				</div>
				<div style="background-color: red; margin: auto; width: 100%">
					<textarea id="post"></textarea>
				</div>
=======
				<form action="{{ route('store') }}" method="post">
					{{ csrf_field() }}
					<div class="container-head">
						<h3>Create a post</h3>
					</div>
					<div>
						{{-- <select id="select-topic" name="post_id">
							<option id="">Choose a post</option>
							@foreach ($array_post as $post)
								<option id="post" value="{{ $post->id }}">
									{{ $post->name }}
								</option>
							@endforeach
						</select> --}}
						<select id="select-category" name="category_id">
							<option id="">Choose a category</option>
							@foreach ($array_category as $category)
								<option id="category" value="{{ $category->id }}">
									{{ $category->name }}
								</option>
							@endforeach
						</select>
							@if ($errors->first('category_id'))
								<span>
									{{ $errors->first('category_id') }}
								</span>
							@endif
					</div>
					<div style="width: 100%">
						<input type="text" name="title" id="title" placeholder="Title" maxlength="300">
							@if ($errors->first('title'))
								<span>
									{{ $errors->first('title') }}
								</span>
							@endif
					</div>
					<div style="background-color: red; margin: auto; width: 100%">
						<textarea id="post" name="content" value="{{ old("content") }}">
							@if ($errors->first('content'))
							<span>
								{{ $errors->first('content') }}
							</span>
							@endif
						</textarea>
					</div>
					<input type="reset" class="button" id="button-cancel" name="cancel" value="cancel">
					<input type="submit" class="button" id="button-post" name="submit" value="post">
				</form>
>>>>>>> 87da27f39f848c389e6b3d2a1697f2576f9cf4b3
			</div>
		</div>
	</div>
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
	CKEDITOR.replace('post');
<<<<<<< HEAD
</script>	
=======
</script>
{{-- <script type="text/javascript">
	document.getElementById("category").innerHTML = "the full url" + window.location.href;
</script> --}}
{{-- <script type="text/javascript">
	function createUrl() {
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		}
		else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		var url = "submit.blade.php";
		var vars = "var1="+var1+"&var2="+var2+"&var3="+var3;
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				$("#status").text(xmlhttp.responseText);
			}
		};
		xmlhttp.open("POST", url, true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.send(vars);
		$("#status").text("processing...");
	}
</script> --}}
{{-- <script type="text/javascript">
	var base_url = 'http://localhost/google/public/'
 		$.ajax({
                type: "GET",
                url : base_url+"/ajaxcategory"+"/submit",
                data : dataString,
                success : function(data){
                    console.log(data);
                }
</script> --}}
>>>>>>> 87da27f39f848c389e6b3d2a1697f2576f9cf4b3
</body>
</html>