<?php

include("connection.php");

// get the session variable
$sess_sid = $_SESSION["staff_id"];

// finding the specific member record based on the session variable
$result = mysql_query("select * from staff where StaffID = $sess_sid");
$row=mysql_fetch_assoc($result);

if(!isset($_SESSION["staff_id"]))
{
 header("location:homepage.php");
}

if (isset($_POST["btnupdate"]))
{
	// get values from the form
	$sname = $_POST["fullname"];
	$sage = $_POST["age"];
	$sic = $_POST["identification"];
	$scontact = $_POST["contactNumber"];
	$semail = $_POST["email"];



	// update the database table with new values
	mysql_query("update staff set StaffName = '$sname', StaffEmail='$semail', StaffContactNo='$scontact', StaffIC='$sic', StaffAge='$sage'
	where StaffID = $sess_sid");

	// redirct to the profile page to see the changes made
	header("Location: staff_homepage.php");
}
if(isset($_POST["btncancel"]))
{
 header("location:staff_homepage.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title></title>

<link rel="stylesheet" type="text/css" href="css.css"/>
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


.leftprofile
{
border:#66c2ff 1px solid;
height:840px;
width:280px;
background:#000f1a;

}

.title
{
background-color:#000f1a;
font-size:25px;
color:#66c2ff;
padding:10px;
font-family:arial narrow;
border-bottom:#66c2ff solid 1px;

}
.profile_detail table
{
margin-left:30px;
}

.profile_detail
{
background-color:#E6E6E6;
border:solid 2px ;
margin-left:300px;
margin-right:10px;
margin-top:10px;

}

.profile_detail input[type="password"], .profile_detail input[type="text"], .profile_detail input[type="email"], .profile_detail input[type="number"],select
{
	border-style:solid;
	border-width:2px;
	border-color:#383838;
	border-radius:4px;
	padding-left:40px;
	margin: 10px 5px;
	height:27px;
	width:180px;
}

.profile_detail input[type='button']
{
	background-position:1px;
	background-color:#66c2ff;
	color:#000f1a;
	border-width:1.5px;
	border-color:#004c80;
	border-radius:3px;
	font-family:arial narrow;
	width:120px;
	font-size:18px;
	margin-left:10px;
	margin-top:110px;
}

.profile_detail input[type='button']:hover
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
<div style=";background-color:#004c80;height:40px;font-weight:bold;color:#ffffff;font-size:15px;"><br/>Staff UserName:<?php echo $row["StaffUsername"]; ?><span style="float:right;">Date:<?php date_default_timezone_set("Asia/Kuala_Lumpur");echo date("d-m-Y H:i:s");?></span></div>
<div style=";background-color:black; height:1px;"></div>


<ul class="profile">

<div class="leftprofile">
<li><a href="staff_homepage.php"><span style="clear:both;">Profile</span></a></li>

<li><a href="staff_editProfile.php"><span style="clear:both;">Edit Profile</span></a></li>
<li><a href="staff_uploadImage.php"><span style="clear:both;">Upload Image</span></a></li>
<li><a href="staff_searchitem.php"><span style="clear:both;">Search</span></a></li>
<li><a href="staff_viewitem.php"><span style="clear:both;">View Item</span></a></li>
<li><a href=""><span style="clear:both;">Log Out</span></a></li>

</div>

</ul>

<div class="profile_detail">
<div class="title">
Edit Profile
</div>
<form name="editfrm" method="post">
<table>
<tr>
<td><span style="font-weight:bold;">Full Name  </span></td>
<td>:</td>
<td><input type="text" name="fullname" value="<?php echo $row['StaffName']; ?>"/><span id="one"style="font-size:14px;font-weight:bolder;color:red;"></span></td>
</tr>
<tr>
<td><span style="font-weight:bold;">User Name </span></td>
<td>:</td>
<td><input type="text" name="UserName" value="<?php echo $row['StaffUsername']; ?>" readonly="readonly"/></td>
</tr>
<tr>
<td><span style="font-weight:bold;">Age </span></td>
<td>:</td>
<td> <input type="number" name="age" value="<?php echo $row['StaffAge']; ?>" min=18 max=100/><span id="two"style="font-size:14px;font-weight:bolder;color:red;"></span></td>
</tr>
<tr>
<td><span style="font-weight:bold;">Email </span></td>
<td>:</td>
<td> <input type="text" name="email" value="<?php echo $row['StaffEmail']; ?>" min=18 max=100/><span id="two"style="font-size:14px;font-weight:bolder;color:red;"></span></td>
</tr>
<tr>
<td><span style="font-weight:bold;">Identification No/IC </span> </td>
<td>:</td>
<td> <input type="text" name="identification" value="<?php echo $row['StaffIC']; ?>" maxlength="12" /><span id="three"style="font-size:14px;font-weight:bolder;color:red;"></span></td>
</tr>
<tr>
<td><span style="font-weight:bold;">Gender </span></td>
<td>:</td>
<td> <input type="text" name="gender" disabled value="<?php echo $row['StaffGender']; ?>"/><span id="four"style="font-size:14px;font-weight:bolder;color:red;"></span></td>
</tr>
<tr>
<td><span style="font-weight:bold;">Contact Number </span></td>
<td>:</td>
<td> <input type="text" name="contactNumber" value="<?php echo $row['StaffContactNo']; ?>"/><span id="four"style="font-size:14px;font-weight:bolder;color:red;"></span></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" name="btnupdate" value="Update" onclick="return update();"/><input type="submit" name="btncancel" value="Cancel"/></td>
</tr>
</table>
</form>
</div>

<div style=";background-color:black;height:1px;margin-top:365px;"></div>
<div style=";background-color:#004c80;height:62px"><br/></div>
</div>

</body>
</html>
