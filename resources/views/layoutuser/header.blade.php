<link rel="stylesheet" type="text/css" href="">
<div class="header">
	<div class="nav-bar">
		<div class="nav-bar-logo">
			<img src="{{ asset('storage/photo/logo.png') }}" width="100px">
		</div>
		<div class="nav-bar-search">
			<input id="search" type="search" name="search" placeholder="Search...">
		</div>
		<div class="nav-bar-login-signUp-logout">
			@if (Session::has('user_id'))
				{{-- <input id="button" type="button" name="logout" value="logout"> --}}
				<a href="{{ route('logout') }}" id="button" style="background-color: #fff">log out</a>
				<div class="view-option">
				<p style="color: #fff">
					{{ Session::get('username') }}
				</p>	
				</div>
			@else
				{{-- <input id="button" class="login" type="button" name="login" value="log in"> --}}
				<a href="{{ route('login') }}" id="button" class="login" name="login">log in</a>
				{{-- <input id="button" class="sign_up" type="button" name="sign_up" value="sign up"> --}}
				<a href="#" id="button" class="sign_up" name="sign_up" >sign up</a>				
			@endif
		</div>
	</div>
</div>