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
    <!-- HEADER -->
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
                        <img src="fonts/icons/avatars/A.svg" alt="avatar">
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
            <div class="header__offset-btn">
                <a href="{{route('write_post')}}"><img src="fonts/icons/main/New_Topic.svg" alt="New Topic"></a>
            </div>
        </div>
    </header>

    <!-- MAIN -->
    <main>
        <div class="container">
            <div class="nav">
                <div class="nav__categories js-dropdown">
                    <div class="nav__select">
                        <div class="btn-select" data-dropdown-btn="categories">All Categories</div>
                        <nav class="dropdown dropdown--design-01" data-dropdown-list="categories">
                            <ul class="dropdown__catalog row">
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-f9bc64"></i>Hobbies</a></li>
                                
                            </ul>
                        </nav>
                    </div>
                    <div class="nav__select">
                        <div class="btn-select" data-dropdown-btn="tags">Tags</div>
                        <div class="dropdown dropdown--design-01" data-dropdown-list="tags">
                            <div class="tags">
                                <a href="#" class="bg-4f80b0">gaming</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav__menu js-dropdown">
                    <div class="nav__select">
                        <div class="btn-select" data-dropdown-btn="menu">Latest</div>
                       
                    </div>
                    <ul>
                        <li class="active"><a href="#">Latest</a></li>
                        <li><a href="#">Follow Feed</a></li>
                    </ul>
                </div>
            </div>
            <div class="posts">
                <div class="posts__head">
                    <div class="posts__topic">Topic</div>
                    <div class="posts__category">Category</div>
                    <div class="posts__replies">Replies</div>
                    <div class="posts__activity">Activity</div>
                </div>
                <div class="posts__body">
                    <div class="posts__item bg-fef2e0">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3><i><img src="fonts/icons/main/Pinned.svg" alt="Pinned"></i>Welcome New Users! Please read this before posting!</h3>
                                    </a>
                                    <p>Congratulations, you have found the Community! Before you make a new topic or post, please read community guidelines.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($array_post as $post)
                <div class="posts__item">
                    <div class="posts__section-left">
                        <div class="posts__topic">
                            <div class="posts__content">
                                <a href="{{ route('comments',['id' => $post->id]) }}">
                                    <h3>{{ $post->title }}</h3>
                                </a>
                            </div>
                        </div>
                        <div class="posts__category"><a href="#" class="category">{{ $post->category->name }}</a></div>
                    </div>
                    <div class="posts__section-right">
                        <div class="posts__replies">{{ $post->comments->count() }}</div>
                        <div class="posts__activity">{{ $post->created_at->diffForHumans() }}</div>
                    </div> 
                </div>
                @endforeach
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
                        
                        <div class="footer__language-btn-m" data-dropdown-btn="language">Americas - English<i class="icon-Arrow_Below"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JAVA SCRIPT -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/velocity/velocity.min.js')}}"></script>
    <script src="{{asset('js/UnityApp.js')}}"></script>
