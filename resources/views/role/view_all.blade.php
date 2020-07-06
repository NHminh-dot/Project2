<a href="{{ route('role.view_insert') }}">
	New Role
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
		<th>CREATED_AT</th>
		<th>UPDATED_AT</th>
		<th>EDIT</th>
		<th>DELETE</th>
	</tr>
	@foreach ($array_role as $role)
		<tr style="text-align: center;">
			<td>
				{{ $role->id }}
			</td>
			<td>
				{{ $role->name }}
			</td>
			<td>
				{{ $role->created_at }}
			</td>
			<td>
				{{ $role->updated_at }}
			</td>
			<td>
				<a href="{{ route('role.view_update',['id' => $role->id]) }}">
					Edit
				</a>
			</td>
			<td>
				<a href="{{ route('role.delete',['id' => $role->id]) }}">
					Delete
				</a>
			</td>
		</tr>
	@endforeach
</table>