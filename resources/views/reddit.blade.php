<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>reddit</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	}
	.ListingLayout-backgoundContainer{ 
	 	width: 100%;
	}
	.listPostContainer{
		width: 80%;
		padding-top: 50px;
		margin-right: auto;
		margin-left: auto;
	}
	.Posts{
		/*display: block;*/
		display: flex;
		flex-direction: inline-column;
		width: 70%;
		background-color: white;
		padding-top: 8px;
		margin-left: auto;
		margin-right: auto;
		margin-top: 20px;
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
	.post-title{
		font-weight: bold;
		font-size: 20px;
	}
	.post-content{
		
	}
	.pagination{
		position: absolute;
		left: 40%;
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
	.pagination li span{
		padding: 10px;
		color: red;
	}
</style>
<body>
	<div class="global">
		@include('layoutuser/header', ['some' => 'data'])
		@include('layoutuser/nav-bar');
			<div class="ListingLayout-backgoundContainer" style="background: #DAE0E6;">
				<div class="listPostContainer">
					@foreach ($array_post as $post)
						<div class="Posts">
							<a href="{{ route('comments',['title' => $post->title]) }}">
							<div class="" style="float: left; width: 40px; border-left: 4px solid transparent">
								<form action="">
									<div class="vote-arrow">
										<button>
                                <span>
                                    <i class="fa fa-arrow-circle-o-up" style="font-size: 20px;"></i>
                                </span>
                            </button>
										<div>
											{{ $post->up_vote - $post->down_vote }}
										</div>
										<button>
                                <span>
                                    <i class="fa fa-arrow-circle-o-down" style="font-size: 20px;"></i>
                                </span>
                            </button>
									</div>
								</form>
							</div>
							<div class="post-info" style="float: left; ">
								<div style="display: flex; flex-direction: row;">
									<div class="post-information">
										<div class="post-category">
											<a href="#" style="color: #000">
												{{ $post->category->name }}
											</a>
										</div>
										
										{{-- <hr>
										{{ $post->created_at->toDateString() }} --}}
									</div>
									
								</div>
								<div class="post-title">
									{{ $post->title }}
								</div>
								<div class="post-content">
									<span style="font-weight: 1000"></span>
										<span>Posted by&nbsp</span>
											<a href="#" style="color: rgb(120, 124, 126);">
												{{ $post->user->username }}
											</a>
										&nbsp{{ $post->created_at->diffForHumans() }}
								</div>
								<div class="post-comment">
									<span>
									<i class='fas fa-comment-dots'></i>
									
									</span>
									{{ $post->comments->count() }}
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
</body>
<script src="https://kit.fontawesome.com/yourcode.js"></script>

</html>