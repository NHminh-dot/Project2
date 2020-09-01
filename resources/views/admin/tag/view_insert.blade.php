@extends('admin.welcome')

@section('content')
<form action="{{ route('admin.tag.process_insert') }}" method="post">
	{{ csrf_field() }}
	Name tag:
	<input type="text" name="name">
	<br>
	<button>Create</button>
</form>
@endsection