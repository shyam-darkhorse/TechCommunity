<!doctype html5>
<?php
require('dispforum.php');
?>
<html>
	<head>
		<title>
			Forum | Tech Community
		</title>
		<link rel="stylesheet" href="forum_style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
		</head>
	
	<body >

		<div class="top-heading" style="font-family: 'Merienda';">
			<h2> Tech community </h2>
		</div>
		<div class="header" id="scroll-function">
			<h2>Discussion Forum</h2>
		</div>
		<div class="forum" >
		<?php
		echo $GLOBALS['query'];
		
		?>
<br/>
<br/>
<br/>
			<script>
				var acc = document.getElementsByClassName("accordion");
				var i;

				for (i = 0; i < acc.length; i++) {
					acc[i].addEventListener("click", function() {
						this.classList.toggle("active");
						var panel = this.nextElementSibling;
						if (panel.style.display === "block") {
							panel.style.display = "none";
						} else {
							panel.style.display = "block";
						}
					});
				}
			</script>
			<script>
				window.onscroll = function() {myFunction()};

				var header = document.getElementById("scroll-function");
				var sticky = header.offsetTop;

				function myFunction() {
				  if (window.pageYOffset >= sticky) {
					/* give the like count increment */
					header.classList.add("sticky");
				  } else {
					header.classList.remove("sticky");
				  }
				}
			function like(x) {
				
				if(x.classList.toggle("fa-thumbs-down"))  {
				document.getElementById("like-message").innerHTML = "liked";
				}
				else{
				document.getElementById("like-message").innerHTML = "like";
				}
				
			}
			</script>
			

		</div>
		<div class="footer">
		<form method="post" action="submitquery.php">
		  <input class="query" type="text" placeholder="Ask something here..." name="query"/>
		  <input type="submit" placeholder="Submit" class="button"/>
		  <input type="button" class="button"value="BACK" onclick="window.location.href='/tech_community/home/TChome.php'"">
		  </form>
		</div> 
		<br><br><br><br><br><br><br><br><br>

		
	</body>
</html>