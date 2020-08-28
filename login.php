<?php
session_start();
require_once("function.php");
		if(isset($_POST['submit'])!=NULL)
		{
			$con=mysqli_connect("localhost","root","","aditya");
				if(!$con)
					{ 
						echo "conecction fail";
					}
				$flag=0;
				$name = isset($_POST['uname']) ? $_POST['uname'] : '';
				$id = isset($_POST['psw']) ? $_POST['psw'] : '';
				//echo $name."<br>".$id;
				$_SESSION['id']=$name;
				$query1 = mysqli_query($con, "SELECT * FROM users");
				if($query1)
					{
						while($row = mysqli_fetch_assoc($query1))
							{
								if(($row['username']==$name)&&($row['password']==$id))
									{
										if($row['username']!="Admin")
											{
												redirect("main.php");
											}
										else
											{
												redirect("register.php");
											}
										$flag=1;
									}
	
							}
						if($flag==0)
							{
								echo"invalid username or password";
							}

					}
						else
						{
							echo"query has failed server is down ";
						}
					}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style7.css">
<link rel="stylesheet" type="text/css" href="style1.css">
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
    <li><a href="logout.php"style="color:lightblue;margin-left:60px;">Logout</a></li>
    
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
		<h2>Login</h2>
	</div>
	
<form action="login.php" method="post">
  
  	<div class="input-group">
			<label>Username</label>
			<input type="text" name="uname" required>
	</div>
	<div class="input-group">
			<label>Password</label>
			<input type="password" id="myInput" name="psw" required>
	</div>
	<input type="checkbox" onclick="myFunction()" >Show Password<br>
    <div class="input-group">
			<button type="submit" name="submit" class="btn">Login</button>
	</div>
        
  
  
</form>
<script type="text/javascript">
	function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>
