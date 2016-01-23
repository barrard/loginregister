<?php 
$mysql_hostname = 'localhost';
$mysql_user = 'root';
$mysql_password = 'portland';
$mysql_database = 'loginregister';
$db = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Oops something went wrong making a connection!");
mysql_select_db($mysql_database, $db) or die("Oops something went wrong connecting to the customers database!");// or trigger_error(mysqli_error($db)." in ".$query); ?>
