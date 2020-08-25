@extends('welcome')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1" width="100%">
	<tr style="text-align: center;">
		{{-- <th>ID</th> --}}
		<th>USERNAME</th>
		{{-- <th>LOGIN NAME</th> --}}
		{{-- <th>PASSWORD</th> --}}
		<th style="width: 100px;">EMAIL</th>
		<th>DOB</th>
		<th>BIOGRAPHY</th>
		<th>PICTURE</th>
		<th>GENDER</th>
		{{-- <th>STATUS</th> --}}
		{{-- <th>CREATED AT</th> --}}
		{{-- <th>UPDATED AT</th> --}}
		{{-- <th>LAST TIME LOGIN</th> --}}
		<th>ROLE</th>
		{{-- <th>EDIT</th> --}}
		{{-- <th>DELETE</th> --}}
	</tr>
	@foreach ($array_user as $user)
		<tr style="text-align: center;">
			{{-- <td>
				{{ $user->id }}
			</td> --}}
			<td>
				{{ $user->username }}
			</td>
			{{-- <td>
				{{ $user->login_name }}
			</td> --}}
			{{-- <td>
				{{ $user->password }}
			</td> --}}
			<td>
				{{ $user->email }}
			</td>
			<td>
				{{ $user->date_of_birth }}
			</td>
			<td>
				<div style="overflow: scroll; height: 200px;">
					{{ $user->biography }}
				</div>
			</td>
			<td>
				{{-- <img src="{{ $user->picture }}"> --}}
				<img style="max-width: 200px;" src="{{ asset("storage/$user->picture") }}">
			</td>
			<td>
				{{-- {{ $user->gender }} --}}
				@if ($user->gender==0)
					Nữ
				@endif	
				@if ($user->gender==1)
					Nam
				@endif	
				@if ($user->gender==2)
					Khác
				@endif
			</td>
			{{-- <td>
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
			</td> --}}
			<td>
				{{ $user->role->name }}
			</td>
			{{-- <td>
				<a href="{{ route('user.view_update',['id' => $user->id]) }}">
					Edit
				</a>
			</td>
			<td>
				<a href="{{ route('user.delete',['id' => $user->id]) }}">
					Delete
				</a>
			</td> --}}
		</tr>
	@endforeach
</table>
</body>
</html>
@endsection