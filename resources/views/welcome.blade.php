{{-- @if (Session::has('success'))
	{{ Session::get('success') }}
@endif
<h1>
	Chào bạn {{ Session::get('username') }}
</h1>
<a href="{{ route('logout') }}">
	Đăng xuất
</a>
<div>
	<ul>
		<li>
			<a href="{{ route('view_self_info',['id' => $user->id]) }}">
				Thông tin cá nhân
			</a>
		</li>
	</ul>
</div> --}}
=======
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/circular-std_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
    <title>Assmin</title>
</head>
<body>
    <div class="dashboard-main-wrapper">
        @include('layout/navbar')
        @include('layout/sidebar')
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="ecommerce-widget">
                        @if (Session::has('success'))
                            {{ Session::get('success') }}
                        @endif
                        {{-- <h1>
                            Chào bạn {{ Session::get('username') }}
                        </h1> --}}
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>
