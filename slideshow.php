<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;
    background: black;
}
.mySlides {display: none;}
img {vertical-align: middle;}

h2 {
    font-family: Verdana, sans-serif;
    font-size: 60px;
    color: red;
    text-align: center;
}
p {
    font-family: Verdana, sans-serif;
    font-size: 40px;
    color: red;
    text-align: center;
}
footer {
    font-family: Verdana, sans-serif;
    font-size: 50px;
    color: red;
    text-align: center;
}


/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: cover;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
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

  .button1,.button2,.button3
{
    background-color:purple;
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 12px;
  }
}
</style>
</head>
<body>

<button class="button1" onclick="window.location.href='Signup.php'">Sign up</button>
<button class="button2" onclick="window.location.href='login.php'">Log in</button>
<button class="button3" onclick="window.location.href='login.php'">Log out</button>



<h2>GETFLIX</h2>
<p>Watch Unlimited Movies and Web-series</p>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="sooryavanshi.jpg" style="width:1000px; height:700px">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="spider-man.jpg" style="width:1000px; height:700px">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="boss-baby.jpg" style="width:1000px; height:700px">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="money-haist.jpg" style="width:1000px; height:700px">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="the-family-man-season-2-.jpg" style="width:1000px; height:700px">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
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
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<footer>
    Project done by Mitsu, Rajab & Poorani
</footer>
</body>
</html> 
