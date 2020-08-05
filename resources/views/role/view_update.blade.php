@extends('welcome')

@section('content')
<form action="{{ route('role.process_update',['id' => $role->id]) }}" method="post">
	{{ csrf_field() }}
	Id role:
	<input type="text" readonly="readonly" name="id" value="{{ $role->id }}">
	<br>
	Name role:
	<input type="text" name="name" value="{{ $role->name }}">
	<br>
	Created at:
	<input type="text" readonly="readonly" name="created_at" value="{{ $role->created_at }}">
	<br>
	Updated at:
	<input type="text" readonly="readonly" name="updated_at" value="{{ $role->updated_at }}">
	<br>
	<button>Update</button>
</form>
@endsection