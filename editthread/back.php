<html>
<body>
<?php
//Create connection
$conn = new mysqli('localhost','root','Pran!3ravi');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "DB Connected successfully";
 
// this will select the Database sample_db
mysqli_select_db($conn,"techcommunity");
 

 $new_date = date('Y-m-d', strtotime($_POST['conddate']));

	$newtime = date('H:i',strtotime($_POST['condtime']));

//create INSERT query
$eid=$_POST['eventid'];
$sql="UPDATE events set eventname=?,conddepclub=?,availability=?,description=?,date=?,time=?,venue=?
where eventid= '$eid'";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss",$_POST['event_name'],$_POST['club_name'],$_POST['availability'],$_POST['event_description'],$new_date,$newtime,$_POST['venue']);
if(!$stmt->execute()) echo $stmt->error;


$stmt->close();


$sql="DELETE  FROM eventtags Where eventid='$eid'";
$stmt = $conn->query($sql) or die($conn->error);



$sql="INSERT  INTO eventtags VALUES(?,?);";
$stmt = $conn->prepare($sql);


if(!empty($_POST['etag'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['etag'] as $selected){
$stmt->bind_param("ss",$eid,$selected);
if(!$stmt->execute()) echo $stmt->error;
}
}




mysqli_close($conn);
header('Location:/tech_community/orgpage/orghome.php')
?>
</body>
</html>