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
		$flag=1;
		$GLOBALS['listofreq']='<h3>NO NEW REQUESTS<h3>';
		
		$sqlreq="SELECT * from requestorg";
		$res=$conn->query($sqlreq);
		while($row=$res->fetch_assoc())
		{
			$roll=$row['rollnumber'];
			if($flag==1)
				$GLOBALS['listofreq']='<form method="POST" action="accept.php">';
			$flag=0;
			$GLOBALS['listofreq'].='<label class="container"><a href="/tech_community/admin/profile/index.php?id='.$roll.'">'.$roll.'</a>
  <input type="checkbox" name="requests[]" value="'.$roll.'">
  <span class="checkmark"></span>
</label>';
			
			
		}
		if($flag==0)
			$GLOBALS['listofreq'].='<input type="submit" value="accept">
		
		</form>';















?>
<html>


<head>
<style>
/* The container */
.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
</style>
</head>

<h2 style="text-align:center">Requests:</h2>
<br/><br/>
<div class="card">
  <br/>
<?php echo $GLOBALS['listofreq'];?>

<input type="button"  value="Back" class="button" onclick="location.href='/tech_community/admin/admin123.php'">
</div>

</body>
</html>
