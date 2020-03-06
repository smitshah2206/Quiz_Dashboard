<?php
session_start();
include('connection.php');
require('mail/class.phpmailer.php');
require('mail/class.smtp.php');
if (isset($_POST['submit'])) 
{
	if ($_POST['submit'] =="Submit") 
	{
		$otp=rand(100000, 999999);
		function sendOTP($email,$otp)	
		{
		$message="One Time Password" .$otp;
		$mail = new PHPMailer();
		$mail->IsSMTP(); 
   		$mail->SMTPDebug  = 1;                     
    	$mail->SMTPAuth   = true;                  
    	$mail->SMTPSecure = "ssl";                 
    	$mail->Host       = "smtp.gmail.com";      
    	$mail->Port        = '465';             
    	$mail->AddAddress($email);
    	$mail->Username   ="info.b24u@gmail.com";  
    	$mail->Password   ="smit2206";            
    	$mail->SetFrom('info.b24u@gmail.com','Smit Shah');
		$mail -> SetFrom('info.b24u@gmail.com','Smit Shah');
		$mail -> AddAddress($email);
		$mail->Subject    = "This is Testing";
    	$mail->Body    = "OTP" . $otp;
		$result=$mail->Send();
		if(!$result)
		{
			echo "Mailer Error:" . $mail -> ErrorInfo;
		}
		else
		{
			return $result;
		}
		}
	$mail_status=sendOTP($_POST['user_email'],$otp);
	if ($mail_status == 1) 
	{
		$_SESSION['otp']=$otp;
		$_SESSION['user_name']=$_POST['user_name'];
		$_SESSION['user_email']=$_POST['user_email'];
		$_SESSION['dob']=$_POST['dob'];
		$_SESSION['password']=$_POST['password'];
		$_SESSION['gender']=$_POST['gender'];
		echo '<script> alert("OTP send To your Mail");
					window.location= "otp_form.php";</script>';	
	}
	}
else if($_POST['submit'] == "Sucess")
{
	$otp=$_SESSION['otp'];
	$otpno=$_POST['otpno'];
	if(!strcmp($otp,$otpno))
	{
		$name=$_SESSION['user_name'];
		$email=$_SESSION['user_email'];
		$dob=$_SESSION['dob'];
		$password=$_SESSION['password'];
		$gender=$_SESSION['gender'];	
		$date=date("Y-m-d h:i:sa");
		$query="INSERT INTO login (`user_name`,`user_email`,`password`,`dob`,`gender`,`created_date`) VALUES ('".$name."','".$email."','".$password."','".$dob."','".$gender."','".$date."')";
			$result=mysqli_query($conn, $query);
			if ($result)
			{
				echo '<script> alert("Your account is created");
				   window.location="login.php"; </script>';
			}
			else
			{
				echo '<script> alert("Error");
				window.location="otp_form.php";</script>';
			}	
	}
	else
	{
		echo '<script> alert("Invalid OTP");
				window.location="otp_form.php";</script>';	
	}
}
else if ($_POST['submit'] == "Resend") 
{
	function sendOTP($email,$otp)	
	{
		$message="One Time Password" .$otp;
		$mail = new PHPMailer();
		$mail->IsSMTP(); 
   		$mail->SMTPDebug  = 1;                     
    	$mail->SMTPAuth   = true;                  
    	$mail->SMTPSecure = "ssl";                 
    	$mail->Host       = "smtp.gmail.com";      
    	$mail->Port        = '465';             
    	$mail->AddAddress($email);
    	$mail->Username   ="info.b24u@gmail.com";  
    	$mail->Password   ="smit2206";            
    	$mail->SetFrom('info.b24u@gmail.com','Smit Shah');
		$mail -> SetFrom('info.b24u@gmail.com','Smit Shah');
		$mail -> AddAddress($email);
		$mail->Subject    = "This is Testing";
    	$mail->Body    = "OTP" . $otp;
		$result=$mail->Send();
		if(!$result)
		{
			echo "Mailer Error:" . $mail -> ErrorInfo;
		}
		else
		{
			return $result;
		}
	}
	$email=$_SESSION['user_email'];
	$otp=$_SESSION['otp'];
	$mail_status=sendOTP($email,$otp);
	if ($mail_status == 1) 
	{
		echo '<script> alert("OTP Resend Successfulyy To your Email Address");
					window.location="otp_form.php";</script>';	
	}
	else
	{
		echo '<script> alert("Error");
				window.location="otp_form.php";</script>';
	}
}
else if ($_POST['submit'] == "Update") 
{
	$user_email=$_SESSION['user_email'];
	$password=$_POST['password'];
	$queryc = "SELECT * FROM login WHERE user_email='".$user_email."' ";
			$result= mysqli_query($conn , $queryc);
		 	$count= mysqli_num_rows($result);
			if($result)
			{
				if($count == 1)
				{
					if(mysqli_query($conn , $queryc))
					{
						$queryu= "UPDATE login SET password='$password'  WHERE user_email='".$user_email."' ";
						$resultu =mysqli_query($conn,$queryu);
							if ($resultu) 
							{
								echo '<script> alert("Your password is sucessfully changed...!!!");
									window.location="login.php";</script>';	
							}
							else
							{		
								echo '<script> alert("Error");
										window.location="forgot_password.php");</script>';
							}
					}
				}
			}
		}
}
 
?>