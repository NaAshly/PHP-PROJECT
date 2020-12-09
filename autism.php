<!DOCTYPE html>
<html lang="en">
<head>
  <title>LET"S TALK AUTISM</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Kumar+One" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	 body {
	  font: 20px Montserrat, sans-serif;
	  line-height: 1.8;
	  color: #f5f6f7;
	 }
	 p {font-size: 16px;}
	 .margin {margin-bottom: 45px;}
	 .bg-1 { 
	  background-color: #1abc9c;

	  color: #ffffff;
	 }
	
	.slideshow-container {
	  max-width: 1000px;
	  position: relative;
	  margin: auto;
	}

	.text {
	  color: #white;
	  font-size: 15px;
	  padding: 8px 12px;
	  position: absolute;
	  bottom: 8px;
	  width: 100%;
	  text-align: center;
	}

	.numbertext {
	  color: #f2f2f2;
	  font-size: 12px;
	  padding: 8px 12px;
	  position: absolute;
	  top: 0;
	}

	.dot {
	  height: 13px;
	  width: 13px;
	  margin: 0 2px;
	  background-color: #bbb;
	  border-radius: 50%;
	  display: inline-block;
	  transition: background-color 0.6s ease;
	}

	.fade {
	  -webkit-animation-name: fade;
	  -webkit-animation-duration:5.5s;
	  animation-name: fade;
	  animation-duration: 5.5s;
	}

	@-webkit-keyframes fade {
	  from {opacity: .4} 
	  to {opacity: 1}
	}

	@keyframes fade {
	  from {opacity: .4} 
	  to {opacity: 1}
	}

	/* On smaller screens, decrease text size */
	@media only screen and (max-width: 300px) {
	  .text {font-size: 11px}
	}
</style>
<body>
<nav navbar navbar-light bg-faded">
  <div class="container-fluid">
    <div class="navbar-header">
	
      <a class="navbar-brand" href="autism.php">AUTISM DISCUSSION FORUM</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
    </ul>
	<ul class="nav navbar-nav">
      <li class="active"><a href="create_topic.php">Create a topic</a></li>
    </ul>
	<ul class="nav navbar-nav">
      <li class="active"><a href="create_cat.php">Create a category</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div class="container-fluid bg-1 text-center">
	
	<div class="slideshow-container">

<div class="mySlides fade">
  <h3>WHAT IS AUTISM?</h3>
  <div class="numbertext">1 / 3</div>
  <img src="autism-heart-59196.png" style="width:44%">
</div>
	
<div class="mySlides fade">
  <h3>WHAT SHOULD WE DO?</h3>
  <div class="numbertext">2 / 3</div>
  <img src="gift.png" style="width:84.5%">
</div>

<div class="mySlides fade">
  <h3>WE SHOULD RAISE...</h3>
  <div class="numbertext">3 / 3</div>
  <img src="Awareness.png" style="width:51%">
</div>

<div class="mySlides fade">
  <h3>AND A HEART FULL OF LOVE FOR...</h3>
  <div class="numbertext">4 / 3</div>
  <img src="autisticChild.jpg" style="width:64%">
</div>

<h3>LET'S TALK!!!!</h3>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
    
  </div>
</body>
</html>