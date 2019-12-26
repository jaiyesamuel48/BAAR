<?php
//create a connection to the host 
$db_connect = mysql_connect("localhost","root");
 
//select a database 
$db_select = mysql_select_db("bar", $db_connect);
?>
