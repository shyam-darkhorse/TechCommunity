<!DOCTYPE html>
<html>
<?php
include('session.php');?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<style>
.top {
	background-color:#141414;
	width:100%;
	height:200pt;
}


.profile{
	width:150pt;
	height:150pt;
	padding:25px;
	border-radius:50%;
}

h1{
	color:white;
}

.logout {
	float:left;

}	





</style>
</head>


<body>
<div class="top">
		 <table>
			<tr>
				
				<?php
				
				
				$temp = $_SESSION['login_user'];
			$files = glob("/wamp64/www/tech_community/signup/profilepic/$temp.*");
			$flag1=1;
			for ($i=0; $i<count($files); $i++)
			{
				$flag1=0;
				$num = $files[$i];
				$num = str_replace("/wamp64/www","",$num);
			}
			if($flag1==1)
			{
				$num="img-avatar.png";
			}
			echo '<td> <img class="profile" src='.$num.'> </td>
				<td> <h1> Welcome ';

				
				
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
		$roll=$_SESSION['login_user'];
		$sql="SELECT fname, lname from userdetails where rollnumber='$roll'";
		$res=$conn->query($sql);
		$row=$res->fetch_assoc() or die('error');
		echo $row['fname'].$row['lname'];		
		?>
				</h1></td>
				
			</tr>
 
		 </table>
		</div>
<?php

			



	  	$v='NO EVENTS YET';
	If(!isset($_SESSION['orgid']))
	{
		echo 'error';
	}
		$orgid=$_SESSION['orgid'];
		$sql = "SELECT eventid,eventname,description,time,date FROM events where orgid='$orgid'";
		$result1 = $connection->query($sql);
		$flag=1;
		if ($result1->num_rows > 0) {
			while($result=$result1->fetch_assoc()){	
			if($flag==1)
			{
				$v="";
				$flag=0;
				
			}
			$v.='	
			<div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center thread"><div class="w3-justify">
		<div><form  method="post" action="/tech_community/orgpage/tableredirect.php">
			<h3>'.$result['eventname'].' </h3>
			<i> This event is scheduled on @ '.$result['time'].' on '.$result['date'].'</i><br><br>
			<input type="hidden" value="'.$result['eventid'].'" name="eventid">
			<input type="submit" class="w3-btn w3-black" value="View Participants" /></form> <br/>
			
			
			<form method="post" action="/tech_community/editthread/editthread.php?id='.$result['eventid'].'">
			<input type="hidden" value="'.$result['eventid'].'" name="eventid">
			<input type="submit" class="w3-btn w3-black w3-ripple" value="Edit details" /></div><hr>
			</form>
			
			</div>
			</div>
			</div>
			';
		}
		}
		$v.='
		
		<a href="/tech_community/create_thread/createthread.php" class="w3-btn w3-black">Create an event</a>
		
		<a href="orgout.php" class="w3-btn w3-black">Logout</a>
		
		';


	echo $v;

?>







</div>
  <br/>
  
  
</body></html>