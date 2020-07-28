@extends('welcome')

@section('content')
	
<a href="{{ route('topic.view_insert') }}">
	New Topic
</a>
@if (Session::has('success'))
	<h1>
		{{ Session::get('success') }}
	</h1>
@endif
<table border="1" width="100%">
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>DESCRIPTION</th>
		<th>CREATED AT</th>
		{{-- <th>UPDATED AT</th> --}}
		<th>CREATED BY</th>
		<th>EDIT</th>
		<th>DELETE</th>
	</tr>
	@foreach ($array_topic as $topic)
		<tr style="text-align: center;">
			<td>
				{{ $topic->id }}
			</td>
			<td>
				{{ $topic->name }}
			</td>
			<td>
				{{ $topic->description }}
			</td>
			<td>
				{{ $topic->created_at }}
			</td>
			{{-- <td>
				{{ $topic->updated_at }}
			</td> --}}
			<td>
				{{ $topic->user->username }}
			</td>
			<td>
				<a href="{{ route('topic.view_update',['id' => $topic->id]) }}">
					Edit
				</a>
			</td>
			<td>
				<a href="{{ route('topic.delete',['id' => $topic->id]) }}">
					Delete
				</a>
			</td>
		</tr>
	@endforeach
</table>
{{ $array_topic->links() }}
@endsection