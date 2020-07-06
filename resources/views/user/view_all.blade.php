<a href="{{ route('user.view_insert') }}">
	New User
</a>
@if (Session::has('success'))
	<h1>
		{{ Session::get('success') }}
	</h1>
@endif
<table border="1" width="100%">
	<tr>
		<th>ID</th>
		<th>USERNAME</th>
		<th>LOGIN NAME</th>
		<th>PASSWORD</th>
		<th>EMAIL</th>
		<th>DOB</th>
		<th>BIOGRAPHY</th>
		<th>PICTURE</th>
		<th>GENDER</th>
		<th>STATUS</th>
		<th>CREATED AT</th>
		<th>UPDATED AT</th>
		<th>LAST TIME LOGIN</th>
		<th>ROLE</th>
		<th>EDIT</th>
		<th>DELETE</th>
	</tr>
	@foreach ($array_user as $user)
		<tr style="text-align: center;">
			<td>
				{{ $user->id }}
			</td>
			<td>
				{{ $user->username }}
			</td>
			<td>
				{{ $user->login_name }}
			</td>
			<td>
				{{ $user->password }}
			</td>
			<td>
				{{ $user->email }}
			</td>
			<td>
				{{ $user->date_of_birth }}
			</td>
			<td>
				{{ $user->biography }}
			</td>
			<td>
				<img src="{{ $user->picture }}">
			</td>
			<td>
				{{ $user->gender }}
			</td>
			<td>
				{{ $user->status }}
			</td>
			<td>
				{{ $user->created_at }}
			</td>
			<td>
				{{ $user->updated_at }}
			</td>
			<td>
				{{ $user->last_time_login }}
			</td>
			<td>
				{{ $user->role->name }}
			</td>
			<td>
				<a href="{{ route('user.view_update',['id' => $user->id]) }}">
					Edit
				</a>
			</td>
			<td>
				<a href="{{ route('user.delete',['id' => $user->id]) }}">
					Delete
				</a>
			</td>
		</tr>
	@endforeach
</table>