<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
	<title>Login | Tech Community</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>	
<script>
function validateForm() {
    var x = document.forms["myForm"]["roll_number"].value;
	var year =x.slice(0,1);
	var roll=x.slice(3,5);
	var letters=/^[1-9]+$/;
	if(x.length==6){
	if(year.value.match(letters))
	{
		if(year.value<18 && year.value>11)
		if(roll.value.match(letters))	
		return true;
	}
	}
	
	alert('Incorrect Input');
	return false;
}
	
	
	
	
</script>
	




<body>
	<p id="para"></p>
	<div class="limiter" >
		<div class="container-login100" >
			<div class="wrap-login100 p-t-20 p-b-20" >
				<form class="login100-form" method="post" name="myForm" action="temp.php" onsubmit="return validateForm();">
					<span class="login100-form-title p-b-50">
						Login to Tech Community
					</span>
					<!--<span class="login100-form-avatar">
						<img src="sathya.jpg" alt="AVATAR">
					</span>-->

					<div class="wrap-input100 validate-input m-t-30 m-b-20" data-validate = "Enter username">
						<input type="text" class="input100" size=25 name="roll_number">
						<span class="focus-input100" data-placeholder="Roll Number"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input type="password" class="input100" size=25 name="password" >
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit"  value="Login" class="login100-form-btn" onclick="return validateForm();">
					
					</div>
					<br>


					<ul class="login-more p-t-50">
					<li class="m-b-8">
							<span class="txt1">
								Are you an Organizer??
							</span>

							<a href="orgin.php" class="txt2">
								Login as Organizer
							</a>
						</li>
					

						<li>
							<span class="txt1">
								Don’t have an account?
							</span>

							<a href="/tech_community/signup/signup.php" class="txt2">
								Sign up
							</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
	


	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<?php
if(isset($_SESSION['successmsg'])&&$_SESSION['successmsg']!=''){
	echo '<script type="text/javascript">alert("'.$_SESSION['successmsg'].'")</script>';
unset($_SESSION['successmsg']);}
?>
</body>
</html>