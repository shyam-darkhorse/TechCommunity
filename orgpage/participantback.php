<?php
		
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
		$eventid=$_SESSION['eventid'];
		$sql= "SELECT fname,lname,rollnumber,phoneno from userdetails where rollnumber in (select rollnumber from eventparticipated where eventid='$eventid')";
		$res=$conn->query($sql);
		$flag=1;
		$GLOBALS['table']='<table id="partici">
  <tr>
    <th>No participants yet..</th></tr>';
	$i=0;

		while($row=$res->fetch_assoc())
		{
			if($flag==1)
			{
				$GLOBALS['table']='<table id="partici">
  <tr>
    <th>Roll number</th>
    <th>Name</th>
    <th>Phone no.</th>
  </tr>';
  $flag=0;
			}
			$GLOBALS['table'].='<tr>
    <td><a href="/tech_community/home/profile/index.php?id='.$row['rollnumber'].'">'.$row['rollnumber'].'</td>
    <td>'.$row['fname'].' '.$row['lname'].'</td>
    <td>'.$row['phoneno'].'</td></tr>';
		}
		
		$GLOBALS['table'].='</table>';
		if($flag==0)
		{
			$GLOBALS['table'].='<div style="margin-left:1000px;"><input type="button"  value="Send a message" class="button" onclick=\'location.href="writemsgtop.php"\'></div>';
		}
		
		$conn->close();
		

?>