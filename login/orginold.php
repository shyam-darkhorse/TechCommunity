<!DOCTYPE html>
	<html>
	<head>
	<title>Tech Community|Login</title>
	</head>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans|Roboto+Condensed" rel="stylesheet">
	<style>
	.box{
		width:400px;
		height:550px;
		background-color:rgba(256, 256, 256, 0.5);
		position:fixed;
		margin-left:100px;
		margin-top:-250px;
		top:50%;
		left:50%;
		-webkit-border-radius: 28;
	   -moz-border-radius: 28;
	   -webkit-box-shadow: 2px 1px 3px #666666;
	   -moz-box-shadow: 2px 1px 3px #666666;
		box-shadow: 2px 1px 3px #666666;


	}
	body {
			font-family: 'PT Sans', sans-serif ;
			color:#707074;
		  }
	.txtbox{
		height:30px;
		text-align:left;
		font-size:18px;
		font-family: 'Roboto Condensed', sans-serif;
		padding-left:4px;
		border-radius:3px;
		
		}
	.button {
	   border: 0px solid #000000;
	   background: #1081cc;
	   background: -webkit-gradient(linear, left top, left bottom, from(#0f88d9), to(#1081cc));
	   background: -webkit-linear-gradient(top, #0f88d9, #1081cc);
	   background: -moz-linear-gradient(top, #0f88d9, #1081cc);
	   background: -ms-linear-gradient(top, #0f88d9, #1081cc);
	   background: -o-linear-gradient(top, #0f88d9, #1081cc);
	   background-image: -ms-linear-gradient(top, #0f88d9 0%, #1081cc 100%);
	   padding: 11.5px 23px;
	   -webkit-border-radius: 2px;
	   -moz-border-radius: 2px;
	   border-radius: 2px;
	   -webkit-box-shadow: rgba(255,255,255,0.4) 0 0px 0, inset rgba(255,255,255,0.4) 0 0px 0;
	   -moz-box-shadow: rgba(255,255,255,0.4) 0 0px 0, inset rgba(255,255,255,0.4) 0 0px 0;
	   box-shadow: rgba(255,255,255,0.4) 0 0px 0, inset rgba(255,255,255,0.4) 0 0px 0;
	   text-shadow: #65648a 0 1px 0;
	   color: #ffffff;
	   font-size: 20px;
	   font-family: helvetica, serif;
	   text-decoration: none;
	   vertical-align: middle;
	   }
	.button:hover {
	   border: 0px solid #0a3c59;
	   text-shadow: #1e4158 0 1px 0;
	   background: #2d6ad4;
	   background: -webkit-gradient(linear, left top, left bottom, from(#1f65ba), to(#2d6ad4));
	   background: -webkit-linear-gradient(top, #1f65ba, #2d6ad4);
	   background: -moz-linear-gradient(top, #1f65ba, #2d6ad4);
	   background: -ms-linear-gradient(top, #1f65ba, #2d6ad4);
	   background: -o-linear-gradient(top, #1f65ba, #2d6ad4);
	   background-image: -ms-linear-gradient(top, #1f65ba 0%, #2d6ad4 100%);
	   color: #fff;
	   }
	.button:active {
	   text-shadow: #1e4158 0 1px 0;
	   border: 0px solid #0a3c59;
	   background: #65a9d7;
	   background: -webkit-gradient(linear, left top, left bottom, from(#50b3ba), to(#2d6ad4));
	   background: -webkit-linear-gradient(top, #50b3ba, #65a9d7);
	   background: -moz-linear-gradient(top, #50b3ba, #65a9d7);
	   background: -ms-linear-gradient(top, #50b3ba, #65a9d7);
	   background: -o-linear-gradient(top, #50b3ba, #65a9d7);
	   background-image: -ms-linear-gradient(top, #50b3ba 0%, #65a9d7 100%);
	   color: #fff;
	   }
	.btn:hover {
	  background: #3cb0fd;
	  text-decoration: none;
	}

	</style>

	<body style="background-color:#3383FF;background-image:url('2.png');background-repeat:no-repeat;">

	<form name="loginForm"  method="post" action="orglogback.php">
	<table  class="box" width="20%" bgcolor="white" align="center">

	<tr align="center">
	<td colspan=2><center><font size="24px"><b>Login</b></font></center></td>
	</tr>

	<tr align="center" height="45px"  >
	<td><input type="text" class="txtbox" size=25 placeholder= "Roll Number" name="roll_number"></td>
	</tr>
	<tr align="center" height="45px"  >
	<td><input type="text" class="txtbox" size=25 placeholder= "Organizer ID" name="org_id"></td>
	</tr>
	<tr align="center" height="45px">
	<td><input type="password" class="txtbox" placeholder="Password" size=25 name="password" ></td>
	</tr>


	<tr align ="center" style="cellpadding:10px;">
	<td><input type="submit"  value="Login" class="button" width="75px">
	</td>
	</tr>
	</table>
	</form>
	<div style="float:left;"><input type="button"  value="Student" class="button" onclick="location.href='/tech_community/log_in/initialTC.php'"></div>
	</body>
	</html> 