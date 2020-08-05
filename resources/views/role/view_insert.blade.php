@extends('welcome')

@section('content')
<form action="{{ route('role.process_insert') }}" method="post">
	{{ csrf_field() }}
	Name role:
	<input type="text" name="name">
	<br>
	<button>Create</button>
</form>
@endsection