<!DOCTYPE html>
<?php
include('session.php');
include('participantback.php');
?>
<html>
<head>
<style>

#partici {
	
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 60%;
	margin-left:300px;
	margin-top:150px;
	
}

#partici td, #partici th {
    border: 1px solid #ddd;
    padding: 8px;
}

#partici tr:nth-child(even){background-color: #f2f2f2;}

#partici tr:hover {background-color: #ddd;}

#partici th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: black;
    color: white;
}

body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>
<button onclick="location.href='/tech_community/orgpage/orghome.php'">BACK</button>
<?php
if(isset($_SESSION['message'])){
	echo $_SESSION['message'];
	$_SESSION['message']="";
}
echo $GLOBALS['table'];

?>

</body>
</html>
