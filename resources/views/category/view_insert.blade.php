@extends('welcome')

@section('content')	

<form action="{{ route('category.process_insert') }}" method="post">
	{{ csrf_field() }}
	Name category:
	<input type="text" name="name">
	<br>
	Description:
	<input type="text" name="description">
	<br>
	<select name="topic_id">
		@foreach ($array_topic as $topic)
			<option value="{{ $topic->id }}">
				{{ $topic->name }}
			</option>
		@endforeach
	</select>
	<br>
	<button>Create</button>
</form>
@endsection