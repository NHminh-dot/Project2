@extends('welcome')

@section('content')

<form action="{{ route('user.process_insert') }}" method="post" enctype="multipart/form-data">
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
	<input type="file" name="picture" accept="image/*">
	<br>
	Gender:
	<label class="custom-control custom-radio custom-control-inline">
		<input type="radio" name="gender" value="0" class="custom-control-input">
			<span class="custom-control-label">Female</span>
	</label>
	<label class="custom-control custom-radio custom-control-inline">
		<input type="radio" name="gender" value="1" class="custom-control-input">
			<span class="custom-control-label">Male</span>
	</label>
	<label class="custom-control custom-radio custom-control-inline">
		<input type="radio" name="gender" value="2" class="custom-control-input">
			<span class="custom-control-label">Other</span>
	</label>
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
@endsection