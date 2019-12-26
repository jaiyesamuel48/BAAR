<?php require_once("connection.php");?>
<!DOCTYPE html>
<html>
<head>
<title>Display</title>
   <meta http-equiv="refresh" content="60" />
</head>
<body>
<?php
$id=1;
$secut = mysql_query("SELECT amout FROM cutoff WHERE id ='{$id}'", $db_connect);
$cut = mysql_fetch_array($secut);
$cutamut = $cut['amout'];

$tprice = mysql_query("SELECT * FROM tbamut ORDERD BY amout DECS", $db_connect);

while($taba=mysql_fetch_array($tprice)){
$tname = $taba['tname'];
$amunt = $taba['amout'];

echo $cutamut." ".$tname." ".$amout;
}
?>
</body>
</html>
<?php mysql_close($db_connect); ?>