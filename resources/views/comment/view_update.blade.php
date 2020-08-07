<form action="{{ route('comment.process_update',['id' => $comment->id]) }}" method="comment">
	{{ csrf_field() }}
	Id comment:
	<input type="text" readonly="readonly" name="id" value="{{ $comment->id }}">
	<br>
	Title comment:
	<input type="text" name="title" value="{{ $comment->title }}">
	<br>
	Content:
	<input type="text" name="content" value="{{ $comment->content }}">
	<br>
	Created at:
	<input type="text" readonly="readonly" name="created_at" value="{{ $comment->created_at }}">
	<br>
	Created by:
	<input type="text" readonly="readonly" name="created_by" value="{{ $comment->created_by }}">
	<br>
	Category:
	<select name="category_id">
		@foreach ($array_category as $category)
			<option value="{{ $category->id }}"
				@if ($category->id == $comment->category_id)
					selected
				@endif>
				{{ $category->name }}
			</option>
		@endforeach
	</select>
	Status:
	<input type="text" readonly="readonly" name="status" value="{{ $comment->status }}">
	<br>
	Up vote:
	<input type="text" readonly="readonly" name="upvote" value="{{ $comment->upvote }}">
	Down vote:
	<input type="text" readonly="readonly" name="downvote" value="{{ $comment->downvote }}">
	Deleted at:
	<input type="text" readonly="readonly" name="deleted_at" value="{{ $comment->deleted_at }}">
	<button>Update</button>
</form>