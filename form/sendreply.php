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
			$msg= $_POST['subject'];
			$qid=$_POST['qid'];
			$eventid=$_SESSION['eventid'];
		$sql="INSERT INTO reply(queryid,rollnumber,reply) values('$qid','$uname','$msg')";
		$result= $conn->query($sql) or die ($conn->error);
		
		
		$_SESSION['message']='Messages sent successfully...';
		header('location:frontforum.php');

?>