<?php 
if (!empty($_POST['register'])) {
	if ($_POST['username']&& $_POST['password']) {
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string(hash("sha512", $_POST['password']));
		$user = mysql_fetch_array(mysql_query("SELECT * FROM userss WHERE username = '$username'"));
		if (!$user == '0') {
			die("The username <i>'$username'</i> already exists '<a href='?page=register'>&larr; Back</a>");
	}

		$firstname = '';
		if ($_POST['firstname']) {
			$firstname = mysql_real_escape_string(strip_tags($_POST['firstname']));
		}		
		$lastname = '';
		if ($_POST['lastname']) {
			$lastname = mysql_real_escape_string(strip_tags($_POST['lastname']));
		}
		$email = '';
		if ($_POST['email']) {
			$email = mysql_real_escape_string(strip_tags($_POST['email']));
		}
		$check = mysql_fetch_array(mysql_query("SELECT * FROM userss WHERE username='$username'"));
		if ($check !='0') {
			die("That username is already being used, Try <i>$username".rand(1,50)."</i> instead! <a href='?register>&larr; Back</a>");
		}
		if(!ctype_alnum($username)){
			die("Username contains soecial characters, Only numbers and letters please. <a href='?register>&larr; Back</a>");
		}
		if (strlen($username)>20){
			die("User name is too long, please use less than 20 characters. <a href='?register>&larr; Back</a>");
		}
		$salt = hash("sha512", rand() . rand().rand());
		mysql_query("INSERT INTO userss (username, password, firstname, lastname, salt, email) VALUES ('$username', '$password','$firstname', '$lastname', '$salt', '$email')");
		setcookie("c_user", hash("sha512", $username), time()+24*60*60, "/");
		setcookie("c_salt", $salt, time() +24 * 60 * 60, "/");
	$_SESSION['username'] = $username;
		header('Location: http://localhost/loginregister/');
	}		

}
 ?>
<a href=""></a>

<form method='post' action="">
<table>
	<tr>
		<td><label for="firstname"><h6>First Name</h6></label></td>
		<td><label for="lastname"><h6>Last Name</h6></label></td>
	</tr>
	<tr>
		<td><input class='styletextfield' type="text" name='firstname' value='First Name'></td>
		<td><input class='styletextfield' type="text" name='lastname' value='Last Name'><br></td>
	</tr>
	<tr>
		<td><label for="email"><h6>Email</h6></label></td>
	</tr>
	<tr>
		<td><input class='styletextfield' type="email" name='email' value='E-mail@dog.com' required><br>
</td>
	</tr>

</table>


	<label for="username"><h6>Username</h6></label>
	<input class='styletextfield' type="text" name='username' placeholder='user Name' required><br>

	<label for="password"><h6>PassWord</h6></label>
	<input class='styletextfield' type="password" name='password' value='password' required>

	<label for="cfmpasssword"><h6>Confirmm Password</h6></label>
	<input class='styletextfield' type="password" name='cfmpassword' value='password' required><br>

	<input class='styletextfield' type="submit" name='register' value='Register'>

</form>