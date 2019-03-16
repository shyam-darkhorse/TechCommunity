<?php
		$servername = "localhost";
		$username = "root";
		$password = "Pran!3ravi";
		$dbname = "techcommunity";
		session_start();
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
			$uname=$_SESSION['login_user'];
			$que=$_POST['query'];
			if(!isset($_SESSION['eventid']))
			{
				echo 'error';
				
			}
			else
				$eventid=$_SESSION['eventid'];
			$sql="Insert into forumquery (eventid,rollnumber,querydesc,time) values ('$eventid','$uname','$que',NOW())";
			$res=$conn->query($sql) or die($conn->error);
			$conn->close();
			header('location:frontforum.php');
			
?>