<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$servername = "localhost";
		$username = "root";
		$password = "Pran!3ravi";
		$dbname = "techcommunity";
	
		// Create connection
		$connection = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($connection->connect_error) {
			die("Connection failed: " . $connection->connect_error);
		} 
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User

$sql = "SELECT rollnumber from userdetails where rollnumber='$user_check'";
$result = $connection->query($sql);
$row = $result->fetch_assoc();
$login_session =$row['rollnumber'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: /tech_community/log_in/initialTC.php'); // Redirecting To Home Page
}
?>