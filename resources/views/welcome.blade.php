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
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/circular-std_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('css/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flag-icon.min.css') }}">
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
     <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('js/main-js.js') }}"></script>
    <!-- chart chartist js -->
    {{-- <script src="{{ asset('js/chartist.min.js') }}"></script> --}}
    <!-- sparkline js -->
    {{-- <script src="{{ asset('js/jquery.sparkline.js') }}"></script> --}}
    <!-- morris js -->
    {{-- <script src="{{ asset('js/raphael.min.js') }}"></script>
    <script src="{{ asset('js/morris.js') }}"></script> --}}
    <!-- chart c3 js -->
    {{-- <script src="{{ asset('js/c3.min.js') }}"></script>
    <script src="{{ asset('js/d3-5.4.0.min.js') }}"></script>
    <script src="{{ asset('js/C3chartjs.js') }}"></script>
    <script src="{{ asset('js/dashboard-ecommerce.js') }}"></script> --}}
</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>
