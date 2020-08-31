<!doctype html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Responsive HTML5 Template">
    <meta name="author" content="author.com">
    <title>Responsive HTML5 Template</title>

    <!-- STYLESHEET -->
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- icon -->
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
    <!-- HEADER -->
    <header>
       <header>
        <div class="header js-header js-dropdown">
            <div class="container">
                <div class="header__logo">
                    <a href="{{route('reddit')}}">
                        <img src="{{asset('storage/LogoWibu.jpg')}}" alt="logo" height="50px">
                    </a>
                </div>
                <div class="header__search">
                    <form action="#">
                        <label>
                            <i class="icon-Search js-header-search-btn-open"></i>
                            <input type="search" placeholder="Search all forums" class="form-control">
                        </label>
                    </form>
                    <div class="header__search-btn">
                        <button style="background-color: white;" >
                            Search
                        </button>
                    </div>
                </div>
                <div class="header__user">
                    <div class="header__user-btn" data-dropdown-btn="user">
                        <img src="{{asset('fonts/icons/avatars/A.svg')}}" alt="avatar">
                        azyrusmax<i class="icon-Arrow_Below"></i>
                    </div>
                    <nav class="dropdown dropdown--design-01" data-dropdown-list="user">
                        <div>
                            <div class="dropdown__icons">
                                <a href="#"><i class="icon-Bookmark"></i></a>
                                <a href="#"><i class="icon-Message"></i></a>
                                <a href="#"><i class="icon-Preferences"></i></a>
                                <a href="#"><i class="icon-Logout"></i></a>
                            </div>
                        </div>
                        <div>
                            <ul class="dropdown__catalog">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Topics</a></li>
                                <li><a href="#">Likes</a></li>                            
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- MAIN -->
    <main>
        <div class="container">
            <div class="create">
                <form action="" method="post">
                    {{csrf_field()}}
                <div class="create__head">
                    <div class="create__title"><img src="fonts/icons/main/New_Topic.svg" alt="New topic">Create New Thread</div>
                    <span>Forum Guidelines</span>
                </div>
                <div class="create__section">
                    <label class="create__label" for="title">Thread Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Add here">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="create__section">
                            <label class="create__label" for="category">Select Category</label>
                            <label class="custom-select">
                                <select id="category">
                                    @foreach($array_topic as $topic)
                                        <option>{{$topic->name}}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="create__section">
                            <label class="create__label" for="sub-category">Select Sub Category</label>
                            <label class="custom-select">
                                <select id="sub-category">
                                    @foreach($array_category as $category)
                                        <option>($category->name)</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="create__section create__textarea">
                    <textarea class="form-control" id="description"></textarea>
                </div>
                <div class="create__section">
                    <label class="create__label" for="tags">Add Tags</label>
                    <input type="text" class="form-control" id="tags" placeholder="e.g. nature, science">
                </div>
                <div class="create__footer">
                    <a href="#" class="create__btn-cansel btn">Cancel</a>
                    <a href="#" class="create__btn-create btn btn--type-02">Create Thread</a>
                </div>
                </form>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="footer js-dropdown">
            <div class="container">
                <div class="footer__logo">
                    <div>
                        <img src="fonts/icons/main/Logo_Forum.svg" alt="logo">Unity
                    </div>
                </div>
                <div class="footer__nav">
                    <div class="footer__tline">
                        <i class="icon-Support"></i>
                        <ul class="footer__menu">
                            <li><a href="#">Support</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">The Team</a></li>
                        </ul>
                    </div>
                    <div class="footer__bline">
                        <ul class="footer__menu">
                            <li class="footer__copyright"><span>&copy; 2017 azyrusthemes.com</span></li>
                            <li><a href="#">Teams</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Send Feedback</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JAVA SCRIPT -->
    <script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'description' );
    
    </script>
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/velocity/velocity.min.js')}}"></script>
    <script src="{{asset('js/UnityApp.js')}}"></script>

</body>
</html>