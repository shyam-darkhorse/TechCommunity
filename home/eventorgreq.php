<!DOCTYPE html>
<html>
<?php
include('session.php');?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">Your Profile</h2>
<br/><br/>
<div class="card">
  <br/>
<h3>Why Be an Organizer??</h3>
<p > Organizers can post event details into tech community.<br/>
They can also send email alerts to the participants of his/her event.</p>
<br/><br/><br/>
<form name="register" method="post" action="sendreq.php" >
		  <input type="hidden" name="rollnumber" value=<?php echo $_SESSION['login_user']?> >
          <p class="w3-left"><input type="submit" class="w3-button w3-white w3-border" value="Register" ></p>
		  <br/>
		  <br/>
		  <br/>
		  


</div>

</body>
</html>
