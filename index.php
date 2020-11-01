
<html>
<head>
<link rel="stylesheet" href="css/welcome.css"/>
<link rel="stylesheet" href="css/index.css"/>
<?php include('java script/myscript.php');
include('Admin/db.php');
?>
<style>


</style>






</head>

	<body onLoad="startTime()">
		
	<div id="main">
		<div id="txt"></div>
		<DIV>
		<marquee behavior="alternate" CLASS="MARQ">Welcome to Online Bus Time Information System</marquee>
		</DIV>

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


</div>
<div>
<center>
<button type="submit" class="btn" ><a href="home.php">Enter </a></button>
<button type="submit" class="btn" ><a href="Admin/adminlog.php">Admin Log In</a></button>
</center>
</div>
</body>
</html>