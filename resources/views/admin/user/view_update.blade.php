@extends('admin.welcome')

@section('content')

<form action="{{ route('admin.user.process_update',['id' => $user->id]) }}" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	Id:
	<input type="text" readonly="readonly" name="id" value="{{ $user->id }}">
	<br>
	Username:
	<input type="text" name="username" value="{{ $user->username }}">
	<br>
	Login name:
	<input type="text" name="login_name" value="{{ $user->login_name }}">
	<br>
	Password:
	<input type="password" name="password" value="{{ $user->password }}">
	<br>
	Email:
	<input type="text" name="email" value="{{ $user->email }}">
	<br>
	Date of birth:
	<input type="date" name="date_of_birth" value="{{ $user->date_of_birth }}">
	<br>
	Biography:
	<textarea name="biography">{{ $user->biography }}</textarea>
	<br>
	New Picture:
	<input type="file" name="new_picture" accept="images/*">
	Or keep old picture:
	<img src="{{-- images/ --}}{{ $user->picture }}">
	<br>
	Gender:
	<label class="custom-control custom-radio custom-control-inline">
		<input type="radio" name="gender" value="0" class="custom-control-input"
		@if ($user->gender==0)
				checked 
		@endif>
		<span class="custom-control-label">
			Female
		</span>
	</label>
	<label class="custom-control custom-radio custom-control-inline">
		<input type="radio" name="gender" value="1" class="custom-control-input"
		@if ($user->gender==1)
				checked 
		@endif>
		<span class="custom-control-label">
			Male
		</span>
	</label>	
	<label class="custom-control custom-radio custom-control-inline">
		<input type="radio" name="gender" value="2" class="custom-control-input"
		@if ($user->gender==2)
				checked 
		@endif>
		<span class="custom-control-label">
			Other
		</span>
	</label>	
	<br>
	Role:
	<select name="role_id">
		@foreach ($array_role as $role)
			<option value="{{ $role->id }}"
				@if ($role->id == $user->role_id)
					selected 
				@endif>
				{{ $role->name }}
			</option>
		@endforeach
	</select>
	<br>
	<button>Update</button>
</form>
@endsection