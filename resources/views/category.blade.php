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
    @include('users/header')
    <!-- MAIN -->
    <main>
    <div class="container">
            <div class="nav">
                <div class="nav__categories js-dropdown">
                    <div class="nav__select">
                        <div class="btn-select" data-dropdown-btn="tags">Tags</div>
                        <div class="dropdown dropdown--design-01" data-dropdown-list="tags">
                            <div class="tags">
                                <a href="#" class="bg-4f80b0">gaming</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="posts">
                <div class="posts__head">
                    <div class="posts__topic"><h1>Category</h1></div>
                    <div class="posts__topic-btn">
                        @if(Session::has('user_id'))
                    	<button {{-- onclick="followButton()" --}}>
                            <p id="follow_button"><a href="{{route('follow')}}">Follow</a></p>
                    	</button>
                        @endif
                    </div>
                </div>
            @foreach ($category_id->post as $post)
                <div class="posts__item">
                    <div class="posts__section-left">
                        <div class="posts__topic">
                            <div class="posts__content">
                                <a href="{{ route('comments',['id' => $post->id]) }}">
                                    <h3>{{ $post->title }}</h3>
                                </a>
                            </div>
                        </div>
                        {{-- <div class="posts__category"><a href="#" class="category">{{ $category->post->get('content') }}</a></div> --}}
                    </div>
                    <div class="posts__section-right">
                        {{-- <div class="posts__replies">{{ $post->comments->count() }}</div>
                        <div class="posts__activity">{{ $post->created_at->diffForHumans() }}</div> --}}
                    </div> 
                </div>
                @endforeach
    </main>
    <script>
// function followButton() {
//   var followButton = document.getElementById('follow_button');
//   if (followButton.innerHTML.match("Follow")) {
//    followButton.innerHTML = Unfollow;
//     followButton.style.background-color='lightgreen';
//   } else {
//      followButton.innerHTML = Follow;
//      followButton.style.background-color='white';
//   }
// }

</script>
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/velocity/velocity.min.js')}}"></script>
    <script src="{{asset('js/UnityApp.js')}}"></script>

</body>
</html>