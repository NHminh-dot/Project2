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
<<<<<<< HEAD
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
		max-width: 50%;
		/*background-color: cyan;*/
		position: relative;
		left: 20%;
	}
	.Posts{
		/*display: block;*/
		display: flex;
		flex-direction: inline-column;
		width: 90%;
		/*background-color: yellow;*/
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
	.post-information a{
		text-decoration: none;
	}
	/*.post-follow{
		color: #fff;
		padding: 5px;
		background-color: #3030FE;
		text-transform: uppercase;
		font-weight: 700;
		font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
		border-radius: 6px;
		float: right;
	}*/
	.post-title{
		font-weight: bold;
		font-size: 20px;
	}
	.post-content{
		padding-top: 5px;
		padding-bottom: 10px;
	}
	.Comments{
		display: flex;
		flex-direction: inline-column;
		width: 90%;
		/*background-color: yellow;*/
		padding-top: 8px;
		margin: 20px;
		border: 1px solid #666;
		border-radius: 5px;
	}
	.comment-information{
		display: flex;
		flex: 1 1 auto;
		width: 450px
		border-left: 1px solid #666;
	}
	.comment-information a{
		text-decoration: none;
	}
	/*.comment-content{
		margin: 10px;
	}*/
	.comment-content p{
		padding-bottom: 5px;
	}
	.comment-button{
		text-decoration: none; 
		color: white; 
		background-color: red; 
		text-transform: uppercase; 
		padding: 5px 10px; 
		border-radius: 5px;
		font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
		font-weight: bold;
		font-size: 13px;
	}
	.comment-button:hover{
		background-color: #DF9F9F;
	}
	.comment-button:active{
		background-color: #7D3939;
	}
</style>
<body>
	<div class="global">
		@include('layoutuser/header', ['some' => 'data'])
		<div class="container">
			<div class="ListingLayout-backgoundContainer" style="background: #DAE0E6;">
				<div class="listPostContainer">
					@foreach ($array_post2 as $post)
						<div class="Posts">
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
											<img src="{{ $post->user->picture }}" style="max-width: 20px;">
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
									{{-- <button class="post-follow">follow</button> --}}
								</div>
								<div class="post-title">
									{{ $post->title }}
								</div>
								<div class="post-content">
									{{ $post->content }}
								</div>
								<div class="post-comment" style="font-weight: bold; font-size: 14px;">
									<i class='fas fa-comment-alt'></i>
									{{ $post->comments->count() }} Comments
								</div>
							</div>
						</div>
						{{-- Phan comment --}}
						<div style="width: 90%; margin: 20px;">
							<div>
								<p style="margin-bottom: 5px; font-size: 14px;">
									Comment as <a href="#" style="text-decoration: none; color: red;">{{ Session::get('username') }}</a>
								</p>
							</div>
							<form action="{{ route('comment_process_insert',['id' => $post->id]) }}" method="post">
								{{ csrf_field() }}
							<textarea id="comment" name="content"></textarea>
								<div>
									{{-- <a class="" href="#">comment</a> --}}
									<button class="comment-button">comment</button>
								</div>
							</form>
						</div>
						<div class="post-list-comment">
							@foreach ($post_id->comments as $comment)
							<div class="Comments">
								<div class="" style="float: left; max-width: 40px; border-left: 4px solid transparent">
									<div class="vote-arrow">
										<button class="voteButton">
											<span>
												<img style="max-width: 10px" src="{{ asset('storage/photo/upvote-512.png') }}">	
											</span>
										</button>
										<div>
											0
										</div>
										<button class="voteButton">
											<span>
												<img style="max-width: 10px" src="{{ asset('storage/photo/downvote-512.png') }}">	
											</span>
										</button>
									</div>
								</div>
								<div class="" style="float: left; margin-left: 5px;">
									<div style="display: flex; flex-direction: row;">
										<div class="comment-information">
											<div class="comment-username">
												<a href="#" style="color: #000">
													{{ $comment->user->username }}
												</a>
											</div>
											<span style="font-weight: 1000">&nbsp.&nbsp</span>
											<div>
												<a href="#" style="color: rgb(120, 124, 126);">
													{{-- {{ $post->user->username }} --}}
													&nbsp{{ $comment->created_at->diffForHumans() }}
												</a>
											</div>
										</div>
									</div>
									<div id="comment-content">
										{{ $comment->content }}
										{{-- {{ $post_id->comments()->get(['content']) }} --}}
									</div>
								</div>
							</div>
							@endforeach
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>	
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
	CKEDITOR.replace('comment');
</script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	document.getElementById("comment-content").innerHTML = "{{ $comment->content }}"
</script> --}}
>>>>>>> 49c6ed3ebc052acdf93430a4f5d4f536cd1aeceb
</body>
</html>