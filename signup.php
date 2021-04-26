<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<style>
	@import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900');
 body
{
	
	margin:0;
	padding:0;
	box-sizing:border-box;
	font-family : 'Poppins', sans-serif;
	
} 
 body
{    
    
	display: flex;
	justify-content: center;
	align-items:center;
	min-height:100vh;
	background: black;
} 

.container
{
	position:relative;
	display: flex;
	justify-content:center;
	align-items: center;
	
}
	.container .box
	{
     position: relative;
     width: 800px;
	 height: 650px;
     color:white;
     display:flex;
     justify-content:center; 
	 align-items:center;
	 -webkit-box-reflect:below 15px linear-gradient(transparent,transparent,transparent,rgba(0,0,0,.2));
	}

	.container  .box:hover
	{
		color:#000;
	}
	 .container  .box:before
	{
		content:'';
		position:absolute;
		top:-10px;
		left:-10px;
		width:100%;
		height:100%;
		border: 4px solid #fff;
		background:#000;
		filter:url(#wavy);
	} 
	 .container  .box:hover:before
	{
		background:white;
		transition:0.5s;
	} 
	.container .box .content
	{
		position: absolute;
		padding: 20px;
		text-align: center;
		transition: 0.5s;
		
	}
	</style>
	<body>
		<div class="container">
		<div class="box">
		<div class="content">
			<h1> Welcome to Chatbook </h1>
			<br>
			<form action="" method="post">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
					<input type="text" class="form-control" placeholder="First Name" name="first_name" required="required">
				</div><br>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
					<input type="text" class="form-control" placeholder="Last Name" name="last_name" required="required">
				</div><br>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input id="password" type="password" class="form-control" placeholder="Password" name="u_pass" required="required">
				</div><br>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input id="email" type="email" class="form-control" placeholder="Email" name="u_email" required="required">
				</div><br>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
					<select class="form-control" name="u_country" required="required">
						<option disabled>Select your Country</option>
						<option>India</option>
						<option>United States of America</option>
						<option>Pakistan</option>
						<option>Japan</option>
						<option>UK</option>
						<option>France</option>
						<option>Germany</option>
					</select>
				</div><br>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
					<select class="form-control input-md" name="u_gender" required="required">
						<option disabled>Select your Gender</option>
						<option>Male</option>
						<option>Female</option>
						<option>Others</option>
					</select>
				</div><br>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
					<input type="date" class="form-control input-md" placeholder="Email" name="u_birthday" required="required">
				</div><br>
				<a style="text-decoration: none;float: right;color: #187FAB;" data-toggle="tooltip" title="Signin" href="signin.php">Already have an account?</a><br><br>

				<center><button id="signup" class="btn btn-info btn-lg" name="sign_up">Signup</button></center>
				<?php include("insert_user.php"); ?>
			</form>
		</div>
		</div>
		</div>
		<svg>
		<filter id="wavy">
		<feturbulence x="0" y="0" baseFrequency="0.02" numOctaves="5" seed="2">
		<animate attributeName="baseFrequency" dur="60s" values="0.02;0.05;0.02" repeatCount="indefinite"/>
		</feturbulence>
		<feDisplacementMap in="SourceGraphic" scale="30"/>
		</filter>
		</svg>		

	</body>
</html>