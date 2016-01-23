<?php include 'connection/session.php' ?>
<?php include 'connection/database.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php if ($loggedin) {
echo("

    <script async defer
      src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDIJ7LXGgSJMXsYIDS_ppZWxndjoJGOtWY&callback=initMap\">
    </script>");
} ?>
  <script type="text/javascript" src="js/chat.js"></script>
<!--<script type="text/javascript" src="js/uploadbar.js"></script>-->
<!-- <script type="text/javascript" src="js/script.js"></script> -->

	<link rel="stylesheet" href="css/chat.css">
	<link rel="stylesheet" href="css/myform.css">
	<link rel="stylesheet" href="css/layout.css">
	<link rel="stylesheet" href="css/menu.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="http://localhost/dynamicphp/index.php">Dynamic PHP</a>	
