
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
			$msg1= $_POST['subject'];
			$msg=$uname.' sent an invitation to an event <a href="/tech_community/home/eventpage/event.php?id='.$msg1.'">Click here</a>';
		$sql="INSERT INTO message(fromid,toid,message,senttime,readmsg) values('$uname','$toid','$msg',NOW(),0)";
		$result= $conn->query($sql) or die ($conn->error);
		$_SESSION['register']="Shared succesfully";
		header('location:/tech_community/home/TChome.php');

?>
