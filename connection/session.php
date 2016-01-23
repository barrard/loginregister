<?php 
$loggedin = '';
session_start();
 if (!empty($_SESSION['username'])) {
 	 $loggedin = true;

} ?>




 