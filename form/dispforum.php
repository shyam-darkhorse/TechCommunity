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
			die("Connection failed: " . $connection->connect_error);
		} 
		
		$GLOBALS['query']='<button id="myBtn" class="button reply" style="display:none" onclick="window.location.href=\'/tech_community/form/writereply.php?">Reply</button>';
		if(!isset($_SESSION['eventid'])){
			echo 'session not set';
		}
		$id=$_SESSION['eventid'];
		$sql="SELECT * from forumquery  where eventid='$id' order by time desc";
		$result= $conn->query($sql) or die ($conn->error);
		while($row=$result->fetch_assoc())
		{
			$qidvar=$row['queryid'];
			$temp = $row['rollnumber'];
			$flag=1;
								$files = glob("/wamp64/www/tech_community/signup/profilepic/$temp.*");
								for ($i=0; $i<count($files); $i++)
								{
									$flag=0;
									$num = $files[$i];
									$num = str_replace("/wamp64/www","",$num);
								}
								if($flag==1)
								{
									$num="img-avatar.png";
								}
			$GLOBALS['query'].='<div>
				<div class="chip">
				  <img src='.$num.' alt="Person" width="96" height="96">'.$row["rollnumber"].'
				</div>
				<button class="accordion">'.$row["querydesc"].'<div class="date-right">'.$row["time"].'</div></button>';
				
				$sql2="SELECT * from reply where queryid= '$qidvar'";
				$replyres=$conn->query($sql2) or die ($conn->error);
				$replypresent=0;
				$GLOBALS['query'].='<div class="panel">';
				while($row1=$replyres->fetch_assoc())
				{
					$replypresent=1;
					$GLOBALS['query'].='<p>by '.$row1['rollnumber'].'
					<p>'.$row1['reply'].'</p>
					 '.$row1['time'].'<br/>
					<i onclick="like(this)" class="fa fa-thumbs-up"></i><p id="like-message"></p><hr>';
						
				}
				if($replypresent==0)
				{
					$GLOBALS['query'].='
					<p>No replies yet</p>';
					
				}
				$GLOBALS['query'].='<button id="myBtn" class="button reply" onclick="window.location.href=\'/tech_community/form/writereply.php?qid='.$qidvar.'\'">Reply</button>
				</div>
			</div>';
				
				
			
		}
		$conn->close();
		
		

?>