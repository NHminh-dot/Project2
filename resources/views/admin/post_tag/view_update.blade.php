@extends('admin.welcome')

@section('content')
<form action="{{ route('admin.post_tag.process_update',['id' => $post_tag->id]) }}" method="post">
	{{ csrf_field() }}
	Id post_tag:
	<input type="text" readonly="readonly" name="id" value="{{ $post_tag->id }}">
	<br>
	Name post_tag:
	<input type="text" name="name" value="{{ $post_tag->name }}">
{{-- 	<br>
	Created at:
	<input type="text" readonly="readonly" name="created_at" value="{{ $post_tag->created_at }}">
	<br>
	Updated at:
	<input type="text" readonly="readonly" name="updated_at" value="{{ $post_tag->updated_at }}"> --}}
	<br>
	<button>Update</button>
</form>
@endsection