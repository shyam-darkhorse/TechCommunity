

<!DOCTYPE html>
<html>
<?php
include('session.php');?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">Your Profile</h2>
<br/><br/>
<div class="card">
  <br/>
<?php

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
		$sql= "SELECT * from userdetails where rollnumber='$uname';";
		$result = $connection->query($sql);
		$row =$result->fetch_assoc();
			$res_str='<div class="card">
  <br/>
  <br/>

<br/>  <h1>'.$row['fname'].' '.$row['lname'].'</h1>
  <p class="title">'.$row['rollnumber'].'</p>
  <p>'.$row['email'].'</p>
  <div style="margin: 24px 0;">
	<p>'.$row['department'].'</p>
	<p>'.$row['club'].'</p>
	<p>'.$row['phoneno'].'</p>
 </div>
 <br/><br/>
</div>';
			
		echo $res_str;		
		mysqli_close($connection);

?>


</div>

</body>
</html>
