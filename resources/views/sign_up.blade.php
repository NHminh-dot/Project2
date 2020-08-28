<style>
	.global{
		width: 100%;
		height: auto;
		background-color: lightgray;
	}
	.container{
		width: 50%;
		margin: auto;
	}
</style>
<link rel="stylesheet" href="{{asset('css/users/sign-up.css')}}">
<html>
	@include('layoutuser/header')
	<body>
		<div class="global">
			<div class="container">
				<form method="post" action="{{route('sign_up_process')}}">
					{{ csrf_field() }}
					<div class="input-container">
						<label for="username">Username</label>
						<input type="text" name="username" class="form-input">
					</div>
					<div class="input-container">
						<label for="login_name">Login Name</label>
						<input type="text" name="login_name" class="form-input">
					</div>
					<div class="input-container">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-input">
					</div>
					<div class="input-container">
						<label for="password2">Confirm Password</label>
						<input type="password" name="password2" class="form-input">
					</div>
					<div class="input-container">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-input">
					</div>
					<div class="input-container">
						<label for="dob">Date of Birth</label>
						<input type="date" name="date_of_birth" class="form-input">
					</div>
					<div class="input-container">
						<label for="gender">Gender</label>
						<br>
						
						<input type="radio" name="gender" value="0">
						<span>Female</span>
						
						<input type="radio" name="gender" value="1">
						<span>Male</span>
					</div>
					<div class="button-container">
						<button type="submit">Sign Up</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>