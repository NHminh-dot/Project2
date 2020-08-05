@extends('welcome')

@section('content')
<form action="{{ route('post.process_update',['id' => $post->id]) }}" method="post">
	{{ csrf_field() }}
	Id post:
	<input type="text" readonly="readonly" name="id" value="{{ $post->id }}">
	<br>
	Title post:
	<input type="text" name="title" value="{{ $post->title }}">
	<br>
	Content:
	<input type="text" name="content" value="{{ $post->content }}">
	<br>
	Created at:
	<input type="text" readonly="readonly" name="created_at" value="{{ $post->created_at }}">
	<br>
	Created by:
	<input type="text" readonly="readonly" name="created_by" value="{{ $post->created_by }}">
	<br>
	Category:
	<select name="category_id">
		@foreach ($array_category as $category)
			<option value="{{ $category->id }}"
				@if ($category->id == $post->category_id)
					selected 
				@endif>
				{{ $category->name }}
			</option>
		@endforeach
	</select>
	Status:
	<input type="text" readonly="readonly" name="status" value="{{ $post->status }}">
	<br>
	Up vote:
	<input type="text" readonly="readonly" name="upvote" value="{{ $post->upvote }}">
	Down vote:
	<input type="text" readonly="readonly" name="downvote" value="{{ $post->downvote }}">
	Deleted at:
	<input type="text" readonly="readonly" name="deleted_at" value="{{ $post->deleted_at }}">
	<button>Update</button>
</form>
@endsection