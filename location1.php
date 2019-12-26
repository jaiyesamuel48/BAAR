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

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content=" width=device-width, initial-scale=1">
<title><?php echo "TABLE ". $tab;?></title>
<style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
  padding: left;
}
.navcont a:hover {
  background: pink;
  color: black;
 
}

#show{
	width:200px;
	height:auto;
	border:2px solid red;
	float:left;
	margin-top:10px;
	margin-left:10px;
	text-align:center;
}
.sty {
	height:100%;
	width:100%;
	background-color: blue;
	border:10px;
}
</style>
</head>
<body>

<form action="orderpage.php" method="POST"> 
<div class="navbar">
  <a href="#drink">Drink</a>
  <a href="#water">Water</a>
  <a href="#food">Food</a>
<div class="navcont"><a href="multy.php"><blink>Hook up!</blink></a></div>
  
</div>
<br><br>
  <a name="drink"></a>
 <center> <h1> <font color="gold"><?php echo "YOU ARE ON TABLE ". $tab;?></font></h1></center>
  <h1>Drink</h1>

  <div class="sty">
 <?php
	$selectinfo = mysql_query("SELECT * FROM drinks WHERE category='Drinks'", $db_connect);
		
		while($row = mysql_fetch_array($selectinfo)){
			$id = $row['id'];
			$img = $row['dpic'];
			$name =  $row['dname'];
			$pric = $row['price'];
			echo"<div id=\"show\">";
			echo "<img src=\"$img\" width=\"170\" height=\"150\">";
			echo "<b>".strtoupper($name)."</b><br> "."<s>N</s>".$pric ;
			echo  "<br>"."Alcohol: ".$row['alcper']."%";
			echo "<input type=\"checkbox\" name=\"check1[]\" value=\"$name\">";
			echo"</div>";
		}
  ?>
  <p style="float:bottom; margin-top:0%;"></p>
  </div>
<br>
<br>
  
   <a name="water"></a>

 <p style="float:bottom; margin-top:40%;"></p>
<hr> 
<div style="height: 40%; width:100%; color:blue; padding-top:-100%; background-color: lightblue;">  
 <p> <h1>Water</h1></p> 
 <?php
	$selectinfo = mysql_query("SELECT * FROM drinks WHERE category='Wine'", $db_connect);
		
		while($row = mysql_fetch_array($selectinfo)){
			$id = $row['id'];
			$img = $row['dpic'];
			$name = $row['dname'];
			$pric = $row['price'];
			echo"<div id=\"show\">";
			echo "<img src=\"$img\" width=\"200\" height=\"180\">";
			echo "<b>".strtoupper($name)."</b><br> "."<s>N</s>".$pric ;
			echo  "<br>"."Alcohol: ".$row['alcper']."%";
			echo "<input type=\"checkbox\" name=\"check1[]\" value=\"$name\">";
			echo"</div>";
		}
  ?>
  </div>
<a name="food"></a>
 
  <p style="float:bottom; margin-top:10%;"></p>
<hr> 
  <p> <h1>Food</h1></p>
  <div style="height: 100%; widht:100%; color:blue; padding-top:30px; background-color: lightblue;"> 
 <?php
	$selectinfo = mysql_query("SELECT * FROM drinks WHERE category='Pepper soup'", $db_connect);
		
		while($row = mysql_fetch_array($selectinfo)){
			$id = $row['id'];
			$img = $row['dpic'];
			$name = $row['dname'];
			$pric = $row['price'];
			echo"<div id=\"show\">";
			echo "<img src=\"$img\" width=\"200\" height=\"180\">";
			echo "<b>".strtoupper($name)."</b><br> "."<s>N</s>".$pric ;
			echo  "<br>"."Alcohol: ".$row['alcper']."%";
			echo "<input type=\"checkbox\" name=\"check1[]\" value=\"$name\">";
			echo"</div>";
		}
  ?>
  </div>
<br><br>

<input type="submit" name="bnsub" value="Ok">
</form>
</body>
</html>
