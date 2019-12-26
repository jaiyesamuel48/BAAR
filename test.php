<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
<style type="text/css">
.banna{
	height:100px;
	width:100%;
	margin-top:0px;
	margin-left:1px;
	background: blue;
}
#avt{
	margin-top:-80px;
}

.wban {
	height: 20px;
	margin-left:0px;
	margin-top:-20px;
	width: 1000px;
	margin-bottom:0px;
	background-image: url('img/floor2.jpg');
}

.icon-bar {
  width:90px;
  background-color: #555;
  border:3px solid white;
}



#content{
	width:900px;
	height:374px;
	margin-left:98px;
	margin-top:12px;
	border:1px solid #c0c0c0;
   
}
#cont{
	border:3px solid pink;
	width:283px; 
	height:350px;
	margin-left:10px;
	margin-top:10px;
	float:left;
}

#cont2{
	border:3px solid red;
	width:283px; 
	height:350px;
	margin-left:10px;
	margin-top:10px;
	float:left;
}
#cont3{
	border:3px solid tan;
	width:283px; 
	height:350px;
	margin-left:10px;
	margin-top:10px;
	float:left;
}

.footer{
	height:50px;
	width: 1000px;
	background-image: url('img/floor2.jpg');
}
body {margin:0}
.active {
  background-color: #4CAF50;
}
img {
  border-radius: 50%;
}
 .dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

</style>
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 10px;
  font-size: 16px;
  border: none;
  margin-left:17px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a{
  color: black;
  padding: 10px 14px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body>
 <div class="banna"> </div> 
 
<div color="black" id="avt"><img src="img/img_avatar.png" alt="Avatar" style="width:100px"> WELCOME </img></div>
<div class="wban"> </div>
<img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px">


<div id="content"> 
	<div id="cont">
	 <center>load drinks</center>
<div class="dropdown">
 
  <button class="dropbtn">Soft Drinks</button>
  <div class="dropdown-content">
    <a href="coke.php?drink=Pepsi"><font color="blue">Pepsi</font></a>
    <a href="coke.php?drink=Coke">Coke</a>
    <a href="coke.php?drink=bottle water">bottle water</a>
	<a href="coke.php?drink=Malt">Malt</a>
	<a href="coke.php?drink=Fanta">fanta</a>
	<a href="coke.php?drink=fearless">Fearless</a>"><h3>Fearless<h3>
	<a href="coke.php?drink=amarula">amarula</a>"><h3>Amarula<h3>
  </div>
   
</div><br>
	
</div>
	<div id="cont2"><h3><u><center><font color="brown">Load Food</font></center></u></h3></div>  
	<div id="cont3"><h3><u><center><font color="brown">Load Others</font></center></u></h3></div>  
</div>


</body>
</html>