<?php ob_start(); 
session_start();?>
<?php require_once("connection.php");?>
<?php
if(isset($_POST['bnt'])){
 $amut = $_POST['tamut'];
 if(empty($amut)){
	 echo "<script>alert('please set a cut off!');</script>";
 }else{
	 $id=1;
 $query = mysql_query("UPDATE cutoff SET 
					   amout='{$amut}' WHERE id='{$id}'", $db_connect);
if($query){
	
	header("Location:Adminpage.php?cut=1");
	exit;
}
 }
}
?>
<!DOCTYPE html>

<html>
<title>Admin Page</title>
        <meta http-equiv="refresh" content="60" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link re="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 36px;
}

.icon-bar a:hover {
  background-color: #000;
  padding: 15px;
}


#content{
	width:1000px;
	height:374px;
	margin-left:98px;
	margin-top:0px;
	margin-left:10px;
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
	width:680px; 
	height:350px;
	margin-left:300px;
	margin-top:-55px;

	float:;
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
  margin-left:0px;
}
#order {
	height: auto;
	width:auto;
	margin-top:-30px;
	border: 5px solid pink; 
	background:;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: -20px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  box-radius: 20px
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
<form action="cutoff.php" method="post">
 <div class="banna"> </div> 
 
<div color="black" id="avt"><img src="img/img_avatar.png" alt="Avatar" style="width:100px"> WELCOME </img> <a href="Adminpage.php">Back </a></div>
<div class="wban"> </div>
<img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px">

 <center><h3><font color="coral" style="times new roman">
 Table Update
<p><input type="text" name="tamut" placeholder="Cut Off Amount"></p>
<p><input type="submit" name="bnt" value="Set CutOff Amount"></p> 
 </font></h3></center>


</form>

</body>
</html>
<?php ob_end_flush(); ?>