<form method="post" enctype="multipart/form-data" action="{{ route('post_test') }}">
	{{ csrf_field() }}
	Chọn ảnh
	<input type="file" name="file_anh" accept="image/*">
	<br>
	<button>Ok</button>
</form>