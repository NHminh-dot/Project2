<link rel="stylesheet" type="text/css" href="">
<style>
*{
	margin: 0;
	padding: 0;
}
.header{
		width: 100%;
		height: 50px;
		background: #01b7ff;
	}
	.nav-bar-logo{
		float: left;
		height: 100%;
		width: 10%;
		position: relative;
	}
		.nav-bar-logo> a > img{
			height: 100%;
			position: relative;
		}
	.nav-bar-search{
		margin-left: 250px;
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
	.nav-bar-login-signUp-logout .button{
		margin-top: 5px;
		margin-right: 15px;
		padding: 10px 35px;
		text-transform: uppercase;
		border: 2px solid #3030FE;
		border-radius: 6px;
		font-weight: 700;
		text-decoration: none;
		
	}
	#login_button{
		background-color: #fff;
		color: #3030FE;
		cursor: pointer;
		font-size: 100%;
		font: inherit;
	}
	#login_button:hover{
		background-color: #fff;
		color: #1501D8;
	}
	#sign_up{
		background-color: white;
		color: #3030FE;
		font-size: 100%;
		font: inherit;
	}
	#sign_up:hover{
		background-color: #C8C8C8;
	}
	#sign_up:active{
		background-color: #18318A;
	}
	
/*======Login Modal===========*/
.login_modal {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
.login_modal  input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.login_modal  input[type=text]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
/* Set a style for all buttons */
.login_modal > button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.login_modal > button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.login_modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
<div class="header">
		<div class="nav-bar-logo">
			<a href="{{route('reddit')}}">
				<img src="{{ asset('storage/photo/LogoWibu.jpg') }}">
			</a>
			
		</div>
		<div class="nav-bar-search">
			<form>
				<input id="search" type="search" name="search" value="{{ $search }}" placeholder="Search...">
			</form>
		</div>
		<div class="nav-bar-login-signUp-logout">
			@if (Session::has('user_id'))
				{{-- <input id="button" type="button" name="logout" value="logout"> --}}
				<a href="{{ route('logout') }}" class="button" style="background-color: #fff">log out</a>
				<div class="view-option">
				<p style="color: #fff">
					{{ Session::get('username') }}
				</p>	
				</div>
			@else
				{{-- <input id="button" class="login" type="button" name="login" value="log in"> --}}
			
				<button id="login_button" class="button" name="login" onclick="document.getElementById('login').style.display='block'" style="width:auto;">Login</button>
				

	{{-- ==================Login Modal=================== --}}
	<div id="login" class="login_modal">
  
  <form class="modal-content animate" action="{{route('process_login')}}" method="post">
  	 {{ csrf_field() }}
    <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Login</button>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

{{-- =====================End Login Modal===================== --}}

				{{-- <input id="button" class="sign_up" type="button" name="sign_up" value="sign up"> --}}
				<a href="{{route('sign_up')}}" id="sign_up" class="button" name="sign_up" >sign up</a>				
			@endif
		</div>
</div>

<script>
// Get the modal
var modal = document.getElementById('login');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
