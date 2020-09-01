@extends('admin.welcome')

@section('content')
<form action="{{ route('admin.post_tag.process_insert') }}" method="post">
	{{ csrf_field() }}
	Tag:
	<select name="tag_id">
		@foreach ($array_tag as $tag)
			<option value="{{ $tag->id }}">
				{{ $tag->name }}
			</option>
		@endforeach
	</select>
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
@endsection