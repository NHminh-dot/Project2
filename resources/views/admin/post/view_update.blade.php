@extends('admin.welcome')

@section('content')
<form action="{{ route('admin.post.process_update',['id' => $post->id]) }}" method="post">
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
	<br>
	Status:
	{{-- <input type="text" readonly="readonly" name="status" value="{{ $post->status }}"> --}}
	<label class="custom-control custom-radio custom-control-inline">
		<input type="radio" name="status" value="1" class="custom-control-input"
		@if ($post->status==1)
				checked 
		@endif>
		<span class="custom-control-label">
			Enable
		</span>
	</label>
	<label class="custom-control custom-radio custom-control-inline">
		<input type="radio" name="status" value="0" class="custom-control-input"
		@if ($post->status==0)
				checked 
		@endif>
		<span class="custom-control-label">
			Disable
		</span>
	</label>

	{{-- <label class="custom-control custom-checkbox">
        <input type="checkbox" value="{{ old('$post->status') }}" name="status" class="custom-control-input"
        @if(old('$post->status', false)) checked @endif>
		<span class="custom-control-label">Enable</span>
    </label> --}}	
	<br>
{{-- 	Up vote:
	<input type="text" readonly="readonly" name="upvote" value="{{ $post->upvote }}">
	Down vote:
	<input type="text" readonly="readonly" name="downvote" value="{{ $post->downvote }}"> --}}
	Deleted at:
	<input type="text" readonly="readonly" name="deleted_at" value="{{ $post->deleted_at }}">
	<br>
	<button>Update</button>
</form>
@endsection