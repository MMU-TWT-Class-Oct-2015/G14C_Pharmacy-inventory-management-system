<?php
if(isset($_POST["btnadd"]))
{
  $name = $_POST["fullname"];
  $username = $_POST["UserName"];
  $ic = $_POST["identification"];
  $gender = $_POST["gender"];
  $contact = $_POST["contactNumber"];
  $age = $_POST["age"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  mysql_query("insert into staff(StaffName,StaffPassword,StaffUsername,StaffEmail,StaffAge,StaffGender,StaffIC,StaffContactNo,StaffImage) values
  ('$name','$password','$username','$email','$age','$gender','$ic','$contact','Storage/profilepicture.jpg')");

  header("location:homepage.php");
}

if(isset($_POST["cancel"]))
{
  header("location:homepage.php");
}
?>
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
width:600px;
height:600px;
margin-left:200px;
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
<form name="registerfrm" method="POST">
<table>
<tr>
  <td><span style="font-weight:bold;">Full Name  </span></td>
  <td>:</td>
  <td><input type="text" name="fullname" placeholder="Your Name"/><span id="one"style="font-size:14px;font-weight:bolder;color:red;"></span></td>
  </tr>
  <tr>
  <td><span style="font-weight:bold;">User Name </span></td>
  <td>:</td>
  <td><input type="text" name="UserName" placeholder="Your Username"/></td>
  </tr>
  <tr>
  <td><span style="font-weight:bold;">Password </span></td>
  <td>:</td>
  <td> <input type="password" name="password" placeholder="Your Password" min=1 max=12/><span id="two"style="font-size:14px;font-weight:bolder;color:red;"></span></td>
  </tr>
  <tr>
  <td><span style="font-weight:bold;">Age </span></td>
  <td>:</td>
  <td> <input type="number" name="age" placeholder="You Age" min=18 max=100/><span id="two"style="font-size:14px;font-weight:bolder;color:red;"></span></td>
  </tr>
  <tr>
  <td><span style="font-weight:bold;">Email </span></td>
  <td>:</td>
  <td> <input type="text" name="email" placeholder="Your Email" min=18 max=100/><span id="two"style="font-size:14px;font-weight:bolder;color:red;"></span></td>
  </tr>
  <tr>
  <td><span style="font-weight:bold;">Identification No/IC </span> </td>
  <td>:</td>
  <td> <input type="text" name="identification" placeholder="Your identification No/IC" maxlength="12" /><span id="three"style="font-size:14px;font-weight:bolder;color:red;"></span></td>
  </tr>
  <tr>
  <td><span style="font-weight:bold;">Gender </span></td>
  <td>:</td>
  <td> <input type="radio" name="gender" value="Male"/>Male<span id="four"style="font-size:14px;font-weight:bolder;color:red;"></span></td>
  <td> <input type="radio" name="gender" value="Female"/>Female<span id="four"style="font-size:14px;font-weight:bolder;color:red;"></span></td>
  </tr>
  <tr>
  <td><span style="font-weight:bold;">Contact Number </span></td>
  <td>:</td>
  <td> <input type="text" name="contactNumber" placeholder="Your Contact Number"/><span id="four"style="font-size:14px;font-weight:bolder;color:red;"></span></td>
  </tr>
</table>
<input type="submit" name="register" value="Register"> <input type="submit" name="cancel" value="cancel"> 
</form>
</div>
<div style=";background-color:black;height:1px;margin-top:310px;"></div>
<div style=";background-color:#004c80;height:62px"><br/></div>
</div>

</body>
</html>
