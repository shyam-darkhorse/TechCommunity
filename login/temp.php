<?php
 // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: /tech_community/home/TChome.php");
}
?>

<?php
		session_start();
		$servername = "localhost";
		$username = "root";
		$password = "Pran!3ravi";
		$dbname = "techcommunity";
		$_SESSION['orgcheck']=false;
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		$roll = $_POST["roll_number"];
		$password = $_POST["password"];

		$sql = "SELECT fname, lname,password,lastlogin FROM userdetails WHERE rollnumber = '$roll' ";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			$row = $result->fetch_assoc();
			if ( $row["password"] === $password ) {
				$message = "login successful";
				$_SESSION['login_user']=$roll;
				$_SESSION['lastlogin']=$row['lastlogin'];
				$sql="UPDATE userdetails set lastlogin=NOW() where rollnumber='$roll'";
				$result = $conn->query($sql) or die($conn->error);
				
				Header("Location:/tech_community/home/TChome.php");
			}
			else {
				$_SESSION['successmsg']= "password incorrect";
				Header("Location:/tech_community/login/login.php");
			}
		}
		else {
			$_SESSION['successmsg'] = "Sign up to continue";
			header("location: /tech_community/signup/signup.php");
		}
		$conn->close();
	?>
