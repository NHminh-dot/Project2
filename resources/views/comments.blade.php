<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>reddit</title>
</head>
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
		background-color: green;
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
		padding-bottom: 10px;
	}
</style>
<body>
	<div class="global">
		@include('layoutuser/header', ['some' => 'data'])
		<div class="container">
			<div class="ListingLayout-backgoundContainer" style="background: #DAE0E6;">
				<div class="listPostContainer">
					@foreach ($array_post as $post)
						<div class="Posts">
							<a href="{{ route('comments',['title' => $post->title]) }}">
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
									<button class="post-follow">follow</button>
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
							</a>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>	
</body>
</html>