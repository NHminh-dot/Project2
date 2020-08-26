@extends('admin.welcome')

@section('content')
<form action="{{ route('admin.comment.process_update',['id' => $comment->id]) }}" method="post">
	{{ csrf_field() }}
	Id comment:
	<input type="text" readonly="readonly" name="id" value="{{ $comment->id }}">
	<br>
	Content:
	<input type="text" name="content" value="{{ $comment->content }}">
	<br>
	Created at:
	<input type="text" readonly="readonly" name="created_at" value="{{ $comment->created_at }}">
	<br>
	Created by:
	<input type="text" readonly="readonly" name="created_by" value="{{ $comment->user->username }}">
	<br>
	Post:
	<select name="post_id">
		@foreach ($array_post as $post)
			<option value="{{ $post->id }}"
				@if ($post->id == $comment->post_id)
					selected
				@endif>
				{{ $post->title }}
			</option>
		@endforeach
	</select>
	<br>
	Status:
	<input type="text" readonly="readonly" name="status" value="{{ $comment->status }}">
	<br>
	Deleted at:
	<input type="text" readonly="readonly" name="deleted_at" value="{{ $comment->deleted_at }}">
	<br>
	<button>Update</button>
</form>
@endsection