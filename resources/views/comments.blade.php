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
                                    <a href="#" class="avatar"><img class="user-avatar" src="{{ asset('storage/' . $post->user->picture) }}" alt="avatar"></a>
                                    {{-- <img src="{{ asset('storage/' . $post->user->picture) }}" /> --}}
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#">{{ $post->user->username }}</a>
                                        @if ($post->user->role->id == 1)
                                            &nbsp|&nbsp<strong style="color:red">{{ $post->user->role->name }}</strong>
                                        @elseif($post->user->role->id == 2)
                                            &nbsp|&nbsp<strong style="color:blue">{{ $post->user->role->name }}</strong>
                                        @else
                                            &nbsp|&nbsp<strong style="color:gray">{{ $post->user->role->name }}</strong>
                                        @endif
                                    </div>
                                    <div class="topic__date"><i class="icon-Watch_Later"></i>{{ $post->created_at->diffForHumans() }}</div>
                                </div>
                            </div>
                            <div class="topic__content">
                                <div class="topic__text">
                                 {{-- {{ $post->content }} --}}
                                 {!! $post->content !!}
                                </div>
                                
                            </div>
                        </div>
                         @endforeach
                         {{-- comment --}}
                         @foreach ($post_id->comments as $comment)
                        <div class="topic">
                            <div class="topic__head">
                                <div class="topic__avatar">
                                    {{-- <a href="#" class="avatar"><img src="{{ $comment->user->picture }}" alt="avatar"></a> --}}
                                    <a href="#" class="avatar"><img src="{{ asset('storage/' . $comment->user->picture) }}" alt="avatar"></a>
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#">{{ $comment->user->username }}</a>
                                        @if ($comment->user->role->id == 1)
                                            &nbsp|&nbsp<strong style="color:red">{{ $comment->user->role->name }}</strong>
                                        @elseif($comment->user->role->id == 2)
                                            &nbsp|&nbsp<strong style="color:blue">{{ $comment->user->role->name }}</strong>
                                        @else
                                            &nbsp|&nbsp<strong style="color:gray">{{ $comment->user->role->name }}</strong>
                                        @endif
                                    </div>
                                    <div class="topic__date">
                                       
                                        <i class="icon-Watch_Later"></i>{{ $comment->created_at->diffForHumans() }}
                                    </div>
                                </div>
                            </div>
                            <div class="topic__content">
                                <div class="topic__text">
                                   {{-- {!!$comment->content!!} --}}
                                   {!! $comment->content !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="create__section">
                            <form action="{{ route('comment_process_insert',['id' => $post_id->id]) }}" method="post">
                                {{ csrf_field() }}
                                <label class="create__label" for="answer"><STRONG>Comment</STRONG></label>
                                <div class="create__section create__textarea">
                                    <textarea class="form-control" name="content" id="comment"></textarea>
                                </div>
                                <div class="create__footer">
                                    <button class="create__btn-create btn btn--type-02">Post</button>
                                </div>
                            </form>
                        </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    document.getElementsClassName('topic__text').innerHTML
</script>
<script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace( 'comment' );
</script>
</body>
</html>