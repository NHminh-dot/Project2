<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/concept-master_assets_vendor_bootstrap_css_bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/concept-master_assets_libs_css_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/concept-master_assets_vendor_fonts_circular-std_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/concept-master_assets_vendor_fonts_fontawesome_css_fontawesome-all.css')}}">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
@if (Session::has('error'))
	{{ Session::get('error') }}
@endif
@if (Session::has('success'))
	{{ Session::get('success') }}
@endif

    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="images/logo.png" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form action="{{ route('process_login') }}" method="post">
                	{{ csrf_field() }}
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="login_name" id="username" type="text" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{asset('js/concept-master_assets_vendor_bootstrap_js_bootstrap.bundle.js')}}"></script>
    <script src="{{asset('js/concept-master_assets_vendor_jquery_jquery-3.3.1.min.js')}}"></script>
</body>
 
</html>