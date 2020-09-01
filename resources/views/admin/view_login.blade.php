<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/circular-std_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts/fontawesome/css/fontawesome-all.css') }}">
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
        background-image: url({{ asset('storage/photo/M73T8JZyToRbyt9RjASFRi2SasL0bXc2n3Sj8K7X.png') }});
    }
    .logo-img{
        width: 200px;
    }
    </style>
</head>

<body>
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center">
                <a href="#">
                    <img class="logo-img" src="storage/photo/logoblue.png" alt="logo">
                </a>
                <span class="splash-description" style="color:red">
                    <strong>
                        {{-- Please enter your user information. --}}
                        @if (Session::has('error'))
                            {{ Session::get('error') }}
                        @endif
                        @if (Session::has('success'))
                            {{ Session::get('success') }}
                        @endif
                    </strong>
                </span>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.process_login') }}" method="post">
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