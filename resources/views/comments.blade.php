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
  	@include('users/header',['some' => 'data']);

    <!-- MAIN -->
    <main>
        <div class="container">
            <div class="nav">
                <div class="nav__categories js-dropdown">
                    <div class="nav__select">
                        <div class="btn-select" data-dropdown-btn="categories">Categories</div>
                        <nav class="dropdown dropdown--design-01" data-dropdown-list="categories">
                            <ul class="dropdown__catalog row">
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-368f8b"></i>Politics</a></li>
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
                   
                    <ul>
                        <li class="active"><a href="#">Latest</a></li>
                       
                        <li><a href="#">Follow Feed</a></li>
                    </ul>
                </div>
               
            </div>
            <div class="topics">

            	@foreach ($array_post2 as $post)
                <div class="topics__heading">
                    <h2 class="topics__heading-title">{{ $post->title }}</h2>
                    <div class="topics__heading-info">
                        <a href="#" class="category"><i class="bg-3ebafa"></i>{{ $post->category->name }}</a>
                        <div class="tags">
                            <a href="#" class="bg-4f80b0">gaming</a>
                        </div>
                    </div>
                </div>
                <div class="topics__body">
                    <div class="topics__content">
                    	
                        <div class="topic">
                            <div class="topic__head">
                                <div class="topic__avatar">
                                    <a href="#" class="avatar"><img src="{{ $post->user->picture }}" alt="avatar"></a>
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#">{{ $post->user->username }}</a>
                                    </div>
                                    <div class="topic__date"><i class="icon-Watch_Later"></i>{{ $post->created_at->diffForHumans() }}</div>
                                </div>
                            </div>
                            <div class="topic__content">
                                <div class="topic__text">
                                 {{ $post->content }}
                                </div>
                                <div class="topic__footer">
                                    <div class="topic__footer-likes">
                                        <div>
                                            <a href="#"><i class="icon-Upvote"></i></a>
                                            <span></span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Downvote"></i></a>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         @endforeach
                         {{-- comment --}}
                         @foreach ($post_id->comments as $comment)
                        <div class="topic">
                            <div class="topic__head">
                                <div class="topic__avatar">
                                    <a href="#" class="avatar"><img src="{{ $comment->user->picture }}" alt="avatar"></a>
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#">{{ $comment->user->username }}</a>
                                    </div>
                                    <div class="topic__date">
                                       
                                        <i class="icon-Watch_Later"></i>{{ $comment->created_at->diffForHumans() }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="topic__content">

                                <div class="topic__text">
                                   {{ $comment->content }}
                                </div>
                                <div class="topic__footer">
                                    <div class="topic__footer-likes">
                                        <div>
                                            <a href="#"><i class="icon-Upvote"></i></a>
                                            <span></span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Downvote"></i></a>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="footer js-dropdown">
            <div class="container">
        
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
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/velocity/velocity.min.js')}}"></script>
    <script src="{{asset('js/UnityApp.js')}}"></script>

</body>
</html>