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

$sql="INSERT INTO events (eventname,conddepclub,availability,description,date,time,venue,orgid)
VALUES (?,?,?,?,?,?,?,?);";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssi",$_POST['event_name'],$_POST['club_name'],$_POST['availability'],$_POST['event_description'],$new_date,$newtime,$_POST['venue'],$_POST['cid']);
if(!$stmt->execute()) echo $stmt->error;
else{
	$eventid=$conn->insert_id;
}

$stmt->close();


$sql="INSERT  INTO eventtags VALUES(?,?);";
$stmt = $conn->prepare($sql);


if(!empty($_POST['etag'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['etag'] as $selected){
	echo $selected." ";
$stmt->bind_param("ss",$eventid,$selected);
if(!$stmt->execute()) echo $stmt->error;
}
}

$sql="INSERT into activeevent values('$eventid')";
$result=$conn->query($sql);

echo '<h2> Your Event ID is '.$eventid.' Note this for further references'; 
$stmt->close();


mysqli_close($conn);







$target_dir = "/wamp64/www/tech_community/forum/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	$imgname = $eventid;
	$imgname = str_replace(" ","",$imgname);
	$temp = explode(".", $_FILES["fileToUpload"]["name"]);
	$newfilename = $imgname . '.' . end($temp);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_dir . $newfilename)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded to ". $target_dir;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
















header('Location:/tech_community/orgpage/orghome.php')
?>
</body>
</html>