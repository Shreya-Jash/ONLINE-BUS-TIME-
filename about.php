<html>


<head>
<link rel="stylesheet" href="css/about.css"/>
<?php include('java script/myscript.php');?>

<style>

</style>
</head>





</head>

	<body onLoad="startTime()">
		
	<div id="main">
		<div id="txt"></div>
		<div id="menu">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="track.php">Track</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="CONTACT.PHP">Contact</a></li>
				<li><a href="feedback.php">FeedBack</a></li>
			</ul><br><br><brs><br>
		</div>
		<center>
<div class="w3-content w3-display-container">
 <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
   
    <img src="images/bazar.jpg" style="width:50%" height="300px">
    <div class="text">Bus Stand</div>
  </div>

  <div class="mySlides fade">
    
    <img src="images/bus.jpg" style="width:50%" height="300px">
    <div class="text">Bazar</div>
  </div>

  <div class="mySlides fade">
   
    <img src="images/img.jpg" style="width:50%" height="300px">
    <div class="text">Developer</div>
  </div>

  <!-- Next and previous buttons -->
  
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onClick="currentSlide(1)"></span>
  <span class="dot" onClick="currentSlide(2)"></span>
  <span class="dot" onClick="currentSlide(3)"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

</script>
		<div>
			<table width="50%" align="center">
			<tr>
			<td align="center" ><font color="BROWN" size="6"><u>Bus Time Information System</u></font></td>
			</tr>
			<tr>
			
			<td  width="50%">
			
			<font color="#FFFFFF"><p align=justify>It is really a matter of joy to make an website related to "Bus Time Information System which provides the proper information and guide to passengers.Thank You.</font></i></p>
</td>
			
			</td>
			</tr>
			
			</table>
		</div>
		<div class="footer">


				<p>Author: Bibhas Biswas<br>
  			&copy;All Right Reversed 2020</p>
				
  			
			</div>

		</div>
</html>