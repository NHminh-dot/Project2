@extends('admin.welcome')

@section('content')
<form action="{{ route('admin.topic.process_insert') }}" method="post">
	{{ csrf_field() }}
	Name topic:
	<input type="text" name="name">
	<br>	
	Description:
	<input type="text" name="description">
	<br>
	<button>Create</button>
</form>
@endsection