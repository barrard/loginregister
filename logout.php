<?php 
if (!empty($_SESSION['username'])) {
	# code...

mysql_query("UPDATE userss SET logout = CURRENT_TIMESTAMP WHERE username='$_SESSION[username]'");


	// $query  = "UPDATE userss SET logout = CURRENT_TIMESTAMP WHERE username='$username'";
	// 	mysql_query($query) or trigger_error(mysql_error()." in ".$query);
 	$_SESSION['username']  = '';
		header('Location: http://localhost/loginregister/');

}
 ?>
<div id='content'>
	<div id='pageheading'>
		<h1>Later gater</h1>
	</div>
	<div id='contentleft'>
		<h2>Let him go</h2>
		<br>
		<h6>No need quiters here</h6>
	</div>
	<div id='contentright'></div>
</div>

