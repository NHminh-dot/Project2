<form action="{{ route('comment.process_insert') }}" method="post">
	{{ csrf_field() }}
	Content:
	<input type="text" name="content">
	<br>
	Post:
	<select name="post_id">
		@foreach ($array_post as $post)
			<option value="{{ $post->id }}">
				{{ $post->title }}
			</option>
		@endforeach
	</select>
	<br>
	<button>Create</button>
</form>