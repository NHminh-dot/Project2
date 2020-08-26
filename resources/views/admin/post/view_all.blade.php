@extends('admin.welcome')

@section('content')

<a href="{{ route('admin.post.view_insert') }}">
	New Post
</a>
@if (Session::has('success'))
	<h1>
		{{ Session::get('success') }}
	</h1>
@endif
<table border="1" width="100%">
	<tr>
		<th>ID</th>
		<th>TITLE</th>
		<th>CONTENT</th>
		<th>CREATED BY</th>
		<th>CATEGORY</th>
		<th>STATUS</th>
		{{-- <th>UPVOTE</th>
		<th>DOWNVOTE</th> --}}
		<th>CREATED AT</th>
		<th>UPDATED AT</th>
		<th>DELETED AT</th>
		<th>EDIT</th>
		<th>DELETE</th>
	</tr>
	@foreach ($array_post as $post)
		<tr style="text-align: center;">
			<td>
				{{ $post->id }}
			</td>
			<td>
				{{ $post->title }}
			</td>
			<td>
				{{ $post->content }}
			</td>
			<td>
				{{ $post->user->username }}
			</td>
			<td>
				{{ $post->category->name }}
			</td>
			<td>
				{{ $post->status }}
			</td>
{{-- 			<td>
				{{ $post->up_vote }}
			</td>
			<td>
				{{ $post->down_vote }}
			</td> --}}
			<td>
				{{ $post->created_at }}
			</td>
			<td>
				{{ $post->updated_at }}
			</td>
			<td>
				{{ $post->deleted_at }}
			</td>
			<td>
				<a href="{{ route('admin.post.view_update',['id' => $post->id]) }}">
					Edit
				</a>
			</td>
			<td>
				<a href="{{ route('admin.post.delete',['id' => $post->id]) }}">
					Delete
				</a>
			</td>
		</tr>
	@endforeach
</table>
{{ $array_post->links() }}
@endsection