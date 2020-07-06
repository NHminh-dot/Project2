<form action="{{ route('user.process_insert') }}" method="post">
	{{ csrf_field() }}
	Username:
	<input type="text" name="username">
	<br>
	Login name:
	<input type="text" name="login_name">
	<br>
	Password:
	<input type="password" name="password">
	<br>
	Email:
	<input type="text" name="email">
	<br>
	Date of birth:
	<input type="date" name="date_of_birth">
	<br>
	Biography:
	<textarea name="biography"></textarea>
	<br>
	Picture:
	<input type="file" name="picture">
	<br>
	Gender:
	<input type="radio" name="gender" value="0">Female
	<input type="radio" name="gender" value="1">Male
	<input type="radio" name="gender" value="2">Other
	<br>
	Role:
	<select name="role_id">
		@foreach ($array_role as $role)
			<option value="{{ $role->id }}">
				{{ $role->name }}
			</option>
		@endforeach
	</select>
	<br>
	<button>Create</button>
</form>