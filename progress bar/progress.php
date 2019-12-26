<!DOCTYPE html>
<html>
<head>
	<title>pro</title>
    <meta charset="utf-8">
<link rel="shortcut icon" href="image/titlelogo.ico"  type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrapcdn340.css">
  <script src="googleapis.js"></script>
  <script src="bootstrapcdn.js"></script>          
</head>
<body>
<form action="progress.php" method="post">
<?php
if(isset($_POST['bnt'])){
$cutoff = $_POST['tco'];
$amu= $_POST['tam'];
$cal = $amu/$cutoff;
$per = $cal*100;
}
?>
  <br>
<div class="container">
  <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" style="width:<?php echo $per."%";?>;">
      <?php echo "Table 8; <s>N</s>".$amu." [" .$per."%]";?>
    </div>
  </div>
</div>

<br>
<p><input type="text" name="tco" placeholder="CutOff"></p>
<p><input type="text" name="tam" placeholder="Amount"></p>
<p><input type="submit" name="bnt" value="Calculate"></p>
</from>
</body>
</html>