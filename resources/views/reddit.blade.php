<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>reddit</title>
</head>
<style type="text/css">
	body{
		margin: 0;
		padding: 0;
	}
	.global{
		width: 100%;
		height: auto;
		background-color: green;
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
		margin-left: 100px;
		float: left;
	}
	.nav-bar-login-signUp-logout #button{
		height: 50px;
	}
</style>
<body>
	<div class="global">
		<div class="header">
			<div class="nav-bar">
				<div class="nav-bar-logo">
					<img src="{{ asset('storage/photo/logo.png') }}" width="100px">
				</div>
				<div class="nav-bar-search">
					<input id="search" type="search" name="search" placeholder="Search...">
				</div>
				<div class="nav-bar-login-signUp-logout">
					@if (!Session::has('user'))
						<input id="button" type="button" name="login" value="login">
						<input id="button" type="button" name="sign_up" value="sign up">
					@elseif (Session::has('user'))
						<input id="button" type="button" name="logout" value="logout">
					@endif		
				</div>
				<div class="view-option">
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>