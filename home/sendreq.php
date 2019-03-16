<?php 
//sendreq.php
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
		$uname=$_SESSION['login_user'];
		$sql="INSERT INTO requestorg values('$uname')";
		$result=$conn->query($sql) or die ($conn->error);
		header('Location:/tech_community/home/TChome.php');





?>