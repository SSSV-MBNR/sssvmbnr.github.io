<?php
require_once("function.php");
if(isset($_POST['submit'])!=NULL)
{
	$check=0;
session_start();
$con=mysqli_connect("localhost","root","","aditya");
$name1 = isset($con,$_POST['uname']) ? $_POST['uname'] : '';
$id = isset($con,$_POST['email']) ? $_POST['email'] : '';
$password = isset($con,$_POST['psw']) ? $_POST['psw'] : '';

$sel="SELECT * FROM users";
$quert=mysqli_query($con,$sel);
while($row=mysqli_fetch_assoc($quert))
{
	if($row['username']==$name1)
	{
		$check=1;
	}
}
if($check!=1)
{
$ins="INSERT INTO users (username,password,email) VALUES ('$name1','$password','$id')";
$quer=mysqli_query($con,$ins);
		if($quer)
		{
			echo "<script type='text/javascript'>alert('your username has been registered);</script>";
			echo "done";
		}
		else
		{
			echo "failed";
		}
}
else
{
	echo " <style=font-color:red;> "."*username already taken"."</style>";
}
}
?>



<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" type="text/css" href="style7.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>

<div class="container">
    <div class="logo">
        <a href="#" style="width:850px;"><img src="images/logo.jpeg " style="width:150px;height:250px" alt="logo"></a>
    </div>
<div class="navbar">

<div class="icon-bar" onclick="Show()">
    <i></i>
    <i></i>
    <i></i>
</div>

<ul id="nav-lists">
    <li class="close"><span onclick="Hide()">×</span></li>

    <li><a href="#" style="color:lightblue;margin-left:320px;">Sri Sathya Sai Vidyalayam</a></li>
    <li><a href="logout.php"style="color:lightblue;margin-left:65px;">Logout</a></li>
    
</ul>

</div>
</div>
<div class="body">
    
</div>

<script>
var navList = document.getElementById("nav-lists");
function Show() {
navList.classList.add("_Menus-show");
}

function Hide(){
navList.classList.remove("_Menus-show");
}
</script>
	<div class="header">
		<h2>Register</h2>
	</div>
	<form action="register.php" method="post">
  			<div class="input-group">
				<label>Username</label>
				<input type="text" id="txtUsername" name="uname">
			</div>

			<div class="input-group">
				<label>Email</label>
				<input type="text" name="email">
			</div>

			<div class="input-group">
				<label>Password</label>
				<input type="text" name="psw" id="txtPassword">

				 
			</div>
			<div class="input-group">
				<label>Confirm Password</label>
				<input type="text" id="txtConfirmPassword" name="psw_1">
			</div>


			<div class="input-group">
				<button type="submit" name="submit" id="btnSubmit" class="btn">Register</button>
			</div>
	</form>


	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var psw = $("#txtPassword").val();
            var psw_1 = $("#txtConfirmPassword").val();
            if (psw != psw_1) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });

    
</script>
 
</body>
</html>
