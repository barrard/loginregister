<?php 
if (!empty($_POST['update'])) {
	mysql_query("UPDATE userss SET firstname = '$_POST[firstname]' lasname = '$_POST[lasname]' email = '$_POST[email]' firstname = '$_POST[firstname]' WHERE UserID={$_POST['UserId']}")or trigger_error(mysql_error());
;

}


// if ((isset($_GET['UserId'])&& $_GET['UserId']!='')|| $_GET['page']=='basicinfo') {
// 	$userid=$_GET['UserId'];

$sql = "SELECT * FROM userss WHERE UserId={$_GET['edit']}";
$rsd = mysql_query($sql);
while ($row = mysql_fetch_array($rsd)) {

	?>




<a href=""></a>

<form method='post' action="">
	<input type="text" name='UserId' value='<?php echo $row['UserID'];?>' >
<table>
	<tr>
		<td><label for="firstname"><h6>First Name</h6></label></td>
		<td><label for="lastname"><h6>Last Name</h6></label></td>
	</tr>
	<tr>
		<td><input class='styletextfield' type="text" name='firstname' value='<?php echo $row['firstname']; ?> '></td>
		<td><input class='styletextfield' type="text" name='lastname' value='<?php echo $row['lastname']; ?>'><br></td>
	</tr>
	<tr>
		<td><label for="email"><h6>Email</h6></label></td>
	</tr>
	<tr>
		<td><input class='styletextfield' type="email" name='email' value='<?php echo $row['email']; ?>' required><br>
</td>
	</tr>

</table>


	<label for="username"><h6>Username</h6></label>
	<input class='styletextfield' type="text" name='username' value='<?php echo $row['username']; ?>' readonly><br>

	<label for="password"><h6>PassWord</h6></label>
	<input class='styletextfield' type="password" name='password' value='' required>

	<label for="cfmpasssword"><h6>Confirmm Password</h6></label>
	<input class='styletextfield' type="password" name='cfmpassword' value='' required><br>

	<input class='styletextfield' type="submit" name='update' value='Update Profile'>

</form>














<?php } ?>