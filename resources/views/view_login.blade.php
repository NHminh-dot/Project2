@if (Session::has('error'))
	{{ Session::get('error') }}
@endif
@if (Session::has('success'))
	{{ Session::get('success') }}
@endif
<form action="{{ route('process_login') }}" method="post">
	{{ csrf_field() }}
	Login name:
	<input type="text" name="login_name">
	<br>
	Password:
	<input type="password" name="password">
	<br>
	<button>Login</button>
</form>