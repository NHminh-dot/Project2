@extends('welcome')

@section('content')	

<a href="{{ route('category.view_insert') }}">
	New Category
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
		<th>TOPIC</th>
		<th>EDIT</th>
		<th>DELETE</th>
	</tr>
	@foreach ($array_category as $category)
		<tr style="text-align: center;">
			<td>
				{{ $category->id }}
			</td>
			<td>
				{{ $category->name }}
			</td>
			<td>
				{{ $category->description }}
			</td>
			<td>
				{{ $category->created_at }}
			</td>
			{{-- <td>
				{{ $category->updated_at }}
			</td> --}}
			<td>
				{{ $category->user->username }}
			</td>
			<td>
				{{ $category->topic->name }}
			</td>
			<td>
				<a href="{{ route('category.view_update',['id' => $category->id]) }}">
					Edit
				</a>
			</td>
			<td>
				<a href="{{ route('category.delete',['id' => $category->id]) }}">
					Delete
				</a>
			</td>
		</tr>
	@endforeach
</table>
{{ $array_category->links() }}
@endsection