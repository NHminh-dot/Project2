@if (Session::has('success'))
	{{ Session::get('success') }}
@endif
<h1>
	Chào bạn {{ Session::get('username') }}
</h1>
<a href="{{ route('logout') }}">
	Đăng xuất
</a>
{{-- <div>
	<ul>
		<li>
			<a href="{{ route('view_self_info',['id' => $user->id]) }}">
				Thông tin cá nhân
			</a>
		</li>
	</ul>
</div> --}}