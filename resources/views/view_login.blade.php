<form action="{{ route('process_login') }}" method="post">
	Login name:
	<input type="text" name="login_name">
	<br>
	Password:
	<input type="password" name="password">
	<br>
	<button>Login</button>
</form>