<?php

include("connection.php");

// save the session variable in another variable
$sess_sid = $_SESSION["staff_id"];

// finding the specific member record based on the session variable
$result = mysql_query("select * from staff where StaffID = $sess_sid");
$row=mysql_fetch_assoc($result);

if(!isset($_SESSION["staff_id"]))
{
 header("location:homepage.php");
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

<li><a href="staff_editProfile.php"><span style="clear:both;">Edit Profile</span></a>
</li>
<li><a href="staff_uploadImage.php"><span style="clear:both;">Upload Image</span></a></li>
<li><a href="staff_searchitem.php"><span style="clear:both;">Search</span></a></li>
<li><a href="staff_viewitem.php"><span style="clear:both;">View Item</span></a></li>
<li><a href="logout.php"><span style="clear:both;">Log Out</span></a></li>

</div>

</ul>

<div class="profile_detail">
<div class="title">
Profile
</div>
<table>
<tr>
<td><img src="<?php echo $row["StaffImage"]; ?>" height="200px" width="200px"/></td>
<td></td>
<td></td>
</tr>
<tr>
<td><span style="font-weight:bold;">Full Name</span></td>
<td>:</td>
<td><?php echo $row["StaffName"]; ?></td>
</tr>
<tr>
<td><span style="font-weight:bold;">User Name</td>
<td>:</td>
<td><?php echo $row["StaffUsername"]; ?></td>
</tr>
<tr>
<td><span style="font-weight:bold;">Gender</span></td>
<td>:</td>
<td><?php echo $row["StaffGender"]; ?></td>
</tr>
<tr>
<td><span style="font-weight:bold;">Age</span></td>
<td>:</td>
<td><?php echo $row["StaffAge"]; ?></td>
</tr>
<tr>
<td><span style="font-weight:bold;">Email Address</span></td>
<td>:</td>
<td><?php echo $row["StaffEmail"]; ?></td>
</tr>
<tr>
<td><span style="font-weight:bold;">IC</span></td>
<td>:</td>
<td><?php echo $row["StaffIC"]; ?></td>
</tr>
<tr>
<td><span style="font-weight:bold;">Contact Number</span></td>
<td>:</td>
<td><?php echo $row["StaffContactNo"]; ?></td>
</tr>
</table>
</div>

<div style=";background-color:black;height:1px;margin-top:391px;"></div>
<div style=";background-color:#004c80;height:62px"><br/></div>
</div>

</body>
</html>
