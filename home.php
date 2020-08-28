<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style1.css">

<style>
.abc {
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top:3%;

}
</style>
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
    <li><a href="login.php"style="color:lightblue;margin-left:70px;">Login</a></li>
    
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


<img class="abc" src="images/main.jpeg" alt="Paris" style="width:53%;height:90%">



 
</body>
</html>
