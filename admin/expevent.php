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
		$sql= "SELECT * from events as a NATURAl JOIN activeevent as b where date(a.date)< date(now())";
		$result= $conn->query($sql) or die ($conn->error);
		while($row=$result->fetch_assoc())
		{
			
			$expevent=$row['eventid'];
			echo $expevent;
			$delrow="delete from activeevent where eventid='$expevent'";
			if(!($out=$conn->query($delrow)))
			{
				echo $conn->error;
			}
		}
		$conn->close();
		header('Location:admin123.php');

?>