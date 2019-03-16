<?php
//accept.php

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
		$addorg="INSERT INTO organizer(rollnumber) values(?)";
		$delreq="DELETE FROM requestorg WHERE rollnumber=?";
		$sendmsg="INSERT INTO message(fromid,toid,message,senttime,readmsg) values('admin',?,?,NOW(),0)";
		$stmt = $conn->prepare($addorg);
		$stmt2 = $conn->prepare($delreq);
		$stmt3=  $conn->prepare($sendmsg);
		if(!empty($_POST['requests'])){
			
			if(!is_array($_POST['requests'])){
				$selected=$_POST['requests'];
				$stmt->bind_param("s",$selected);
				if(!$stmt->execute()) echo $stmt->error;
				else{$orgid=$conn->insert_id;}
				$stmt2->bind_param("s",$selected);
				if(!$stmt2->execute()) echo $stmt->error;
				$msg='Request accepted by admin....your organizer ID is '.$orgid;
				$stmt3->bind_param("ss",$selected,$msg);
				if(!$stmt3->execute()) echo $stmt->error;
				
			}
			else{
		// Loop to store and display values of individual checked checkbox.
		foreach($_POST['requests'] as $selected){
			
				$stmt->bind_param("s",$selected);
				if(!$stmt->execute()) echo $stmt->error;
				else{$orgid=$conn->insert_id;}
				$stmt2->bind_param("s",$selected);
				if(!$stmt2->execute()) echo $stmt->error;
				$msg='Request accepted by admin....your organizer ID is '.$orgid;
				$stmt3->bind_param("ss",$selected,$msg);
				if(!$stmt3->execute()) echo $stmt->error;
		}
		}}
	header("Location:viewreq.php");
		

?>