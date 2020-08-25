@extends('welcome')

@section('content')
<form action="{{ route('post.process_insert') }}" method="post">
	{{ csrf_field() }}
	Title:
	<input type="text" name="title">
	<br>
	Content:
	{{-- <input type="text" name="content"> --}}
	<textarea name="content"></textarea>
	<br>
	Category:
	<select name="category_id">
		@foreach ($array_category as $category)
			<option value="{{ $category->id }}">
				{{ $category->name }}
			</option>
		@endforeach
	</select>
	<br>
	<button>Create</button>
</form>
@endsection