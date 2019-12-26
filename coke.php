<?php
//create a connection to the host 
$db_connect=mysql_connect("localhost","root");
?>
<?php 
//select a database 
$db_select=mysql_select_db("bar", $db_connect);
?>
<?php
if(isset($_POST['bsave'])){
	//$dupload = $_POST['upload'];
	$dbrand = $_POST['brand'];
	$dsize = $_POST['bottlesize'];
	$alcp = $_POST['alcohol'];
	$price=$_POST['pri'];
	$car=$_POST['cat'];

function GetImageExtension($imagetype){
    if (empty($imagetype))
    return false;
    switch($imagetype)
    {
      case 'image/jpg': return '.jpg';
        default: return false;
    } 
}
if(!empty($_FILES["upfileload"]["name"])){
     $file_name = $_FILES["upfileload"]["name"];
     $temp_name = $_FILES["upfileload"]["tmp_name"]; 
     $imgtype = $_FILES["upfileload"]["type"];
     $ext = GetImageExtension($imagetype);
	 $id = rand();
     $imagename = $id.".jpg";
   // $imagename = $_FILES["upload"]["name"];
     $target_path = "img/".$imagename;
     
if(move_uploaded_file($temp_name, $target_path)){
    //$geid = rand();
	$query = mysql_query("INSERT INTO drinks(dname, dsize, alcper, dpic, price, category)
					VALUE('{$dbrand}', '{$dsize}', '{$alcp}', '{$target_path}', '{$price}', '{$car}')", $db_connect);
//if ($query){$display = echo "Successful";
//exit;			

if($query){  
				 
header("Location:Adminpage.php");
exit;
}else{
header("Location:coke?check=2");
exit;
}
    
}else{
	 // if !empty
 header("Location:coke?check=3");
exit;
 }
}else{
	 // if move upload file
 header("Location:coke?check=4");
exit;
}

	}
	

?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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



#content{
	width:900px;
	height:374px;
	margin-left:98px;
	margin-top:12px;
	border:1px solid #c0c0c0;
	padding: 
   
}
#coke{
	height: 375px;
	width: 250px;
	background-color: white;
	float: left;
	padding: -10px;
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
.item {
	padding-top: 40px;
	padding-left: 300px;
	
}
.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

</style>
</head>
<body>
 <div class="banna"> </div> 
 
<div color="black" id="avt"><img src="img/img_avatar.png" alt="Avatar" style="width:100px"><a href="Adminpage.php">Back</a> ||  WELCOME </img></div>
<div class="wban"> </div>
<img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px">


<div id="content"> 
<?php
if(isset($_GET['drink'])){
	$dr = $_GET['drink'];
}?>
<div id="coke">
<?php
$img = "img/".$dr.".jpg";
echo "<img src='$img' width='290' height='350'>";
?>
 </div>
	<font color= "blue" > <?php $display; ?> </font>
	<form action="coke.php"  enctype="multipart/form-data" method="post">
	
  <?php echo strtoupper($dr); ?>:<br>

<div class="item">
Brand: 
<input type="text" name="brand" placeholder="Brand Name e.g coke"> 
<br>
alcohol:
<input type="text" name="alcohol" placeholder="%alcohol">
<br>
bottle size:
<input type="text" name="bottlesize" placeholder="bottle size">
<br>
price:
<input type="text" name="pri" placeholder="price in Naira (N)">
<br>
Category:
<select name="cat">
	<option>Soft Drinks</option>
	<option>Wine</option>
	<option>Hot Drinks</option>
	<option>Pepper soup</option>
	<option>Food</option>
	<option>Snaks</option>
</select>
<br>
picture
<br>
<input type="file" name="upfileload">
  
  <br>
 
  <input type="submit" name="bsave" value="Submit">
</form>
</div>

</div>


</body>
</html>