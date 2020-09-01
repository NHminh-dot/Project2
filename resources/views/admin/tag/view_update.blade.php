@extends('admin.welcome')

@section('content')
<form action="{{ route('admin.tag.process_update',['id' => $tag->id]) }}" method="post">
	{{ csrf_field() }}
	Id tag:
	<input type="text" readonly="readonly" name="id" value="{{ $tag->id }}">
	<br>
	Name tag:
	<input type="text" name="name" value="{{ $tag->name }}">
{{-- 	<br>
	Created at:
	<input type="text" readonly="readonly" name="created_at" value="{{ $tag->created_at }}">
	<br>
	Updated at:
	<input type="text" readonly="readonly" name="updated_at" value="{{ $tag->updated_at }}"> --}}
	<br>
	<button>Update</button>
</form>
@endsection