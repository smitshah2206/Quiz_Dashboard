<?php
	error_reporting(1);
	include('connection.php');
	if (!$conn) 
	{
    	die("Connection failed: " . mysqli_connect_error());
	}
	if($_POST['submit'] == "Login")
	{
		$user_email=$_POST['user_email'];
		$password=$_POST['password'];
		$query = "SELECT * FROM login WHERE user_email='$user_email' AND password='$password'";
		$result = mysqli_query($conn,$query);
		$count = mysqli_num_rows($result);
		if ($result)
		{
		 	if( $count == 1 )
			{
				echo '<script> alert("Welcome...!!!");
					window.location="quiz.php";</script>';
			}
			else
			{
				echo '<script> alert("Your email id is not registered...!!!");
					window.location="registar.php";  </script>';
			}
		}
		else
		{
			echo '<script> alert("Error");
				window.location="login.php";</script>';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="CSS\stylelogin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
	<style type="text/css">
	.error{color: blue;}
	</style>
</head>
<body>
	
		<div class="header fix">
			<form>
				<div class="navbtn">
					<a href="login.php"><input type="button" name="submit" value="Login Form"></a>
					<a href="registar.php"><input type="button" name="reset" value="Ragistration Form"></a>
					<a href="contactus.php"><input type="button" value="Get In Touch"></a>
				</div>
			</form>
		</div>
		<div class="heading fix">
				<label>Login Form</label>	
			</div>			
		<div class="box">
				<h3>Login Details </h3>
				<form action="login.php" method="post" id="myform"> 
					<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
					<input type="text" id='email' name="user_email" placeholder="Email Id " required><br>
					<span><i class="fa fa-lock" aria-hidden="true"></i></span>
					<input type="password" id='password' required name="password" placeholder="Password">
					<h4> 
						<a href="forgotpassword.php"> Forgotten account ?</a> 
					</h4>
					<div class="btn" >
						<input type="submit" name="submit" value="Login"></a>
					</div>
				</form>
   		</div>
<div class="footer">
  			<h3>Copyrights 2019. </h3>
  			<h3>Powered By <a href="https://www.linkedin.com/in/smit-shah-60823514a"> Smit Shah </a></h3>
			<div class="scircle scircle1">
				<a href="https://www.facebook.com/smitshah22050602"><i class="fa fa-facebook fa-lg" aria-hidden="true" ></i></a>
			</div>		
			<div class="scircle scircle2">
				<a href="https://mobile.twitter.com/SmitShah2206"><i class="fa fa-twitter fa-lg" aria-hidden="true" ></i></a>
			</div>
			<div class="scircle scircle3">
				<a href="https://www.instagram.com/_king_kohli_018/"><i class="fa fa-instagram fa-lg" aria-hidden="true" ></i></a>
			</div>
			<div class="scircle scircle4">
				<a href="https://www.linkedin.com/in/smit-shah-60823514a"><i class="fa fa-linkedin fa-lg" aria-hidden="true" ></i></a>
			</div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>
<script>
jQuery.validator.addMethod("checkemail", function(value, element) {
  // allow any non-whitespace characters as the host part
  return this.optional( element ) || /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i.test( value );
}, 'Please enter a valid email address.');






$(document).ready(function () {

    $('#myform').validate({ 
        rules: {
            email:{
            	required:true,
            	email:true,
            	checkemail:true,
            },
            password:{
            	required:true,
            	minlength:7,
            	maxlength:15,

            },
        },
        messages:{
        	email:{
        		required:"email required",
        		email:"enter valid email",
        		checkemail:"enter proper email",

        	},
			password:{
				required:"password is required",
				minlength:"enter password between 7-15",
				maxlength:"enter password between 7-15",
			},
        },
    });

});
</script>
</body>
</html>