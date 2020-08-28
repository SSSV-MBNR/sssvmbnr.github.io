<!DOCTYPE html>
<html>
<head>

		<link rel="stylesheet" type="text/css" href="style1.css">

<style>


.img1 ,.img3, .img5{
  float: left;
}

.clearfix {
  overflow: auto;
}

.img2 ,.img4,.img6{
  float: right;
}
h6{
  font-size:300%;
  text-align: center;
  color:blue;
  margin-top: 5%;
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

    <li><a href="#" style="color:lightblue;margin-left:300px;">Sri Sathya Sai Vidyalayam</a></li>
    <li><a href="main.php"style="color:lightblue;margin-left:65px;">Back</a></li>
    
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

<br>

<div class="clearfix" style="border: 3px solid #4CAF50;padding: 5px;border-radius:50px;width:70%;margin-left:15%;">
  <img class="img1" src="images/telugu.jpeg" alt="Telugu" width="200" height="170">
  <a href="video.html"><h6>Telugu</h6></a>
</div>
<br>
<div class="clearfix" style="border: 3px solid #4CAF50;padding: 5px;border-radius:50px;width:70%;margin-left:15%;" >

  <img class="img2" src="images/hindi.jpeg" alt="Hindi" width="200" height="170">
  <a href="video.html"><h6>Hindi</h6></a>
</div>
<br>
<div class="clearfix" style="border: 3px solid #4CAF50;padding: 5px;border-radius:50px;width:70%;margin-left:15%;">
  <img class="img3" src="images/english.jpeg" alt="English" width="200" height="170">
  <a href="video.html"><h6>English</h6></a>
</div>
<br>
<div class="clearfix" style="border: 3px solid #4CAF50;padding: 5px;border-radius:50px;width:70%;margin-left:15%;">
  <img class="img4" src="images/maths.jpeg" alt="Maths" width="200" height="170">
  <a href="video.html"><h6>Maths</h6></a>
</div>
<br>
<div class="clearfix" style="border: 3px solid #4CAF50;padding: 5px;border-radius:50px;width:70%;margin-left:15%;">
  <img class="img5" src="images/science.jpeg" alt="Science" width="200" height="170">
  <a href="video.html"><h6>Science</h6></a>
</div>
<br>
<div class="clearfix" style="border: 3px solid #4CAF50;padding: 5px;border-radius:50px;width:70%;margin-left:15%;">
  <img class="img6" src="images/social.jpeg" alt="Social" width="200" height="170">
  <a href="video.html"><h6>Social</h6></a>
</div>
<br>
</body>
</html>
