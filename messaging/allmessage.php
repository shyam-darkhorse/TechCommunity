<!DOCTYPE html>
<?php
include('session.php');
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<style>

<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

.button {
	   border: 0px solid #000000;
	   background: #1081cc;
	   background: -webkit-gradient(linear, left top, left bottom, from(#0f88d9), to(#1081cc));
	   background: -webkit-linear-gradient(top, #0f88d9, #1081cc);
	   background: -moz-linear-gradient(top, #0f88d9, #1081cc);
	   background: -ms-linear-gradient(top, #0f88d9, #1081cc);
	   background: -o-linear-gradient(top, #0f88d9, #1081cc);
	   background-image: -ms-linear-gradient(top, #0f88d9 0%, #1081cc 100%);
	   padding: 11.5px 23px;
	   -webkit-border-radius: 2px;
	   -moz-border-radius: 2px;
	   border-radius: 2px;
	   -webkit-box-shadow: rgba(255,255,255,0.4) 0 0px 0, inset rgba(255,255,255,0.4) 0 0px 0;
	   -moz-box-shadow: rgba(255,255,255,0.4) 0 0px 0, inset rgba(255,255,255,0.4) 0 0px 0;
	   box-shadow: rgba(255,255,255,0.4) 0 0px 0, inset rgba(255,255,255,0.4) 0 0px 0;
	   text-shadow: #65648a 0 1px 0;
	   color: #ffffff;
	   font-size: 20px;
	   font-family: helvetica, serif;
	   text-decoration: none;
	   vertical-align: middle;
	   }
	.button:hover {
	   border: 0px solid #0a3c59;
	   text-shadow: #1e4158 0 1px 0;
	   background: #2d6ad4;
	   background: -webkit-gradient(linear, left top, left bottom, from(#1f65ba), to(#2d6ad4));
	   background: -webkit-linear-gradient(top, #1f65ba, #2d6ad4);
	   background: -moz-linear-gradient(top, #1f65ba, #2d6ad4);
	   background: -ms-linear-gradient(top, #1f65ba, #2d6ad4);
	   background: -o-linear-gradient(top, #1f65ba, #2d6ad4);
	   background-image: -ms-linear-gradient(top, #1f65ba 0%, #2d6ad4 100%);
	   color: #fff;
	   }
	.button:active {
	   text-shadow: #1e4158 0 1px 0;
	   border: 0px solid #0a3c59;
	   background: #65a9d7;
	   background: -webkit-gradient(linear, left top, left bottom, from(#50b3ba), to(#2d6ad4));
	   background: -webkit-linear-gradient(top, #50b3ba, #65a9d7);
	   background: -moz-linear-gradient(top, #50b3ba, #65a9d7);
	   background: -ms-linear-gradient(top, #50b3ba, #65a9d7);
	   background: -o-linear-gradient(top, #50b3ba, #65a9d7);
	   background-image: -ms-linear-gradient(top, #50b3ba 0%, #65a9d7 100%);
	   color: #fff;
	   }
</style>
</head>
<body>
<h3>Messages 
</h3>



  <div class="w3-bar w3-black">
    <button class="w3-bar-item w3-button tablink " onclick="openCity(event,'Sent')">Sent</button>
    <button class="w3-bar-item w3-button tablink w3-red" onclick="openCity(event,'Received')">Received</button>
  </div>

<div id="Sent" class="w3-container w3-border city" style="display:none">
    <?php
	
	$mess=$remess='<div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>No Messages yet</h3>  
        </div>
      </div>
      <hr>';
	  $flag_mg=0;
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
		$uname=$_SESSION['login_user'];
		$sql="Select * from message where fromid='$uname' order by senttime DESC";
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc())
		{
			if($flag_mg==0)
				$mess='';
			$flag_mg=1;
			$touser=$row['toid'];
			$rece="Select fname from userdetails where rollnumber='$touser'";
			$usernm=$conn->query($rece);
			$res=$usernm->fetch_assoc() or die($conn->error);
		$mess.='<div class="w3-container w3-white w3-margin w3-padding-small">
        <div class="w3-left">
          <h3>To:'.$res['fname'].'('.$row['toid'].')</h3>
		  <h5>'.$row['message'].'<h5>
			<span float="left"><h6>'.$row['senttime'].'</h6></span>
        </div>
      </div>
      <hr>';
			
		}
		$flag_mg=0;
		$sql="Select * from message where toid='$uname' order by senttime DESC";
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc())
		{
			if($flag_mg==0)
				$remess='';
			$flag_mg=1;
			$touser=$row['fromid'];
			$rece="Select fname from userdetails where rollnumber='$touser'";
			$usernm=$conn->query($rece);
			$res=$usernm->fetch_assoc() or die($conn->error);
		$remess.='<div class="w3-container w3-white w3-margin w3-padding-small">
        <div class="w3-left">
          <h3>From:'.$res['fname'].'('.$row['fromid'].')</h3>
		  <h5>'.$row['message'].'<h5>
			<span float="left"><h6>'.$row['senttime'].'</h6></span>
        </div>
      </div>
      <hr>';
			
		}
	
	echo $mess;
	?>
  </div>

  <div id="Received" class="w3-container w3-border city" style="display:block">
    <?php echo $remess;?>
  </div>
  <div float="right"><input type="button"  value="Send a message" class="w3-btn w3-black" onclick="location.href='writemsg.php'">&nbsp;  <input type="button"  value="Back"  class="w3-btn w3-black" onclick="location.href='/tech_community/home/TChome.php'"></div>
</div>

<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>
</body>
</html>
