<!doctype html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Responsive HTML5 Template">
    <meta name="author" content="author.com">
    <title>WibUwU</title>

    <!-- STYLESHEET -->
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- icon -->
    <link rel="stylesheet" href="{{asset('css/UnityStyle.css')}}">
   <link rel="stylesheet" href="{{asset('fonts/icons/main/mainfont/style.css')}}">
   <link rel="stylesheet" href="{{asset('fonts/icons/font-awesome/css/font-awesome.min.css')}}">

    <!-- Vendor -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/v3/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/v4/bootstrap-grid.css')}}">
    <!-- Custom -->
    <link rel="stylesheet" href="{{asset('css/UnityCustomStyle.css')}}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="signup">
    <!-- HEADER -->

    <!-- MAIN -->
    <main class="signup__main">
        <img class="signup__bg" src="images/signup-bg.png" alt="bg">

        <div class="container">
            <div class="signup__container">
                <div class="signup__logo">
                    <a href="{{route('reddit')}}"><img src="{{asset('storage/WibUwU.png')}}" alt="logo" style="width: 200px;"></a>
                </div>

                <div class="signup__head">
                    <h3>Login into your WibUwU account</h3>
                </div>
                <div class="signup__form">
                    <form action="{{route('process_login')}}" method="post">
                    {{ csrf_field() }}
                    <div class="signup__section">
                        <label class="signup__label" for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="signup__section">
                        <label class="signup__label" for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                   <button class="signup__btn-create btn btn--type-02">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="signup__footer">
        <div class="container">
            <div class="signup__footer-content">
                <ul class="signup__footer-menu">
                    <li><a href="#">Teams</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Send Feedback</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>

    <!-- JAVA SCRIPT -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/velocity/velocity.min.js')}}"></script>
    <script src="{{asset('js/UnityApp.js')}}"></script>

</body>
</html>