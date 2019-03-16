<!DOCTYPE html>
<html>
<?php
include('session.php');?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
	background-color:rgba(256,256,256,0.5);
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  height: 500px       ;
 margin:auto;
  text-align: center;
  font-family: arial;
}


.title {
  color: grey;
  font-size: 18px;
}
input.MyButton {
width: 300px;
padding: 20px;
cursor: pointer;

font-size: 150%;
background: #3366cc;
color: #fff;
border: 1px solid #3366cc;
border-radius: 10px;
}
input.MyButton:hover {
color: #ffff00;
background: #000;
border: 1px solid #fff;
}





</style>
</head>
<body style="background-image:url('2.png');">


<br/><br/>
<div class="card">

<br/>
<br/>
<br/>
<h2 style="text-align:center">Pick one....</h2>
<br/>
<br/>
<br/>
<input type="button" class="MyButton" value="Organize an event" onclick="window.location.href='/tech_community/create_thread/createthread.php'">

<br/>
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
	  	$v='
  <form  method="post" action="/tech_community/orgpage/tableredirect.php">

    <label for="event">Select event:</label>
	<select id="event" name="eventid">';
	If(!isset($_SESSION['orgid']))
	{
		echo 'error';
	}
		$orgid=$_SESSION['orgid'];
		$sql = "SELECT eventname,eventid FROM events where orgid='$orgid'";
		$result1 = $connection->query($sql);

		if ($result1->num_rows > 0) {
			while($result=$result1->fetch_assoc()){	
			$v.='<option value="'.$result['eventid'].'">'.$result['eventname'].'</option>';}
		}
		
		$v.='</select>
		<br/><br/>
    <input type="submit" class="MyButton" value="View Event Participants" >  </form>
	<br/>
	<br/><form method="post" action="/tech_community/editthread/editthread.php?id='.$result['eventid'].'">
	<label for="event">Select event:</label>
	<select id="event" name="eventid">';
	$result1 = $connection->query($sql);

		if ($result1->num_rows > 0) {
			while($result=$result1->fetch_assoc()){	
			$v.='<option value="'.$result['eventid'].'">'.$result['eventname'].'</option>';}
		}
	$v.='<input type="submit"  value="Edit details" class="MyButton" "></select></form>

  
  
  ';
	echo $v;

?>


<br>
<br>
<input type="button"  value="Logout" class="MyButton" onclick="location.href='orgout.php'">





</div>
  <br/>
  
  
</body></html>