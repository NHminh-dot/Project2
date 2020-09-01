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
		font: inherit;
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
	}
</style>
<body>
	<div class="global">
		@include('layoutuser/header', ['some' => 'data'])
		<div class="container">
			<div style="margin: auto; max-width: 60%;">
				<div class="container-head">
					<h3>Create a post</h3>
				</div>
				<div style="background-color: red; margin: auto; width: 100%">
					<textarea id="post"></textarea>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
	CKEDITOR.replace('post');
</script>	
</body>
</html>