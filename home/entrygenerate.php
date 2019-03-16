

<?php

if(!isset($_SESSION['login_user'])){
echo "<script>window.location.href='/tech_community/home/TChome.php';</script>";
}

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
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
$GLOBALS['isorg']=false;
$GLOBALS['var']="";
		$GLOBALS['var'].=
		 ' <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>NO EVENTS MATCHED</h3>
          </form>  
        </div>
      </div>
      <hr>';
$GLOBALS['profile']='';
$GLOBALS['message']='';
$enter=1;
$uname= $_SESSION['login_user'];
$sql = "SELECT distinct eventid from eventtags as a NATURAL JOIN interests as b natural join activeevent as c where rollnumber='$uname' AND a.tag = b.interest";
//$sql = "SELECT eventid from eventtags, interests where eventtags.tag ='code'";
$result = $connection->query($sql);
while($row =$result->fetch_assoc())
{

	$value=$row['eventid'];
	$sql2="SELECT * from events where eventid='$value' and eventid not in (select distinct eventid from eventparticipated where rollnumber='$uname')";
	$eventdet= $connection->query($sql2);
	
	

	while($se =$eventdet->fetch_assoc())
	{
		if($enter==1)
		{
			$GLOBALS['var']='';
		}
			$enter=0;
			$temp = $se['eventid'];
			$temp = str_replace(" ","",$temp);
			$files = glob("/wamp64/www/tech_community/forum/uploads/$temp.*");
			$eventimg=0;
			for ($i=0; $i<count($files); $i++)
			{
				$eventimg=1;
				$num = $files[$i];
				$num = str_replace("/wamp64/www","",$num);
			}
			if($eventimg==0)
			{
				$num="event.jpg";
			}
		$GLOBALS['var'].=
		 ' 
		 <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center thread">
		<table border="0" cellpadding="10">
		<tr>
		<td>
		<img src="'.$num.'" class="thread zoom" width="300" height="200" onclick="window.location.href=\'/tech_community/home/eventpage/event.php?id='.$se['eventid'].'\'"/></td>
		<td ">
          <h3 align="left">'.$se['eventname'].'</h3>
		  
       
        </div>
        <div class="w3-justify">
          <p>'.$se['description'].'</p>
		  <h5>Venue: <span class="w3-opacity">'.$se['venue'].' @ <strong>'.$se['time'].' '.$se['date'].'</strong></span></h5>
		  <form name="register" method="post" action="registerevent.php" >
		  <input type="hidden" name="eventID" value="'.$se['eventid'].'" >
          <p class="w3-left"><input type="button" class="w3-button w3-white w3-border" value="Share" onclick="window.location.href=\'/tech_community/home/share/shareeve.php?id='.$se['eventid'].'\'". > <input type="submit" class="w3-button w3-white w3-border" value="Register" ></p>
          
  
          </form>
		  
		  
          </table>
        </div>
      </div>
      <hr>';
	
	}
	
}




$namesql= "SELECT fname from userdetails where rollnumber= '$uname'";
$name1 = $connection->query($namesql);
while($name=$name1->fetch_assoc()){
	
	$temp = $uname;
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
	
$GLOBALS['profile'].=
'

		<div class="w3-col l4" >
      <div class="w3-white w3-margin" >
       
        <div class="w3-container w3-black">
        <h4>Welcome '.$name['fname'].'</h4><br>
		<span float="left"><h3>'.$uname.'</h3></span>
		 <span float="right"><img src="'.$num.'" class="thread" style="border-radius:50%;" width="20%" height="10%"/></span>
          <p><a href="profile/index.php">Click here to view profile.</a></p>
        ';
}
$GLOBALS['profile'].='
</div>
      </div>
      <hr>
	  </div>
	  <br/>';
	  
	  
	  $orgbutton="SELECT count(*)as no from organizer where rollnumber='$uname'";
	  $exe=$connection->query($orgbutton);
	  $exe1=$exe->fetch_assoc();
	  if($exe1['no']==0)
	  {
		  
		  $reqchecksql="SELECT count(*)as no1 from requestorg where rollnumber='$uname'";
		  $checkreq=$connection->query($reqchecksql);
		  $checkreqres=$checkreq->fetch_assoc();
		  if($checkreqres['no1']==0){
		$GLOBALS['message'].='<div class="w3-col l4" >

      <div class="w3-white w3-margin" >
       
        <div class="w3-container w3-black">
          <h4>Wanna be an organizer??<a href="/tech_community/home/eventorgreq.php">Click here.</a></h4>
		  </div>
      </div>
      <hr>
	  </div>';  
	  }
	  else{
		  
	  $GLOBALS['message'].='<div class="w3-col l4" >

      <div class="w3-white w3-margin" >
       
        <div class="w3-container w3-black">
          <h4> Organizer request sent to admin...Waiting for response</h4>
		  </div>
      </div>
      <hr>
	  </div>'; 
	  
	  }	
	  }
	  if(!isset($_SESSION['lastlogin']))
	  {
		  die('NOt set');
	  }
	  $loginfinal=$_SESSION['lastlogin'];
	 $msgflag=1;
	$GLOBALS['notify']='<div class="w3-col l4" >
      <div class="w3-white w3-margin" ><div class="w3-container w3-black"> <p>No new messages:</p><br/>';
	$noty= "SELECT * from message where toid= '$uname' and senttime > '$loginfinal' ";
	$msg = $connection->query($noty);
	while($msgdisp=$msg->fetch_assoc()){
		if ($msgflag==1)
			$GLOBALS['notify']='<div class="w3-col l4" >
      <div class="w3-white w3-margin" ><div class="w3-container w3-black">';
	  $msgflag=0;
		$GLOBALS['notify'].='<h4>'.$msgdisp['fromid'].':</h4> <p>'.$msgdisp['message'].'</p><br/><hr>';
		
	}
	  $GLOBALS['notify'].='<p>Click <a href="/tech_community/messaging/allmessage.php">here </a>to view all messages...</p></div> </div><hr></div>';

	  
	  
	  	$v='<div class="w3-col l4" >
      <div class="w3-white w3-margin" ><div class="w3-container w3-black">
  <form  method="post" action="/tech_community/form/redirect.php">
<br/>
    <label for="event">Select event:</label>
	<select id="event" name="eventid">';
		
		$sql = "SELECT eventname,eventid FROM events";
		$result1 = $connection->query($sql);

		if ($result1->num_rows > 0) {
			while($result=$result1->fetch_assoc()){	
			$v.='<option value="'.$result['eventid'].'">'.$result['eventname'].'</option>';}
		}
		
		$v.='</select>
		
    <input type="submit" class="w3=btn w3-black" value="Go to forum" class="button">
  </form>
  <br>
</div>
</div> </div>';

$GLOBALS['forum']=$v;
{
mysqli_close($connection); // Closing Connection

}



?>

