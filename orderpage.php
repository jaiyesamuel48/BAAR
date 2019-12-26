<?php ob_start(); ?>
<?php session_start(); 
$tab = $_SESSION['tablenum'];
?>
<?php require_once("connection.php");?>
<?php
//create a connection to the host 
$db_connect = mysql_connect("localhost","root");
 
//select a database 
$db_select = mysql_select_db("bar", $db_connect);
?>
<?php
if(isset($_POST['complete'])){
	$tab = $_SESSION['tablenum'];
	$items = $_POST['item'];
	   $price = $_POST['pric'];
	   $day=date("D");
	    $mont=date("M");
		 $yar=date("Y");
		$tim = date("h:i:s");
		$sta = "No";
$query = mysql_query("INSERT INTO admin_table(table_sit, items, price, day, month, year, time, status)
 VALUE('{$tab}', '{$items}','{$price}','{$day}','{$mont}','{$yar}','{$tim}','{$sta}')", $db_connect);
if($query){
$cutquet = mysql_query("INSERT INTO tdamut(tname, amout)
 VALUE('{$tab}','{$price}')", $db_connect);
	
       if(!$cutquet){
	$upcut = mysql_query("SELECT * FROM tdamut
					    WHERE tname='{$tab}'", $db_connect);
$row = mysql_fetch_array($upcut);
$tid = $row['tname'];
$tamut = $row['amout'];

$newamout = $tamut+$price;

$cutoff = mysql_query("UPDATE tdamut SET 
					   amout='{$newamout}' WHERE tname='{$tid}'", $db_connect);		
	
          if($cutoff){
			header("Location:successalert.php");
	        exit;  
		  }
}	
	
}
}
?>

<!DOCTYPE html>
<html>
<title>order page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap.css">
<head>
<style>
* {
  box-sizing: border-box;
}
body {
  font-family: Times New roman;
  font-size:3vw;
}
	

#order {
	height: auto;
	width:auto;
	margin-top:20px;
	border: 5px solid pink; 
	background:;
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
#down{
	
}
.table {
	width: auto;
	height: auto;
	background-color:blue;

}
</style>
</head>
<body>
<form action="orderpage.php" method="post">
<?php 
if(isset($_GET['w'])){
$in=$_GET['w']; 
echo $in;
}
?>
  <center><h1><?php echo "YOU ARE ON TABLE ". $tab;?></h1></center>
<div class="alert alert-success"><center>Dear customer, you are about to order for the following!</center></div>
<div class="alert alert-danger"><center><h2>Changed your mind? Go back to <a href="location.php"><font color="red">menu</a></font></center></h2></div>
<br>
<div class="col-md-12">
<?php
if(isset($_POST['bnsub'])){
if(!empty($_POST['check1'])) {
	$count = 0;
   foreach($_POST['check1'] as $check) {
	  // $count++;
     //  echo $check.", ";	

$selectinfo = mysql_query("SELECT * FROM drinks WHERE dname='$check'", $db_connect);
		
while($row = mysql_fetch_array($selectinfo)){
			$id = $row['id'];
			$img = $row['dpic'];
			$name = $row['dname'];
			$namarry[] = $name;
			$pric = $row['price'];
			$sum[] =$pric;
			echo"<div id=\"show\">";
			echo "<img src=\"$img\" width='100' height='100'>";
			echo "<b style='font-size:12px;'><span style='line-height:0.3'>".strtoupper($name)."<span></b>";
			echo "<p style='font-size:12px'>&#8358;".$pric."</p>";
			echo"</div>";
		
		}
		   //echoes the value set in the HTML form for each checked checkbox.
           //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
           //in your case, it would echo whatever $row['Report ID'] is equivalent to.
  } 
}else{
	header("Location:location.php?od=7");
	exit;
}
}
?>

</div>
<div class = "col-md-12 col-sm-12 col-xs-12" style="display:inline-block">
 <center>
 <div class="col-xs-12 alert alert-danger" style="display:inline-block">

<?php
$amout = (array_sum($sum));
echo "Your Total Sum is : <s>N</s>".$amout;
 $now = " ";  	
	foreach($namarry as $orderink){
		$myorder = " ".$orderink.",";
		$now.= $myorder;
	}
?>
<form action="successalert.php" method="post">

<input type="hidden"    name="pric" value="<?php echo $amout; ?>">
<input type="hidden"    name="item" value="<?php echo $now; ?>">
<br>
<input type ="submit" class="btn btn-info" name="complete" value="Complete Order Now">
</form>
</form>

</p>
</div>
</center>
</div>
</body>
</html>
<?php mysql_close($db_connect);?>
<?php ob_end_flush();?>