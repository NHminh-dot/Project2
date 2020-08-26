@extends('admin.welcome')

@section('content')
<form action="{{ route('admin.topic.process_update',['id' => $topic->id]) }}" method="post">
	{{ csrf_field() }}
	Id topic:
	<input type="text" readonly="readonly" name="id" value="{{ $topic->id }}">
	<br>
	Name topic:
	<input type="text" name="name" value="{{ $topic->name }}">
	<br>
	Description:
	<input type="text" name="description" value="{{ $topic->description }}">
	<br>
	Created at:
	<input type="text" readonly="readonly" name="created_at" value="{{ $topic->created_at }}">
	<br>
	Created by:
	<input type="text" readonly="readonly" name="created_by" value="{{ $topic->user->username }}">
	<br>
	<button>Update</button>
</form>
@endsection