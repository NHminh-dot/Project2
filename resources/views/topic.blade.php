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
		@include('layoutuser/header')
			<div class="ListingLayout-backgoundContainer" style="background: #DAE0E6;">
				<div class="listPostContainer">
					@foreach($array_topic as $topic)
					<div>
						{{$topic->name}};
					</div>
					@endforeach
				<div style="position: relative; background-color: #666; width: 100%; height: 37px;">
				</div>
			</div>
	</div>
</body>
<script src="https://kit.fontawesome.com/yourcode.js"></script>

</html>