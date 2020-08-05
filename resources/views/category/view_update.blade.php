@extends('welcome')

@section('content')	

<form action="{{ route('category.process_update',['id' => $category->id]) }}" method="post">
	{{ csrf_field() }}
	Id category:
	<input type="text" readonly="readonly" name="id" value="{{ $category->id }}">
	<br>
	Name category:
	<input type="text" name="name" value="{{ $category->name }}">
	<br>
	Description:
	<input type="text" name="description" value="{{ $category->description }}">
	<br>
	Created at:
	<input type="text" readonly="readonly" name="created_at" value="{{ $category->created_at }}">
	<br>
	Created by:
	<input type="text" readonly="readonly" name="created_by" value="{{ $category->created_by }}">
	<br>
	Topic:
	<select name="topic_id">
		@foreach ($array_topic as $topic)
			<option value="{{ $topic->id }}"
				@if ($topic->id == $category->topic_id)
					selected 
				@endif>
				{{ $topic->name }}
			</option>
		@endforeach
	</select>
	<br>
	<button>Update</button>
</form>
@endsection