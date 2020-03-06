<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="CSS\styleforgotpassword.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
		<div class="header fix">
			<form>
				<div class="navbtn">
					<a href="login.php"><input type="button" name="submit" value="Login Form"></a>
					<a href="registar.php"><input type="button" name="reset" value="Ragistration Form"></a>
				</div>
			</form>
		</div>
		<div class="heading fix">
				<label>OTP Form</label>	
			</div>			
		<div class="box">
				<h3>Enter a OTP </h3>
				<form action="process.php" method="post">
					<span><i class="fa fa-pencil" aria-hidden="true"></i></span>
					<input type="number" name="otpno" required placeholder="Enter a One Time Password (OTP)"><br>
					<div class="btn" >
						<input type="submit" name="submit" value="Sucess">
						<input type="submit" name="submit" value="Resend">
					</div>
				</form>
   			 </div>
   			<div class="footer">
  		<h3>Copyrights 2019.</h3>
  		<h3>Powered By <a href="https://www.linkedin.com/in/smit-shah-60823514a">Smit Shah</a></h3>
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
</body>
</html>