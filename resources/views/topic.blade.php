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
                    <div class="posts__topic"><h1>All Topic</h1></div>
                </div>
            @foreach($array_topic as $topic)
    		<div class="topic__content">
                <div class="topic__title">
                    <h3>{{$topic['name']}}</h3>
                </div>
                <div class="topic__list">
                    <ul>
                        @foreach($topic['category'] as $category)
                        <li><a href="{{ route('category',['id' => $category['id']]) }}">{{ $category['name'] }} </a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
    </main>
</body>
</html>