<?php if (!empty($_POST['login'])){
	
	 if ($_POST['username']&& $_POST['password']) {
$username = mysql_real_escape_string(($_POST['username']));
$password = mysql_real_escape_string(hash('sha512', $_POST['password']));
$user = mysql_fetch_array(mysql_query("SELECT * FROM userss WHERE username = '$username'"));
	if ($user == '0') {
		die('This user doesnt Exist, try making '."<i>$username</i>"."<a href='?page=register'>&larr; Back</a>");
	}
	if ($user['password'] != $password){
		die("Incorrect username password combo <a href='?page=login'>&larr; Back</a>");
	}

	$salt = hash("sha512", rand() . rand().rand());
	setcookie('c_user', hash('sha512', $username), time()+24*60*60, "/");
	setcookie("c_salt", $salt, time()+24*60*60, "/");
	$userID = $user['UserID'];
	mysql_query("UPDATE userss SET salt = '$salt', login = CURRENT_TIMESTAMP WHERE UserID='$userID'");
	$_SESSION['username'] = $username;
	$_SESSION['firstname'] = $firstname;

	$loggedin  = true;
	// if (isset($_COOKIE['c_user'])) {
	// 	echo $_COOKIE['c_user'];
	// }
	header('Location: http://localhost/loginregister/');

	}
} 
?>

<form action="" method='post'>
<table>
	<tr>
		<th>UserName</th>
		<th>Password</th>
		<th>Register</th>
	</tr>
	<tr>
		<td><input value ='barrard'class='styletextfield' type="text" name='username' required></td>
		<td><input value='password'class='styletextfield' type="password" name='password' required></td>
		<td><input class='styletextfield' type="submit" name='login' value='LogIn'></td>
	</tr>
</table>
</form>
<br><hr>
<h6>Need an account??<a href="?page=register">Register</a></h6>
