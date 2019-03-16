<?php
session_start();
if(isset($_POST['eventid'])){
$_SESSION['eventid']=$_POST['eventid'];
header('location:participant.php');
}
else echo 'error';
?>