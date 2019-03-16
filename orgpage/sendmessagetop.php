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
			
			$eventid=$_SESSION['eventid'];
		$sql1= "SELECT rollnumber from userdetails where rollnumber in (select rollnumber from eventparticipated where eventid='$eventid')";
		$res1=$conn->query($sql1);
		while($row1=$res1->fetch_assoc())
		{
			$toid=$row1['rollnumber'];
		$sql="INSERT INTO message(fromid,toid,message,senttime,readmsg) values('$uname','$toid','$msg',NOW(),0)";
		$result= $conn->query($sql) or die ($conn->error);
		
		}
		$_SESSION['message']='Messages sent successfully...';
		header('location:participant.php');

?>