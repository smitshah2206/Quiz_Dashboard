<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="CSS\styleregister.css">
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
				<label>Ragistration Form</label>
			</div>
			<div class="registerdonor">
				<form action="process.php" method="post" id="myform">
					<div class="login">
						<h3>Login Details</h3>
					<?php
					include('connection.php');
					if(isset($_POST['submit']))
					{
						if ($_POST['submit'] = "Send") 
						{
					
						$_SESSION['user_email']=$_POST['user_email'];
						$user_email=$_SESSION['user_email'];
						$query="SELECT * FROM login WHERE user_email='$user_email' ";
						$result=mysqli_query($conn,$query);
						$count = mysqli_num_rows($result);
						if ($result)
						{
		 					if( $count > 0 )
							{
								$row = mysqli_fetch_array($result);echo "<table>";
								$_SESSION['user_name']=$row['user_name'];
								$_SESSION['dob']=$row['dob'];			
								$_SESSION['gender']=$row['gender'];
							}
							else
							{
								echo '<script> alert("No data found"); window.location="forgot_password.php";</script>';
							}
						}
						echo "<tr>";
							echo "<td colspan='2'>";
								echo "<label class='username'>Full Name:-</label>";
								echo "<input type='text' name='user_name' id='name' value='".$_SESSION['user_name']."' autocomplete='off' disabled>";
							echo "</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>";
								echo "<label>Email Id:-</label>";
								echo "<input type='email' name='user_email' id='email' value='".$user_email."' autocomplete='off'>";
							echo "</td>";
							echo "<td>";
								echo "<label>Date Of Birth:-</label>";
								echo "<input type='date' name='dob'  value='".$_SESSION['dob']."' autocomplete='off' disabled >";
							echo "</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>";
								echo "<label>Password:-</label>";
								echo "<input type='password' name='password' id='password' autocomplete='off' required>";
							echo "</td>";
							echo "<td>";
								echo "<label>Gender:-</label>";
								echo "<div class='radio'>";
								if($_SESSION['gender'] == 'Male')
								{
									echo "<input type='radio' name='gender' class='radio1' value='Male' selected><span class='radioname'>Male</span>";
									echo "<input type='radio' class='radio2' name='gender' value='Female'><span class='radioname'>Female</span>";
								}
								else
								{
									echo "<input type='radio' name='gender' class='radio1' value='Male'><span class='radioname'>Male</span>";
									echo "<input type='radio' class='radio2' name='gender' value='Female' selected><span class='radioname'>Female</span>";
								}
								
								echo "</div>";
							echo "</td>";
					echo "</tr>";
					echo "</table>";	
					echo "</div>";
				echo "<div class='btn'>";
					echo "<input type='submit' name='submit' value='Update'>";
				echo "</div>";
					}
				}
					else
					{
						echo "<table>";
						echo "<tr>";
							echo "<td colspan='2'>";
								echo "<label class='username'>Full Name:-</label>";
								echo "<input type='text' name='user_name' id='name' required>";
							echo "</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>";
								echo "<label>Email Id:-</label>";
								echo "<input type='email' name='user_email' id='email' autocomplete='off' required>";
							echo "</td>";
							echo "<td>";
								echo "<label>Date Of Birth:-</label>";
								echo "<input type='date' name='dob'  required autocomplete='off' >";
							echo "</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>";
								echo "<label>Password:-</label>";
								echo "<input type='password' name='password' id='password' autocomplete='off' required>";
							echo "</td>";
							echo "<td>";
								echo "<label>Gender:-</label>";
								echo "<div class='radio'>";
								echo "<input type='radio' name='gender' required class='radio1' value='Male'><span class='radioname'>Male</span>";
								echo "<input type='radio' class='radio2' required name='gender' value='Female'><span class='radioname'>Female</span>";
								echo "</div>";
							echo "</td>";
					echo "</tr>";
					echo "</table>";	
					echo "</div>";
				echo "<div class='btn'>";
					echo "<input type='submit' name='submit' value='Submit'>";
					echo "<input type='reset' name='reset' value='Reset'>";
				echo "</div>";
					}
				?>
				</form>
		</div>
		<div class="footer">
  			<h3>Copyrights 2019.</h3>
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
            name: {
                required: true,
                whitespace:true,
             	lettersonly:true,
            },
            email:{
            	required:true,
            	email:true,
            	checkemail:true,
            },
            password:{
            	required:true,
            	minlength:5,
            	maxlength:10,
            },
        },
        messages:{
        	name:{
        		required:"Full name is required",
        		lettersonly:"Enter letters only",
        	},
        	email:{
        		required:"Email required",
        		email:"Enter valid email",
        		checkemail:"Enter proper email",

        	},
			password:{
				required:"Password is required",
				minlength:"Enter password between 5-15",
				maxlength:"Enter password between 5-15",
			},
        },
    });

});
</script>
</body>
</html>