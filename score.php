<?php
	include('connection.php');
	session_start();
	if (isset($_POST['submit'])) 
	{
		if ($_POST['submit']="Submit")
		{
			$a=$_POST['a'];
			$b=$_POST['b'];
			$c=$_POST['c'];
			$d=$_POST['d'];
			$e=$_POST['e'];
			$count=0;
			echo $a.$b.$c.$d.$e;
			$sql="SELECT answer FROM quiz WHERE id=1";
			$result=mysqli_query($conn,$sql);
			$countp = mysqli_num_rows($result);
			if ($result)
			{
				if($countp == 1)
				{
					while($row = mysqli_fetch_array($result))
					{	
						$f = $row['answer'];
						if($a == $f)
						{
							$count++;
						}
					}
				}
			}
			$sql="SELECT answer FROM quiz WHERE id=2";
			$result=mysqli_query($conn,$sql);
			$countp = mysqli_num_rows($result);
			if ($result)
			{
				if($countp == 1)
				{
					while($row = mysqli_fetch_array($result))
					{	
						$f = $row['answer'];
						if($b == $f)
						{
							$count++;
						}
					}
				}
			}
			$sql="SELECT answer FROM quiz WHERE id=3";
			$result=mysqli_query($conn,$sql);
			$countp = mysqli_num_rows($result);
			if ($result)
			{
				if($countp == 1)
				{
					while($row = mysqli_fetch_array($result))
					{	
						$f = $row['answer'];
						if($c == $f)
						{
							$count++;
						}
					}
				}
			}			
			$sql="SELECT answer FROM quiz WHERE id=4";
			$result=mysqli_query($conn,$sql);
			$countp = mysqli_num_rows($result);
			if ($result)
			{
				if($countp == 1)
				{
					while($row = mysqli_fetch_array($result))
					{	
						$f = $row['answer'];
						if($d == $f)
						{
							$count++;
						}
					}
				}
			}			
			$sql="SELECT answer FROM quiz WHERE id=5";
			$result=mysqli_query($conn,$sql);
			$countp = mysqli_num_rows($result);
			if ($result)
			{
				if($countp == 1)
				{
					while($row = mysqli_fetch_array($result))
					{	
						$f = $row['answer'];
						if($e == $f)
						{
							$count++;
						}
					}
				}
			}
			$count=$count*20;
			$sql="INSERT INTO login (`answer`) VALUES ('".$count."')";
			$result=mysqli_query($conn,$sql);
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="CSS\stylescore.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="header fix">
			<form>
				<div class="navbtn">
					<a href="login.php"><input type="button" name="submit" value="Sign Out"></a>
				</div>
			</form>
		</div>
		<div class="heading fix">
				<label>Score Card</label>	
			</div>			
		<div class="box">
			<h3>Score Card</h3>
			<label><?php  echo $count; ?>%</label>
   			<h5>Thank You..!!</h5>
   		</div>
<div class="footer">
  			<h3>Copyrights 2019.</h3>
  			<h3>Powered By  <a href="https://www.linkedin.com/in/smit-shah-60823514a"> Smit Shah </a></h3>
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