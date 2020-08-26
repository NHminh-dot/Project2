@extends('admin.welcome')

@section('content')

<a href="{{ route('admin.comment.view_insert') }}">
	New Comment
</a>
@if (Session::has('success'))
	<h1>
		{{ Session::get('success') }}
	</h1>
@endif
<table border="1" width="100%">
	<tr>
		<th>ID</th>
		<th>CONTENT</th>
		<th>CREATED BY</th>
		<th>POST ID</th>
		<th>STATUS</th>
		<th>CREATED AT</th>
		<th>UPDATED AT</th>
		<th>DELETED AT</th>
		<th>EDIT</th>
		<th>DELETE</th>
	</tr>
	@foreach ($array_comment as $comment)
		<tr style="text-align: center;">
			<td>
				{{ $comment->id }}
			</td>
			<td>
				{{ $comment->content }}
			</td>
			<td>
				{{ $comment->user->username }}
			</td>
			<td>
				{{ $comment->post_id }}
			</td>
			<td>
				{{ $comment->status }}
			</td>
			<td>
				{{ $comment->created_at }}
			</td>
			<td>
				{{ $comment->updated_at }}
			</td>
			<td>
				{{ $comment->deleted_at }}
			</td>
			<td>
				<a href="{{ route('admin.comment.view_update',['id' => $comment->id]) }}">
					Edit
				</a>
			</td>
			<td>
				<a href="{{ route('admin.comment.delete',['id' => $comment->id]) }}">
					Delete
				</a>
			</td>
		</tr>
	@endforeach
</table>
{{ $array_comment->links() }}
@endsection