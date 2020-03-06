<?php
	include('connection.php');
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];
		$query="INSERT INTO feedback(`name`,`email`,`subject`,`message`) VALUES ('".$name."','".$email."','".$subject."','".$message."')";
		$result=mysqli_query($conn,$query);
		if($result)
		{
			echo "<script> alert('Thank you....!!! Your valuable feedback is stored...');
			window.location='contactus.php'; </script>";
		}
		else
		{
			echo "<script> alert('Error');
			window.location = 'contactus.php'; </script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="CSS\stylecontactus.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
				<label>Contact US</label>
			</div>
			<div class="sharecircle" onclick="share()">
			<i class="fa fa-share-alt" aria-hidden="true"></i>
		</div>
		<div class="sharecircle facebook" id="f">
			<i class="fa fa-facebook" aria-hidden="true"></i>
		</div>
		<div class="sharecircle instagram" id="i">
			<i class="fa fa-instagram" aria-hidden="true"></i>
		</div>
		<div class="sharecircle youtube" id="y">
			<i class="fa fa-youtube-play" aria-hidden="true"></i>
		</div>
		<div class="sharecircle gmail" id="g">
			<i class="fa fa-envelope" aria-hidden="true"></i>
		</div>
		<div class="icon1">
			<div class="box">
			<i class="fa fa-map-marker fa-3x" aria-hidden="true"> </i>
			</div>
			<label>Location<span class="details"><br>19 Shyam Appartment<br>Near Vasna Bus-Stop<br>Vasna,Ahmedabad-380007</span></label>
		</div>
		<div class="icon2">
			<div class="box">
				<i class="fa fa-phone fa-3x" aria-hidden="true"></i>
			</div>	
			<label>Call Us (24*7) <span class="details"><br>(+91) 8849364239<br>(+91) 9409324362</span></label>
		</div>
		<div class="icon3">
			<span class="box">
			<i class="fa  fa-envelope-o fa-2x" aria-hidden="true"> </i>
			</span>
			<label>MAIL US<span class="details"><br>smitshah22050602@gmail.com</span></label>
		</div>
		<div class="contactbox">
		<h3> Get In Touch </h3>
		<form id="myform" action="contactus.php" method="post">
			<span><i class="fa fa-user" aria-hidden="true"></i></span>
			<input type="text" name="name" placeholder="Name"><br>
			<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
			<input type="text" name="email" placeholder="Email"><br>
			<span><i class="fa fa-pencil" aria-hidden="true"></i></span>
			<input type="number" name="subject" placeholder="Subject"><br>
			<span><i class="fa fa-comments" aria-hidden="true"></i></span>
			<input type="textarea" name="message" placeholder="Message">
			<div class="btn">
				<input type="submit" name="submit" value="Send">
			</div>
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
		</div>	</body>
	<script>
		function myMap() 
		{
			var mapProp={
  				center:new google.maps.LatLng( 23.003992, 72.546074),
  				zoom:17,
  			};
			var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
			var marker = new google.maps.Marker({position: myCenter});
			marker.setMap(map);
		}
		function share()
	{
		var a =document.getElementById("f");
		var b=document.getElementById("g");
		var c=document.getElementById("i");
		var d=document.getElementById("y");
		if (a.style.display === "none")
		{
			a.style.display="block";
			b.style.display="block";
			c.style.display="block";
			d.style.display="block";
		}
		else
		{
			a.style.display="none";
			b.style.display="none";
			c.style.display="none";
			d.style.display="none";
		}
	}
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>
	<script>
	jQuery.validator.addMethod("checkemail", function(value, element) {
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
            	checkemail:true,
            },
            contactnumber:{
            	required:true,
            	minlength:10,
            	maxlength:10,
            	digits:true,
            },
            message: {
				required: true,
        	},   
        },
        messages:{
        	name:{
        		required:"Name is required",
        		lettersonly:"Enter Letters Only",
        	},
        	email:{
        		required:"Email is required",
        		checkemail:"Enter Proper Email",

        	},
        	contactnumber:{
				required:"Phone Number is required",
				minlength:"Enter Contect-Number 10digits",
				maxlength:"Enter Contect-Number 10digits",
				digits:"Enter 10 digits",
			},
        	message: {

        		required: "Message is required",
        	},
        },
			
        });
    });
</script>
</html>