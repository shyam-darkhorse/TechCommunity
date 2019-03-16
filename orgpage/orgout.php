<?php
session_start();
session_unset();
if(session_destroy()) // Destroying All Sessions
{
header("Location: /tech_community/login/login.php"); // Redirecting To Home Page
}
?>