<?php
include('session.php');
include ('entrygenerate.php');
?>

<!DOCTYPE html>


<html>
<title>Home | Tech Community</title>

<style>
			.accordion {
				background-color: #eee;
				color: #444;
				cursor: pointer;
				padding: 30px;
				width: 100%;
				border: none;
				text-align: left;
				outline: none;
				font-size: 15px;
				transition: 0.4s;
			}
			select {
    background-color: #141414;
    color: white;
}


.zoom:hover {
    transform: scale(1.1); /* (110% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>

<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
max-width:100%
  position: relative;
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
</style>
  <body>
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><img src="logo.png"></h1>
  <!--  <h6>The Future <span class="w3-tag">NOW</span></h6>-->
  </header>
  
  
  
<header class="w3-display-container w3-wide" id="home">
<div class="slideshow-container">

<div class="mySlides fade">

  <img src="ss1.png"  class="w3-image" alt="PSG Tech" width="100%" height="100%">
    <div class="w3-display-left w3-padding-large">
      <h1 class="w3-text-white">Welcome to</h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>TECH COMMUNITY</b></h1>
 </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="ss2.jpg" class="w3-image" alt="PSG Tech" width="100%" height="100%">
      <div class="w3-display-left w3-padding-large">
      <h1 class="w3-text-white">Welcome to</h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>TECH COMMUNITY</b></h1>
 </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="ss3.jpg" class="w3-image" alt="PSG Tech" width="100%" height="100%">
  <div class="w3-display-left w3-padding-large">
      <h1 class="w3-text-white">Welcome to</h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>TECH COMMUNITY</b></h1>
 </div>

</div>

</div>
<br>

<div style="text-align:center;display:none;">
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
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

  </header>


  
  <div class="w3-container">


  <div class="w3-bar w3-black">
    <button class="w3-bar-item w3-button tablink w3-red" onclick="openCity(event,'Home')">Home</button>
    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'About_us')">About us</button>
    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Help')">Help</button>
	<a href="logout" class="w3-bar-item w3-button w3-black w3-right">logout</a>
  </div>
  
  <div id="Home" class=" w3-border city">
    <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12"> <?php echo $GLOBALS['var'];?>
    
      
	  
	  
<script>
// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").click();
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

function likeFunction(x,id) {
    x.style.fontWeight = "bold";
	if(confirm('Are you sure you want to register??'))
	{
		document.cookie="eventidcookie = " + id ;
		
    x.innerHTML = "Registered";
}
</script>
</div>



<?php echo $GLOBALS['profile'].$GLOBALS['message'].$GLOBALS['notify'].$GLOBALS['forum'];?>



  </div>
  </div>

  <div id="About_us" class="w3-container w3-border city" style="display:none">
    <h2>Tech Community</h2>
    <p>Tech Community is a portal which encompasses details of all the events taking place in and around the campus. In a college like PSG Tech where there is always something happening, most of the students are not always aware of them. Tech Community resolves this problem. It notifies the user (Student) of the events that suits his interests or related by department or club. The users can discuss with the organizers of the event in case of any clarifications in person or in the forum for general discussions. </p> 
  </div>

  <div id="Help" class="w3-container w3-border city" style="display:none">
    <h2>Help</h2>
	<h6>Your Feedback is valuable</h6>
	
<div class="container">
  <form  method="post" action="sendfeedback.php">



    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px;width:80%"></textarea>

    <input type="submit" class= "w3-btn w3-black"value="Send">
  </form>
  </div>
</div>

<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>

  
  
  <?php
  if(isset($_SESSION['register']))
  {
	  if($_SESSION['register']!=''){
		 if($_SESSION['register']=='success')
		  echo '<script type="text/javascript">alert("Registered successfully")</script>';
	  else echo '<script type="text/javascript">alert("'.$_SESSION['register'].'")</script>';
		$_SESSION['register']='';
	  }
 }
  ?>
  
  

</body>
</html>
