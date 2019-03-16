<?php 
		session_start();
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
		$uname= $_SESSION['login_user'];
		$IDvar= $_POST["eventID"];
		$sql="INSERT INTO eventparticipated values($IDvar,'$uname')";
		if($connection->query($sql)===TRUE){
			$_SESSION['register']='success';
		header('Location:/tech_community/home/TChome.php');}
		else
			echo "Error: " . $sql . "<br>" . $connection->error;
		
		$connection->close();
		?>