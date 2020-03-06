<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="CSS\stylequiz.css">
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
				<label>Quiz Session</label>	
			</div>			
		<div class="box">
				<form action="score.php" method="post">
					<?php
						include('connection.php');
						$query="SELECT * FROM quiz WHERE id=1 ";
						$result=mysqli_query($conn,$query);
						$countp = mysqli_num_rows($result);
						if ($result)
						{
							if($countp == 1)
							{
								while($row = mysqli_fetch_array($result))
								{
									echo "<span class='mySlides' >";
									echo "<h3>Q1 &nbsp; ".$row['question']. "</h3>";
									echo "<div class='a'>";
											echo "<input type='radio' name='a' value='1'><label class='data'>".$row['optiona']. "</label>";
										echo "</div>";
										echo "<div class='a'>";
											echo "<input type='radio' name='a' value='2'><label class='data'>".$row['optionb']. "</label>";
										echo "</div>";
										echo "<div class='a'>";
											echo "<input type='radio' name='a' value='3'><label class='data'>".$row['optionc']. "</	label>";
										echo "</div>";
										echo "<div class='a'>";
											echo "<input type='radio' name='a' value='4'><label class='data'>".$row['optiond']. "</label>";
										echo "</div>";	
									echo "</span>";

								}
							}
						}
						$query="SELECT * FROM quiz WHERE id=2 ";
						$result=mysqli_query($conn,$query);
						$countp = mysqli_num_rows($result);
						if ($result)
						{
							if($countp == 1)
							{
								while($row = mysqli_fetch_array($result))
								{
									echo "<span class='mySlides' >";
									echo "<h3>Q2 &nbsp; ".$row['question']. "</h3>";
									echo "<div class='a'>";
											echo "<input type='radio' name='b' value='1'><label class='data'>".$row['optiona']. "</label>";
										echo "</div>";
										echo "<div class='a'>";
											echo "<input type='radio' name='b' value='2'><label class='data'>".$row['optionb']. "</label>";
										echo "</div>";
										echo "<div class='a'>";
											echo "<input type='radio' name='b' value='3'><label class='data'>".$row['optionc']. "</	label>";
										echo "</div>";
										echo "<div class='a'>";
											echo "<input type='radio' name='b' value='4'><label class='data'>".$row['optiond']. "</label>";
										echo "</div>";	
									echo "</span>";
								}
							}		 
						}
						$query="SELECT * FROM quiz WHERE id=3 ";
						$result=mysqli_query($conn,$query);
						$countp = mysqli_num_rows($result);
						if ($result)
						{
							if($countp == 1)
							{
								while($row = mysqli_fetch_array($result))
								{
									echo "<span class='mySlides' >";
									echo "<h3>Q3 &nbsp; ".$row['question']. "</h3>";
									echo "<div class='a'>";
											echo "<input type='radio' name='c' value='1'><label class='data'>".$row['optiona']. "</label>";
										echo "</div>";
										echo "<div class='a'>";
											echo "<input type='radio' name='c' value='2'><label class='data'>".$row['optionb']. "</label>";
										echo "</div>";
										echo "<div class='a'>";
											echo "<input type='radio' name='c' value='3'><label class='data'>".$row['optionc']. "</	label>";
										echo "</div>";
										echo "<div class='a'>";
											echo "<input type='radio' name='c' value='4'><label class='data'>".$row['optiond']. "</label>";
										echo "</div>";	
									echo "</span>";
								}
							}
						}
						$query="SELECT * FROM quiz WHERE id=4 ";
						$result=mysqli_query($conn,$query);
						$countp = mysqli_num_rows($result);
						if ($result)
						{
							if($countp == 1)
							{
								while($row = mysqli_fetch_array($result))
								{
									echo "<span class='mySlides' >";
									echo "<h3>Q4 &nbsp; ".$row['question']. "</h3>";
									echo "<div class='a'>";
											echo "<input type='radio' name='d' value='1'><label class='data'>".$row['optiona']. "</label>";
										echo "</div>";
										echo "<div class='a'>";
											echo "<input type='radio' name='d' value='2'><label class='data'>".$row['optionb']. "</label>";
										echo "</div>";
										echo "<div class='a'>";
											echo "<input type='radio' name='d' value='3'><label class='data'>".$row['optionc']. "</	label>";
										echo "</div>";
										echo "<div class='a'>";
											echo "<input type='radio' name='d' value='4'><label class='data'>".$row['optiond']. "</label>";
										echo "</div>";	
									echo "</span>";
								}
							}
						}			
						$query="SELECT * FROM quiz WHERE id=5 ";
						$result=mysqli_query($conn,$query);
						$countp = mysqli_num_rows($result);
						if ($result)
						{
							if($countp ==1)
							{
								while($row = mysqli_fetch_array($result))
								{
									echo "<span class='mySlides' >";
									echo "<h3>Q5 &nbsp; ".$row['question']. "</h3>";
									echo "<div class='a'>";
											echo "<input type='radio' name='e' value='1'><label class='data'>".$row['optiona']. "</label>";
										echo "</div>";
										echo "<div class='a'>";
											echo "<input type='radio' name='e' value='2'><label class='data'>".$row['optionb']. "</label>";
										echo "</div>";
										echo "<div class='a'>";
											echo "<input type='radio' name='e' value='3'><label class='data'>".$row['optionc']. "</label>";
										echo "</div>";
										echo "<div class='a'>";
											echo "<input type='radio' name='e' value='4'><label class='data'>".$row['optiond']. "</label>";
										echo "</div>";	
									echo "</span>";
								}
							}
						}
		?>
					<div class="btn" >
						<input type="button" name="next" id="i3" value="next" onclick="plusSlides(1)">
						<input type="submit" name="submit" id="i4" value="submit">
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
		</div>
</body>
<script type="text/javascript">
	var slideIndex = 1;
	showSlides(slideIndex);
	function plusSlides(n)
	{
  		showSlides(slideIndex += n);
	}
	function showSlides(n)
	{
  		var i;
  		var slides = document.getElementsByClassName("mySlides");
  		var b=document.getElementById('i3');    
  		var c=document.getElementById('i4');
  	   	if (slideIndex < 5) 
  		{
  			c.style.display="none";
  		}

  		if (slideIndex == 5) 
  		{
  			b.style.display="none";
  			c.style.display="inline-block";
  		}
  		if (n > slides.length) 
  		{
  			slideIndex = 1
  		}
  		if (n < 1) 
  		{
  			slideIndex = slides.length
  		}
  		for (i = 0; i < slides.length; i++)
  		{
      		slides[i].style.display = "none";  
  		}
  		slides[slideIndex-1].style.display = "block";
	}
</script>
</html>