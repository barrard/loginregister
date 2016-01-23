<?php 
include 'connection/database.php';
$firstname = $_POST['firstname'];//Customer ID
$lastname = $_POST['lastname'];//First Name
$email = $_POST['email'];//Last Name
$username = $_POST['username'];//Address
$password = $_POST['password'];//Contact
$query = "INSERT INTO users (firstname, lastname, email, username, password) VALUES ('$firstname ', '$lastname', '$email', '$username', '$password')";
mysql_query($query) or trigger_error(mysql_error()." in ".$query);

mysql_close($db);
header('Location: http://localhost/loginregister/?page=login');
 ?>