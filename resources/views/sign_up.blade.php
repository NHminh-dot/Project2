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
    <header class="signup__header">
        <div class="container">
            <div class="signup__header-content">
                <p><a href="#">Already have an account?</a></p>
                <a href="{{route('login')}}" class="btn">Sign In</a>
            </div>
        </div>
    </header>

    <!-- MAIN -->
    <main class="signup__main">
        <img class="signup__bg" src="images/signup-bg.png" alt="bg">

        <div class="container">
            <div class="signup__container">
                <div class="signup__logo">
                    {{-- <a href="{{route('reddit')}}"><img src="{{asset('storage/WibUwU.png')}}" alt="logo" style="width: 200px;"></a> --}}
                    <a href="{{route('reddit')}}"><img src="{{asset('storage/LogoWibu.jpg')}}" alt="logo" style="width: 200px;"></a>
                </div>

                <div class="signup__head">
                    <h3>Create a New WibUwU Account</h3>
                    <p>By singin up you can start posting, replaying to topics, earn badges, favorite, vote topics and many more.</p>
                </div>
                <div class="signup__form">
                	<form action="{{route('sign_up_process')}}" method="post">
                        {{ csrf_field() }}
                    <div class="signup__section">
                        <label class="signup__label" for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="signup__section">
                        <label class="signup__label" for="login_name">Login Name</label>
                        <input type="text" class="form-control" id="login_name" name="login_name">
                    </div>
                    <div class="signup__section">
                        <label class="signup__label" for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="signup__section">
                        <label class="signup__label" for="email">Emain Address</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="signup__section">
                        <label class="signup__label" for="date_of_birth">Date of birth</label>
                        <div class="message-input">
                            <input type="date" class="form-control" id="date" name="date_of_birth">
                        </div>
                    </div>
                    <div class="signup__section">
                        <label class="signup__label" for="gender">Gender</label>
                        <div class="message-input">
                        	<input type="radio" value="0" name="gender">
                        	<span>Female</span>
                        	<input type="radio" value="1" name="gender" style="margin-left: 100px;">
                            
                            <span>Male</span>
                            
                        </div>
                    </div>
                   <button  class="signup__btn-create btn btn--type-02">Create New Account</button>
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