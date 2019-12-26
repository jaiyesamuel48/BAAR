<?php ob_start(); ?>
<?php session_start();
$tab = $_SESSION['tablenum'];
 ?>

<?php
//create a connection to the host 
$db_connect=mysql_connect("localhost","root");
?>
<?php 
//select a database 
$db_select=mysql_select_db("bar", $db_connect);
?>
<?php
if(isset($_GET['od'])&& $_GET['od']==7){
	echo"<script>alert('Please Make an Order');</script>";
}
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap.css">
<style>

body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border:0;
  background-color: white;
}

/* Style the buttons inside the tab */
.tab button {
  border: 1px solid black;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: white;
  color: green;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: ;
}

/* Style the tab content */
 .tabcontent {
  display: none;
  color:black;
  padding: 6px 12px;
  border-style:0;
  border-radius: ;
  
}
#show{
	width:130px;
	height:auto;
	border:0px solid red;
	float:left;
	margin-top:10px;
	margin-left:10px;
	text-align:center;
}

a{
	text-decoration:none;
}
.op {
	height:100px;
	width: 1050px;
	background-color:white;
}
.op:hover{
	height:100px;
	width:100px;
	color:black;
}
.od {
	height:50px;
	width: 1050px;
	background-color: brown;
	margin-top:-17px
}
</style>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.08s ease;
}
.active {
  background-color: #717171;
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 9.5s;
  animation-name: fade;
  animation-duration: 9.5s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.okb {
	margin-top:auto;
	margin-left:center;
	
}
div.scrollmenu {
  background-color: #333;
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

div.scrollmenu a:hover {
  background-color: #777;
}
.btn {
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}
.success {
  border-color: #4CAF50;
  color: green;
}

.success:hover {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<div class="scrollmenu">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About Us</a>
  <a href="#support">Hire</a>
  <a href="#blog">Blog</a>
  <a href="#tools">Consultation</a>  
  <a href="#base">Business</a>
  <a href="#custom">Custom</a>
  <a href="#more">More</a>
  <a href="#logo">Logo</a>
  <a href="#friends">Friends</a>
  <a href="#partners">Partners</a>
  <a href="#people">People</a>
  <a href="#work">Work</a>
</div><br>
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/img_nature_wide.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/img_snow_wide.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/img_snow_wide.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<div class="container"><div class="alert alert-info"><center><p><h2><font color="green"><?php echo " <strong><font color='purple'>Welcome! </font></strong>you are on Table ". $tab;?> <font></h2> <a href="index.php">Wrong Table? <font color='red'>Go Back</font></a></p></center></div></div>

<center><div class="tab">
  <button class="btn success" onclick="openCity(event, 'Soft Drinks')" id="defaultOpen">Food</button>
  <button class="btn btn-primary" onclick="openCity(event, 'Hot Drinks')">Drinks</button>


</div>
</center>
<form action="orderpage.php" method="POST"> 
<div id="Soft Drinks" class="tabcontent">
  
   
  <?php
	$selectinfo = mysql_query("SELECT * FROM drinks WHERE category='Soft Drinks'", $db_connect);
		
		while($row = mysql_fetch_array($selectinfo)){
			$id = $row['id'];
			$img = $row['dpic'];
			$name =  $row['dname'];
			$pric = $row['price'];
			echo"<div id=\"show\">";
			echo "<img src=\"$img\" width=\"100\" height=\"100\">";
			echo "<b>".strtoupper($name)."</b><br> "."<s>N</s>".$pric;
			echo  "<br>"."Alcohol:".$row['alcper']."%";
			echo "<input type=\"checkbox\" name=\"check1[]\" value=\"$name\">";
			echo"</div>";
		}
  ?>
<center><div class="col-md-12" style="display:inline-block"> <button type="submit" class="btn btn-primary" name="bnsub">ok</button> </h3></div></center>
  
  <br>
  
</div>

<div id="Hot Drinks" class="tabcontent">

  <?php
	$selectinfo = mysql_query("SELECT * FROM drinks WHERE category='Wine'", $db_connect);
		
		while($row = mysql_fetch_array($selectinfo)){
			$id = $row['id'];
			$img = $row['dpic'];
			$name =  $row['dname'];
			$pric = $row['price'];
			echo"<div id=\"show\">";
			echo "<img src=\"$img\" width=\"100\" height=\"100\">";
			echo "<b>".strtoupper($name)."</b><br> "."<s>N</s>".$pric ;
			echo  "<br>".$row['alcper']."%";
			echo "<input type=\"checkbox\" name=\"check1[]\" value=\"$name\">";
			echo "</div>";
		}
		
  ?>
<center><div class="okb" height="100px" width="100px"> <input type="submit" class="btn btn-primary" name="bnsub" value="Ok"> </h3></div></center>

</div>

<div id="Food" class="tabcontent">

   <?php
	$selectinfo = mysql_query("SELECT * FROM drinks WHERE category='Pepper soup'", $db_connect);
		
		while($row = mysql_fetch_array($selectinfo)){
			$id = $row['id'];
			$img = $row['dpic'];
			$name = $row['dname'];
			$pric = $row['price'];
			echo"<div id=\"show\">";
			echo "<img src=\"$img\" width=\"400\" height=\"400\">";
			echo "<b>".strtoupper($name)."</b><br> "."<s>N</s>".$pric ;
			echo  "<br>"."Alcohol: ".$row['alcper']."%";
			echo "<input type=\"checkbox\" name=\"check1[]\" value=\"$name\">";
			echo"</div>";
		}
  ?>
   <center><h3><input type="submit" name="bnsub" value="Ok"></h3></center>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   </form>
   <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
  setTimein(showSlides, 3000);
}
</script>
</body>
</html> 
