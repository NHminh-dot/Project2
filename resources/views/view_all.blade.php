<a href="{{ route('lop.view_insert') }}">
	Thêm
</a>
<table border="1" width="100%">
	<tr>
		<th>Ma</th>
		<th>Ten</th>
	</tr>
	@foreach ($array_lop as $lop)
		<tr>
			<td>
				{{ $lop->ma_lop }}
			</td>
			<td>
				{{ $lop->ten_lop }}
			</td>
		</tr>
	@endforeach
</table>