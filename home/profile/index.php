<!DOCTYPE html>
<html>
<?php
include('../session.php');?>
<html lang="en">
<head>
	<title>Profile | Tech Community</title>
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
<body >
	<div class="limiter">
		<div class="container-login100" style="background-image:url('images/a.jpg');height: 100%;  background-position: center; background-repeat: no-repeat; background-size: cover;">
			<div class="wrap-login100 p-t-1 p-b-1" >
					
					<?php

							$servername = "localhost";
							$username = "root";
							$password = "Pran!3ravi";
							$dbname = "techcommunity";
							$enter = 1;
						
							// Create connection
							$connection = new mysqli($servername, $username, $password, $dbname);
							// Check connection
							if ($connection->connect_error) {
								die("Connection failed: " . $connection->connect_error);
							} 
							if(isset($_GET['id']))
							$uname= $_GET['id'];
						else
							$uname=$_SESSION['login_user'];
							$sql= "SELECT * from userdetails where rollnumber='$uname';";
							$result = $connection->query($sql);
							$row =$result->fetch_assoc();
							if($enter==1)
							{
								$GLOBALS['var']='';
							}
								$enter=0;
								$temp = $uname;
								$files = glob("/wamp64/www/tech_community/signup/profilepic/$temp.*");
								$flag1=1;
								for ($i=0; $i<count($files); $i++)
								{
									$flag1=0;
									$num = $files[$i];
									$num = str_replace("/wamp64/www","",$num);
								}
								if($flag1==1)
								{
									$num="img-avatar.png";
								}
								$res_str='
								<table> <tr> <td>
					<span class="login100-form-title p-b-20">
						'.$row['fname'].''.$row['lname'].'
					</span> </td><td>
					<span class="login100-form-avatar">
						<img src="'.$num.'"  alt="AVATAR">
					</span></td></tr></table>
					<span style="z-index:-1;">
					<ul class="login-more p-t-100" >
						<li class="m-b-8">
							<span class="txt1">
								 Roll Number : 
							</span>

							<span>
								'.$row['rollnumber'].'	
							</span>
						</li>
						<li class="m-b-8">
							<span class="txt1">
								 E-Mail Id : 
							</span>

							<span>
								'.$row['email'].'	
							</span>
						</li>						
						<li class="m-b-8">
							<span class="txt1">
								 Department : 
							</span>

							<span>
								'.$row['department'].'	
							</span>
						</li>						
						<li class="m-b-8">
							<span class="txt1">
								Club Name : 
							</span>

							<span>
								'.$row['club'].'
							</span>
						</li>
						<li class="m-b-8">
							<span class="txt1">
								Phone Number : 
							</span>

							<span>
								'.$row['phoneno'].'
							</span>
						</li>
					</ul>
					</span>';								
							echo $res_str;	
							mysqli_close($connection);
					?>
					
					<ul>
					<li>
					<?php
					if(isset($_SESSION['login_user'])&& $_SESSION['login_user']==$uname){
						if($_SESSION['orgcheck']==true)
							echo '<a href="/tech_community/orgpage/participant.php" class="m-b-8 txt2">Back</a>';
						else
					echo '<a href="../TChome.php" class="m-b-8 txt2">Back</a>';}
					else
						echo '<a href="/tech_community/admin/viewreq.php" class="m-b-8 txt2">Back</a>'
					?>
						</li>
					</ul>
			</div>
						
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
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

</body>
</html>
