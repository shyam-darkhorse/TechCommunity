<html>
<body>
<?php
 
// Create connection
$conn = new mysqli('localhost','root','Pran!3ravi');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "DB Connected successfully";
 
// this will select the Database sample_db
mysqli_select_db($conn,"techcommunity");
 
echo "\n DB is seleted as Test  successfully";
 
// create INSERT query
 
 
$sql="INSERT INTO userdetails(rollnumber,fname,lname,password,email,phoneno,club,department,year) VALUES (?,?,?,?,?,?,?,?,?);";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssi", $_POST['roll_number'],$_POST['first_name'],$_POST['last_name'],$_POST['password'],$_POST['email'],$_POST['phone_number'],$_POST['club_name'],$_POST['department_name'],$_POST['year']);
if(!$stmt->execute()) echo $stmt->error;
$stmt->close();
$sql="INSERT  INTO interests VALUES(?,?);";
$stmt = $conn->prepare($sql);


	{//to run PHP script on submit
if(!empty($_POST['etag'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['etag'] as $selected){
	echo $selected." ";
$stmt->bind_param("ss",$_POST['roll_number'],$selected);
if(!$stmt->execute()) echo $stmt->error;
}
}
} 
$stmt->close();


mysqli_close($conn);

$target_dir = "/wamp64/www/tech_community/signup/profilepic/";
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
	$imgname = $_POST['roll_number'];
	$imgname = str_replace(" ","",$imgname);
	$temp = explode(".", $_FILES["fileToUpload"]["name"]);
	$newfilename = $imgname . '.' . end($temp);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_dir . $newfilename)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded to ". $target_dir;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
header("location: /tech_community/login/login.php");
?>
</body>
</html>