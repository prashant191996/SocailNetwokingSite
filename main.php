<!DOCTYPE html>
<html>
<head>
	<title>ChatBook</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		overflow-x: hidden;
		background-color: black;
	}

	#signup{
		width: 60%;
		border-radius: 30px;
        margin-left: 80px;
	}
	#login{
		width: 60%;
		background-color: #fff;
		border: 1px solid #1da1f2;
		color: #1da1f2;
		border-radius: 30px;
		margin-left: 80px;
	}
	#login:hover{
		width: 60%;
		background-color: #fff;
		color: #1da1f2;
		border: 2px solid #1da1f2;
		border-radius: 30px;
	}
	


h1  
 {  
  color :white;
  font-family:cursive;
	font-size:80px;
	text-align: center;
	-webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
  }
 @-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
  
} 
.my{
  border-radius:50%;
  height: 600px;
  width: 400px; 
  background-color: red;    

}

.d1{
	float:right;
	width: 50%;  
   height: 500px;
   background-color: black;
   margin-top: 100px;
   margin-right: 150px;
   margin-left: 80px;
	}

  .d2{
	float:left;
	width: 50%;  
    height: 400px;
	margin-top: 100px;
    margin-right: 150px;
    
	}
	


</style>
<body>
	<div class="row">
		<div class="col-sm-12">
			
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6" style="left:0.5%;">
		<div class="d1">
           <h1> welcome to the<br> Chatbook <br> World</h1>
        </div>
	  <form method="post" action="">
				<button id="signup" class="btn btn-info btn-lg" name="signup" >Sign up</button><br><br>
				<?php
					if(isset($_POST['signup'])){
						echo "<script>window.open('signup.php','_self')</script>";
					}
				?>
				<button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>
				<?php
					if(isset($_POST['login'])){
						echo "<script>window.open('signin.php','_self')</script>";
					}
				?>
			
		</div>
		<div class="col-sm-6" >
		<div class ="d2">
        <image class="my" src="logo.gif" type="/image/gif">
        </div>
		</div>
	</div>
</body>
</html>