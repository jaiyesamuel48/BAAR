<?php
ob_start();
//create a connection to the host 
$db_connect = mysql_connect("localhost","root");
 
//select a database 
$db_select = mysql_select_db("bar", $db_connect);
$id = $_GET['id'];

$status = "Yes";
$query = mysql_query("UPDATE admin_table SET
					  status ='{$status}'
					  WHERE id = '{$id}'", $db_connect);
	if($query){
		header("Location:Adminpage.php");
		exit;
	}

?>
<?php mysql_close(); ?>
<?php ob_end_flush(); ?>
