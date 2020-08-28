

<!DOCTYPE html>
<html>
<title>Main page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="style7.css">
<link rel="stylesheet" type="text/css" href="style1.css">

<style>
.mySlides {display:none}
</style>
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

    <li><a href="#" style="color:lightblue;margin-left:280px;">Sri Sathya Sai Vidyalayam</a></li>
    <li><a href="logout.php"style="color:lightblue;margin-left:50px;">Logout</a></li>
    
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
<br>
<br>


<div class="w3-content w3-display-container">

<div class="w3-display-container mySlides">
  <img src="images/1.jpeg"  width="900" height="400">
  <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
    <a href="class1.php">class 1</a>
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="images/2.jpeg"  width="900" height="400">
  <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
   <a href="class2.php">class 2</a>
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="images/3.jpeg"  width="900" height="400">
  <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
    <a href="class3.php">class 3</a>
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="images/4.jpeg"  width="900" height="400">
  <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
    <a href="class4.php">class 4</a>
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="images/5.jpeg"  width="900" height="400">
  <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
    <a href="class5.php">class 5</a>
  </div>
</div>


<div class="w3-center">
  <div class="w3-section">
    <button class="w3-button w3-red" onclick="plusDivs(-1)">❮ Prev</button>
    <button class="w3-button w3-red" onclick="plusDivs(1)">Next ❯</button>
  </div>
  <button class="w3-button demo" onclick="currentDiv(1)">1</button> 
  <button class="w3-button demo" onclick="currentDiv(2)">2</button> 
  <button class="w3-button demo" onclick="currentDiv(3)">3</button> 
   <button class="w3-button demo" onclick="currentDiv(4)">4</button> 
  <button class="w3-button demo" onclick="currentDiv(5)">5</button> 
  
</div>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}


function currentDiv(n) {
  showDivs(slideIndex = n);
}


function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }

  x[slideIndex-1].style.display = "block";  

}
</script>

</body>
</html>
