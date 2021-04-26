<!doctype html>
<html>
<?php
session_start();
?>
<head> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<title> LoginForm</title></head>
	
<style>
	body
{
		margin:0;
		padding:0;
		display: flex;
		justify-content: center;
		align-items:center;
		min-height:100vh;
		background:black;
		font-family: consolas;
}
.container
{
		position:relative;
		width:500px;
		min-height:390px;
		background:linear-gradient(0deg,#000,#262626);
        box-shadow:  1px 5px 15px rgba(0,0,0,1);
}
.container:before,
.container:after

{
		content: '';
		position: absolute;
		top: -5px;
		left: -5px;
		width: calc(100% + 10px);
		height: calc(100% + 10px);
		background: linear-gradient(45deg,#fa7e1e,#f3da75,#00ffd5,#fd1d1d,#ff0000,#fa7e1e,#f3da75,#00ffd5,#fd1d1d,#ff0000);
		background-size:400%;
		z-index:-1 ;
		animation : animate 20s linear infinite;
}
@keyframes animate
{
 	 0%
	{
	 background-position: 0 0;
	}
	50%
	{
 	background-position: 300% 0;
	}
	100%
	{
 	background-position: 0 0;
	}
}

.container:after
{
	filter:blur(20px);
}

.form
{
	position: absolute;
	width: 100%;
	height: 100%;
	padding:40px;
	box-sizing: border-box;
	z-index: 1;
}
.form h2
{
	    margin:0;
		padding:0;
		color:#fff;
		font-size:30px;	
		
}
.form .inputbox
{
		width:100%;
		margin-top:20px;
}



.login-form .form-control{
	font-size: 15px;
	min-height: 48px;
	font-weight:500;

  }
.form .inputbox input
{
		width:100%;
		background: transparent;
		border: none;
		border-bottom: 2px solid #fff;
		outline:none;
		font-size:18px;
		color:#fff;
		padding:5px 0;
		font-family: sans-serif;
}

::placeholder
{
		color: #eee;
}
.form .inputbox input[type="submit"]
{
		background: #fff;
		color: #000;
		padding:2px;
		padding-bottom:5px;
		border: none;
		font-weight:800;
		max-width:150px;
		font-size:32px;
		border-radius:100px;
		margin-left:120px;
		cursor: pointer;
}

.form.p
{
		color: white;
}

.form-control.input-md
{
	width: 380px;
}
  
 
  .forgot-link{
	font-size: 13px;
	color: white;
  }
  
  .form-control:focus{
	border-color:#723dbe;
	box-shadow: 0 0 0 0.2rem rgba(114,61,190,.25);
  }
  .btn-custom{
	background: #723dbe;
	border-color:#723dbe;
	color:#fff;
	font-size: 15px;
	font-weight: 600;
	min-height: 48px;
  }
  

</style>

<body>
	<div class="container">
	   <div class="form">
		<div class="d-flex justify-content-center align-items-center login-container">
            <form action="" method="post">
			<center><h2 class="mb-3 font-weight-light text-uppercase">Login Here</h2></center><br><br>
                <input type="email" name="email" placeholder="Email" required="required" class="form-control input-md"><br>
                <div class="overlap-text">
                    <input type="password" name="pass" placeholder="Password" required="required" class="form-control input-md"><br>
                    <a style="text-decoration:none;float: right;color: #187FAB;" data-toggle="tooltip" title="Reset Password" href="forgot_password.php">Forgot? Password</a>
                </div>
                <a style="text-decoration: none;float: left;color: #187FAB;" data-toggle="tooltip" title="Create Account!" href="signup.php">New Account</a><br><br>

                <center><button id="signin" class="btn btn-info btn-lg" name="login">Login</button></center>
                <?php include("login.php"); ?>
            </form>
		</div>
        </div>
	</div>
</body>
</html>