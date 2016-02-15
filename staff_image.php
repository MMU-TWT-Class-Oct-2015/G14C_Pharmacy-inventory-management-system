<?php
include("connection.php");

if(isset($_POST["btnconfirm"]))
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
<form method="post">
<?php
  $name = $_POST["fullname"];
  $username = $_POST["UserName"];
  $ic = $_POST["identification"];
  $gender = $_POST["gender"];
  $contact = $_POST["contactNumber"];
  $age = $_POST["age"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $allowedExts = array("gif", "jpeg", "jpg", "png");
  $temp = explode(".", $_FILES["file"]["name"]);
  $extension = end($temp);

  if ((($_FILES["file"]["type"] == "image/gif")
  || ($_FILES["file"]["type"] == "image/jpeg")
  || ($_FILES["file"]["type"] == "image/jpg")
  || ($_FILES["file"]["type"] == "image/pjpeg")
  || ($_FILES["file"]["type"] == "image/x-png")
  || ($_FILES["file"]["type"] == "image/png"))
  && ($_FILES["file"]["size"] < 2000000)
  && in_array($extension, $allowedExts)) {
    if ($_FILES["file"]["error"] > 0) {
      echo "<span style='font-family:Century Gothic;font-size:10.5pt;'>Return Code: " . $_FILES["file"]["error"] . "</span><br>";
    } else {
      echo "<span style='font-family:Century Gothic;font-size:10.5pt;'>Upload: " . $_FILES["file"]["name"] . "</span><br>";
      echo "<span style='font-family:Century Gothic;font-size:10.5pt;'>Type: " . $_FILES["file"]["type"] . "</span><br>";
      echo "<span style='font-family:Century Gothic;font-size:10.5pt;'>Size: " . ($_FILES["file"]["size"] / 1024) . " kB</span><br>";
      echo "<span style='font-family:Century Gothic;font-size:10.5pt;'>Temp file: " . $_FILES["file"]["tmp_name"] . "</span><br>";
      echo "<span style='font-family:Century Gothic;font-size:10.5pt;'>Full Name: " . $name . "</span><br>";
      echo "<span style='font-family:Century Gothic;font-size:10.5pt;'>Username: " . $username . "</span><br>";


      move_uploaded_file($_FILES["file"]["tmp_name"],
        "StaffPic/" . $_FILES["file"]["name"]);

        $path = "StaffPic/" . $_FILES["file"]["name"];
        echo "Stored in: " . $path;

  mysql_query("insert into staff (StaffName,StaffPassword,StaffUsername,StaffEmail,StaffAge,StaffGender,StaffIC,StaffContactNo,StaffImage) values('$name','$password','$username','$email',$age,'$gender','$ic','$contact','$path')");
  }
}
else {
  echo "Invalid file";
}
?>
<p class="submit"><input type="submit" name="btnconfirm" value="Confirm"/></p>
</form>
</div>
<div style=";background-color:black;height:1px;margin-top:310px;"></div>
<div style=";background-color:#004c80;height:62px"><br/></div>
</div>
</body>
</html>
