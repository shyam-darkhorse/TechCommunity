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
			$toid= $_POST['roll'];
			$msg= $_POST['subject'];
		$sql="INSERT INTO message(fromid,toid,message,senttime,readmsg) values('$uname','$toid','$msg',NOW(),0)";
		$result= $conn->query($sql) or die ($conn->error);
		header('location:allmessage.php');

?>