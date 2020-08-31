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
<<<<<<< HEAD
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
=======
<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		border: 0;
		font-size: 100%;
		font: inherit;
		vertical-align: baseline;
	}
	.global{
		width: 100%;
		height: auto;
		/*background-color: green;*/
	}
	.header{
		width: 100%;
		height: 50px;
		background: #000;
	}
	.nav-bar-logo{
		float: left;
	}
	.nav-bar-search{
		margin-left: 100px;
		float: left;
	}
	.nav-bar-search #search{
		width: 500px;
		height: 45px;
		border-radius: 10px;
	}
	.nav-bar-login-signUp-logout{
		margin-left: 300px;
		float: left;
		display: flex;
		flex-direction: row;
		/*height: 50px;*/
	}
	.nav-bar-login-signUp-logout #button{
		margin-top: 5px;
		margin-right: 15px;
		padding: 10px 35px;
		text-transform: uppercase;
		border: 2px solid #3030FE;
		border-radius: 6px;
		font-weight: 700;
		text-decoration: none;
		font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
	}
	.login{
		background-color: #fff;
		color: #3030FE;
	}
	.login:hover{
		background-color: #fff;
		color: #1501D8;
	}
	.sign_up{
		background-color: #3030FE;
		color: #fff;
	}
	.sign_up:hover{
		background-color: #C8C8C8;
	}
	.sign_up:active{
		background-color: #18318A;
	}
	.container{
		/*position: relative;*/
	}
	.ListingLayout-backgoundContainer{ 
	 	display: block; 
	 	width: 100%;
	}
	.listPostContainer{
		max-width: 65%;
		background-color: cyan;
		position: relative;
		left: 20%;
	}
	.Create-post{
		display: flex;
		flex-direction: row;
		width: 600px;
		height: 55px;
		background-color: #fff;
		margin: 20px;
		border: 1px solid #666;
		border-radius: 5px;
	}
	.create-post_avatar-user{
		max-width: 40px;
		text-align: center;
		margin: 11px 5px;
	}
	.create-post_avatar-user img{
		/*margin-top: 5px;*/
	}
	.create-post_input{
		margin: 10px 0px;
		width: 100%;
	}
	.create-post_input input{
		width: 90%;
		height: 30px;
	}
	.Posts{
		/*display: block;*/
		display: flex;
		flex-direction: inline-column;
		width: 600px;
		background-color: yellow;
		padding-top: 8px;
		margin: 20px;
		border: 1px solid #666;
		border-radius: 5px;
	}
	.post-information{
		display: flex;
		flex: 1 1 auto;
		/*flex-direction: row;*/
		/*float: left;*/
		width: 450px
	}
	.avatar{
		border-radius: 50%;
		padding:  0 5px;
	}
	.post-information a{
		text-decoration: none;
	}
	.post-follow{
		color: #fff;
		padding: 5px;
		background-color: #3030FE;
		text-transform: uppercase;
		font-weight: 700;
		font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
		border-radius: 6px;
		float: right;
	}
	.post-title{
		font-weight: bold;
		font-size: 20px;
	}
	.post-content{
		padding-top: 5px;
	}
	.pagination{
		position: absolute;
		left: 5%;
		padding-top: 5px;
		float: left;
		list-style-type: none;
	}
	.pagination li{
		position: relative;
		float: left;
		border-right: 1px solid #ffffff;
		text-align: center;
	}
	.pagination li a{
		padding: 10px;
		color: white;
	}
</style>
<body>
	<div class="global">
		@include('layoutuser/header', ['some' => 'data'])
		<div class="container">
			<div class="ListingLayout-backgoundContainer" style="background: #DAE0E6;">
				<div class="listPostContainer">
					@if (Session::has('user_id'))
					<div class="Create-post">
						<div class="create-post_avatar-user">
							<a href="#">
								<img class="avatar" style="max-width: 30px;" src="{{ Session::get('picture') }}">
							</a>
						</div>
						<div class="create-post_input">
							<a href="{{ route('submit') }}"><input type="text" name="" placeholder="&nbsp Create Post"></a>
						</div>
					</div>
					@endif
					@foreach ($array_post as $post)
						<div class="Posts">
							<a href="{{ route('comments',['id' => $post->id]) }}">
								<div class="" style="float: left; width: 40px; border-left: 4px solid transparent">
									<form action="">
										<div class="vote-arrow">
											<button class="voteButton">
												<span>
													<img style="max-width: 10px" src="{{ asset('storage/photo/upvote-512.png') }}">	
												</span>
											</button>
											<div>
												{{ $post->up_vote - $post->down_vote }}
											</div>
											<button class="voteButton">
												<span>
													<img style="max-width: 10px" src="{{ asset('storage/photo/downvote-512.png') }}">	
												</span>
											</button>
										</div>
									</form>
								</div>
								<div class="" style="float: left; ">
									<div style="display: flex; flex-direction: row;">
										<div class="post-user-avatar">
											<a href="#">
												<img class="avatar" src="{{ $post->user->picture }}" style="max-width: 20px;">
											</a>
										</div>
										<div class="post-information">
											<div class="post-category">
												<a href="#" style="color: #000">
													{{ $post->category->name }}
												</a>
											</div>
											<span style="font-weight: 1000">&nbsp.&nbsp</span>
											<span>Posted by&nbsp</span>
											<div>
												<a href="#" style="color: rgb(120, 124, 126);">
													{{ $post->user->username }}
												</a>
											</div>
											&nbsp{{ $post->created_at->diffForHumans() }}
											{{-- <hr>
											{{ $post->created_at->toDateString() }} --}}
										</div>
										<button class="post-follow">follow</button>
									</div>
									<div class="post-title">
										<a style="text-decoration: none; color: black; margin" href="{{ route('comments',['id' => $post->id]) }}">
											{{ $post->title }}
										</a>
									</div>
									<div class="post-content">
										{{ $post->content }}
									</div>
									<div class="post-comment">
										<i class='fas fa-comment-alt'></i>
										{{ $post->comments->count() }} Comments
									</div>
								</div>
							</a>
						</div>
					@endforeach
				</div>
				<div style="position: relative; background-color: #666; width: 100%; height: 37px;">
					{{ $array_post->links() }}
				</div>
			</div>
		</div>
	</div>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
>>>>>>> 49c6ed3ebc052acdf93430a4f5d4f536cd1aeceb
</body>
</html>