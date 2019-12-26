<?php require_once("connection.php");?>
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
<?php
if(isset($_GET['cut']) && $_GET['cut']==1){
	echo "<script>alert('CutOff Amount Have Been set');</script>";
}
?>
 <div class="banna"> </div> 
 
<div color="black" id="avt"><img src="img/img_avatar.png" alt="Avatar" style="width:100px"> WELCOME </img> <a href="cutoff.php">LoadCutOff </a></div>
<div class="wban"> </div>
<img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px"><img src="img/drinls.jpg" style="width:100px">

 <center><h3><font color="coral" style="times new roman">Table Update </font></h3></center>

<div id="content"> 
	<div id="cont">
	 <center>load items</center>
<div class="dropdown">
 
  <button class="dropbtn">Drinks</button>
  <div class="dropdown-content">
    <a href="coke.php?drink=Pepsi"><font color="blue">Pepsi</font></a>
    <a href="coke.php?drink=Coke">Coke</a>
    <a href="coke.php?drink=bottle water">bottle water</a>
	<a href="coke.php?drink=Malt">Malt</a>
	<a href="coke.php?drink=Fanta">Fanta</a>
	<a href="coke.php?drink=chapman">chapman</a>
	<a href="coke.php?drink=fearless">Fearless</a>
	<a href="coke.php?drink=amarula">Amarula</a>
  </div>
   
</div> <div class="dropdown">
 
  <button class="dropbtn">Pepper soup</button>
  <div class="dropdown-content">
    <a href="coke.php?drink=Pepsi"><font color="blue">goat meat</font></a>
	<a href="coke.php?drink=Pepsi"><font color="blue">puk meat</font></a>
	<a href="coke.php?drink=Pepsi"><font color="blue">fish pepper soup</font></a>
   
  </div>
  
  
</div>
 
	<div id="cont3"><h3><u><center><font color="brown">Orders Requested</font></center></u></h3><br>
	<div id="order">
<table width="100%" border="1" style="text-align:center;">
  <tr>
    <td>Table sit no</td>
    <td>Items ordered</td> 
    <td>price</td>
	<td>status</td>
  </tr>
 <?php
 $status = "No";
$query = mysql_query("SELECT * FROM admin_table WHERE status ='{$status}'", $db_connect);
while($row=mysql_fetch_array($query)){
	$id=$row['id'];
	echo "<tr>";
echo "<td>".$row['table_sit']."</td>";
echo "<td>".$row['items']."</td>";
echo "<td>".$row['price']."</td>";
echo "<td><a href='complet.php?id=$id'>".$row['status']."</a></td>";
echo "</tr>"; 
}
 ?>
</table>
	</div>
	
	
	</div>  
</div>


</body>
</html>