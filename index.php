<?php ob_start(); ?>
<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap.css">
<style>
.guy {
	height: 200px;
	width:1000px;
	margin-left: 350px;
	margin-top: 80px;
	border:2px solid black;
	background-color: #777;
	
}


</style>
</head>
<body>
<?php
if(isset($_POST['bnc'])){
	$tnum = $_POST['txt'];
	if(empty($tnum)){
		header("Location:index.php");
		exit;
	}else{
		$_SESSION['tablenum'] =$tnum;
		header("Location:location.php");
		exit;
	}
}
?>
<form action="index.php" method="post" >
<div class="col-md-12 col-sm-12 col-xs" style="background-image:url('img/bg.jpg'); background-repeat:no-repeat; min-height:700px">
 <div class="gu">
 <center><div class="col-md-6 col-sm-12 col-xs bottom" style="margin-top:25%; margin-left:25%; border: "4px solid black;">
    <h1 align="center"><p class="lead"><font color="brown">Please Input Table Number!</font> 
	<br>
	<input type="number"  class="form-control input-sm" name="txt" placeholder="Input Table Number">
	<input type="submit" name="bnc" class="btn btn-primary" value="Continue"></h1>

</div></center>
  </div>
</form>
</body>
</html>
<?php ob_end_flush(); ?>