<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up | Tech Community</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	body{
		zoom: 80%;
	}
	</style>
<!--===============================================================================================	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-03.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method='post' action="signup_tc.php"  enctype='multipart/form-data'>
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input" data-validate="First Name is required">
						<span class="label-input100">First Name</span>
						<input class="input100" type="text" name="first_name" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Last Name is required">
						<span class="label-input100">Last Name</span>
						<input class="input100" type="text" name="last_name" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>
	
					<div class="wrap-input100 validate-input" data-validate="Roll Number is required">
						<span class="label-input100">Roll Number</span>
						<input class="input100" type="text" name="roll_number" placeholder="Roll Number...">
						<span class="focus-input100"></span>
					</div>	
					

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>

					

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

				<!--	<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Repeat Password</span>
						<input class="input100" type="password" name="repeat_password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>-->
					
					<div class="wrap-input100 validate-input" >
						<label class="label-input100">upload image</label>				
						<input type="file" class="input100" name="fileToUpload" id="fileToUpload"/>
						
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Phone Number is required">
						<span class="label-input100">Phone Number</span>
						<input class="input100" type="text" name="phone_number" placeholder="Phone Number...">
						<span class="focus-input100"></span>
					</div>
					
			
					
					<div class="wrap-input100 validate-input" data-validate = "Club is required">
						<span class="label-input100">Club Name</span>
						<select class="input100" type="text" name="club_name">
						   <option>--Select--</option>
						   <option value="cap & nature">CAP & Nature</option>
						   <option value="fine arts">Fine arts</option>
						   <option value="tamil mandram">Tamil Mandram</option>
						   <option value="the bridge">The Bridge</option>
						   <option value="englist literary society">Englist Literary Society</option>
						   <option value="tech music">Tech Music</option>
						   <option value="dramatics">Dramatics</option>
						   <option value="martial arts">Martial Arts</option>
						   <option value="rotaract">Rotaract</option>
						   <option value="entrepreneurs club">Entrepreneurs Club</option>
						   <option value="astronomy">Astronomy</option>
						   <option value="pathshala">Pathshala</option>
						   <option value="global leaders forum">Global Leaders Forum</option>
						   <option value="higher education forum">Higher education forum</option>
						   <option value="animal welfare">Animal Welfare</option>	
						   <option value="women development cell">Women Development Cell</option>
						   <option value="association of senior quizzers">Association Of Senior Quizzers</option>
						   <option value="student research council">Student research council</option>
						   <option value="industry interaction forum">Industry Interaction Forum</option>
						   <option value="radio hub">Radio Hub</option>
						   <option value="book readers club">Book Readers Club</option>		   
						</select>	
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Department is required">
						<span class="label-input100">Department Name</span>
						<select class="input100" type="text" name="department_name">
						   <option>--Select--</option>
						   <option value="apparel and fasion design">Apparel & fashion Design</option>
						   <option value="applied mathematics and computational sciences">Applied Mathematics & Computational Sciences</option>
						   <option value="applied science">Applied Science</option>
						   <option value="automobile engineering">Automobile Engineering</option>
						   <option value="bio technology">Bio-Technology</option>
						   <option value="biomedical engineering">Biomedical Engineering</option>
						   <option value="chemistry">Chemistry</option>
						   <option value="civil engineering">Civil Engineering</option>
						   <option value="computer sciences">Computer Applications</option>
						   <option value="computer science and engineering">Computer Science & Engineering</option>
						   <option value="electrical and electronics engineering">Electrical & Electronics Engineering</option>
						   <option value="electronics and commmunication engineering">Electronics & Communication Engineering</option>
						   <option value="english">English</option>
						   <option value="fashion technology">Fashion Technology</option>
						   <option value="humanities">Humanities</option>
						   <option value="information technology">Information Technology</option>
						   <option value="instrumentation and control system engineering">Instrumentation & Control System Engineering</option>
						   <option value="mathematics">Mathematics</option>
						   <option value="mechanical engineering">Machanical Engineering</option>
						   <option value="metallurgical engineering">Metallurgical Engineering</option>
						   <option value="physics">Physics</option>
						   <option value="production engineering">Production Engineering</option>
						   <option value="robotics and automation engineering">Robotics & Automation Engineering</option>
						   <option value="textile technology">Textile Technology</option>
						   <option value="management sciences">Management Sciences</option>
						   <option value="physiccal education">Physical Education</option>
						</select>
						<span class="focus-input100"></span>
					</div>
					
					
						<div class="wrap-input100 validate-input" >
						<span class="label-input100">Year</span>
						<select class="input100" type="text" name="year">
							<option>--Select--</option>
							<option value=1>1</option>
							<option value=2>2</option>
							<option value=3>3</option>
							<option value=4>4</option>
							<option value=5>5</option>
						</select>
						
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Department is required">
						<span class="label-input100">Interest</span>
						
						<span class="label-input100" style="float:left;padding:30px;"> 
			<input type="checkbox" name="etag[]" id="etag" value="quiz"> Quiz<br>
			<input type="checkbox" name="etag[]" id="etag" value="tamil"> Tamil<br>
			<input type="checkbox" name="etag[]" id="etag" value="english"> English<br>
			<input type="checkbox" name="etag[]" id="etag"  value="code"> Coding<br>
			<input type="checkbox" name="etag[]" id="etag" value="fun"> Fun<br>
			<input type="checkbox" name="etag[]" id="etag" value="art"> Art<br>
			<input type="checkbox" name="etag[]" id="etag" value="music"> Music<br>
			<input type="checkbox" name="etag[]" id="etag" value="dance"> Dance<br>
			<input type="checkbox" name="etag[]" id="etag" value="aptitude"> Aptitude<br>
			<input type="checkbox" name="etag[]" id="etag" value="technical">Technical <br>
			
		</span> 
		
		

		
	
		
		
						
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
							
						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<input class="login100-form-btn" name="submit" type="submit" value="sign up"/>
						</div>

						<a href="/tech_community/login/login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
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

</body>
</html>