<?php
session_start();
$_SESSION['eventid']=$_POST['eventid'];
header('location:frontforum.php');
?>