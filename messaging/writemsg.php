<?php 
include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/tech_community/home/style.css">
<style>

body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>

<h3>Write a message</h3>

<div class="container">
  <form  method="post" action="sendmessage.php">

    <label for="roll">To:</label>
	<select id="roll" name="roll">
	<?php
	$var='';
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
		$sql = "SELECT rollnumber FROM userdetails";
		$result1 = $conn->query($sql);

		if ($result1->num_rows > 0) {
			while($result=$result1->fetch_assoc()){	
			if($_SESSION['login_user']!=$result['rollnumber'] && $result['rollnumber']!='admin')
			$var.='<option value="'.$result['rollnumber'].'">'.$result['rollnumber'].'</option>';}
		}
		echo $var;
     

	
	
	?>
        </select>

    <label for="subject">Message</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" class="w3-btn w3-black" value="Send">
  </form>
</div>

</body>
</html>
