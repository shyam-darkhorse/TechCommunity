<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
	background-color:rgba(256,256,256,0.5);
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  height: 700px       ;
 margin:auto;
  text-align: center;
  font-family: arial;
}


.title {
  color: grey;
  font-size: 18px;
}
input.MyButton {
width: 300px;
padding: 20px;
cursor: pointer;

font-size: 150%;
background: #3366cc;
color: #fff;
border: 1px solid #3366cc;
border-radius: 10px;
}
input.MyButton:hover {
color: #ffff00;
background: #000;
border: 1px solid #fff;
}





</style>
</head>
<body style="background-image:url('2.png');">


<br/><br/>
<div class="card">

<br/>
<br/>
<br/>
<h2 style="text-align:center">Pick one....</h2>
<br/>
<br/>
<br/>
<input type="button" class="MyButton" value="Organizer req. approval" onclick="window.location.href='/tech_community/admin/viewreq.php'">

<br/>
<br/>

<input type="button" class="MyButton" value="Refresh Events" onclick="window.location.href='/tech_community/admin/expevent.php'">
<br>
<br>
<input type="button" class="MyButton" value="View Feedback" onclick="window.location.href='/tech_community/admin/feedback.php'">
<br>
<br>

<input type="button"  value="Log in as student" class="MyButton" onclick="location.href='/tech_community/login/login.php'">





</div>
<br/>
</body>
</html> 
  
