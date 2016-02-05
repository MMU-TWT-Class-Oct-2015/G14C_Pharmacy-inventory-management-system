<<<<<<< HEAD
<?php
include("connection.php");

if (isset($_POST["login"])) // check which button is clicked
{
	if($_POST["type"] == "staff"){
	// get values from the form
	$susrname = trim($_POST["username"]);
	$spass = $_POST["password"];

	// try to find if there is any record using the same username and password
	$result = mysql_query("select * from staff where StaffUsername = '$susrname' and StaffPassword = '$spass'");

	// if there is a record found, then the user is valid
	if (mysql_num_rows($result) != 0)
	{
	    // fetch the member record, because we need the PK -- mem_id
		$row=mysql_fetch_assoc($result);

		// save the mem_id (PK) in a session variable
		$_SESSION["staff_id"] = $row["StaffID"];

		// goes to the member profile page
		header("Location:staff_homepage.php");
	}
	else
	{
	?>

		<script type="text/javascript">
			alert("Invalid Username or Password");
		</script>

	<?php
	}
	}
	elseif($_POST["type"] == "manager"){
		// get values from the form
		$ausrname = trim($_POST["username"]);
		$apass = $_POST["password"];

		// try to find if there is any record using the same username and password
		$answer = mysql_query("select * from admin where AdminUsername = '$ausrname' and AdminPassword = '$apass'");

		    // if there is a record found, then the user is valid
		  if (mysql_num_rows($answer) != 0)
		  {
		    // fetch the member record, because we need the PK -- mem_id
			$row=mysql_fetch_assoc($answer);

			// save the mem_id (PK) in a session variable
			$_SESSION["admin_id"] = $row["AdminID"];

			// goes to the member profile page
			header("Location:admin_homepage.php");
	   }
		 else
	 	{
	 	?>

	 		<script type="text/javascript">
	 			alert("Invalid Username or Password");
	 		</script>

	 	<?php
	 	}
	}
}
?>

=======
>>>>>>> 2381f29f13cbd4d7de052200f2666903a97e0eb1
<!DOCTYPE html>
<html>
<head>
<title></title>


<style>
.register_form
{
border-style:solid;
border-width:1px;
border-radius:5px;
background-color:#b3e0ff;
background-position:center;
width:300px;
height:380px;
margin-left:300px;
padding-left:40px;

}
td
{
font-size:20px;
}

 input[type='button']
{
	background-position:1px;
	background-color:#66c2ff;
	color:#000f1a;
	border-width:1.5px;
	border-color:#004c80;
	border-radius:3px;
	font-family:arial narrow;
	font-size:17px;
}

input[type='button']:hover
{
	font-family:arial narrow;
	background-color:#ccebff;
	color:#002ecd;
	border-color:#001f33;
}
</style>
</head>
<body>
<div style="border:black 2px solid;height:1122px;width:1020px;margin-left:200px;background-color:#e5f5ff">
<br/>
<br/>
<span style="color:#262626;font-size:55px;font-weight:bold;font-family:arial narrow;padding-left:100px;"><span style="font-style:italic;">P</span>harma<span style="color:#005c99">c</span>y </span><span style="color:#262626;font-size:45px;font-weight:bold;font-family:arial narrow;">Online</span>
<br/>
<span style="color:#262626;font-size:25px;font-weight:bold;font-family:arial narrow;padding-left:100px;font-style:oblique;">| The most efficient pharmacy is within your own system</span>
<br/>
<br/>
<br/>
<div style=";background-color:black; 	height:1px;"></div>
<div style=";background-color:#004c80;height:40px;"><br/></div>
<div style=";background-color:black; height:1px;"></div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<div class="register_form">
<br/>
<img src="profilepicture.jpg" title="user" width="120px" style="border-style:solid;border-width:1px;margin-left:67px;margin-bottom:50px;"/>
<<<<<<< HEAD
<form name="loginfrm" method="POST">
=======
>>>>>>> 2381f29f13cbd4d7de052200f2666903a97e0eb1
<table>
<tr>
<td>User Name</td>
<td>:</td>
<td><input type="text" name="username"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td>login as</td>
<td>:</td>
<td><input type="radio" name="type" value="manager">manager<input type="radio" name="type" value="staff">staff</td>
</tr>

</table>
<<<<<<< HEAD
<input type="submit" name="login" value="login"style="margin-left:75px;margin-top:30px;width:50px;"> <input type="submit" name="cancel" value="cancel">
</form>
=======
<input type="button" name="login" value="login"style="margin-left:75px;margin-top:30px;width:50px;"> <input type="button" name="cancel" value="cancel">
>>>>>>> 2381f29f13cbd4d7de052200f2666903a97e0eb1
</div>
<div style=";background-color:black;height:1px;margin-top:310px;"></div>
<div style=";background-color:#004c80;height:62px"><br/></div>
</div>

</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 2381f29f13cbd4d7de052200f2666903a97e0eb1
