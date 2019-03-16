<?php

		session_start();
		$servername = "localhost";
		$username = "root";
		$password = "Pran!3ravi";
		$dbname = "techcommunity";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		$roll = $_POST["roll_number"];
		$password = $_POST["password"];
		$orgid= $_POST['org_id'];

		$sql = "SELECT u.fname, u.lname,u.password,o.orgid FROM userdetails u join organizer o  on o.rollnumber=u.rollnumber WHERE u.rollnumber = '$roll' ";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			$row = $result->fetch_assoc();
			if ( $row["password"] === $password ) {
				$message = "login successful";
				$_SESSION['login_user']=$roll;
				$_SESSION['orgcheck']=true;
				$_SESSION['orgid']=$orgid;
				header("location:/tech_community/orgpage/orghome.php");
			}
			else {
				echo "password incorrect";
			}
		}
		else echo "incorrect user credentials"; 			
		
		$conn->close();
	?>
