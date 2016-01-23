<?php 
if (!empty($_POST['changepass'])) {
	 $sql = "SELECT * FROM userss WHERE username = '$_SESSION[username]'";
      $rsd = mysql_query($sql) or trigger_error(mysql_error()." in ".$sql);
      $row = mysql_fetch_array($rsd);
      $password = mysql_real_escape_string(hash('sha512', $_POST['password']));
      //$password = $_POST['password'];
      if ($row['password']==$password ) {
      	if ($_POST['newpassword']==$_POST['cfmnewpassword']) {
      		$newpassword = mysql_real_escape_string(hash('sha512', $_POST['newpassword']));
      		 $sql = "UPDATE userss SET password = '$newpassword' WHERE username='$_SESSION[username]'";
      $rsd = mysql_query($sql) or trigger_error(mysql_error()." in ".$sql);
           	}//is typed password twice the same
           	else{
           		echo "Your new Passwords dp not match!!";
           	}
      }//if $row password = post password
      else{
      echo	"passwords do not match";
      }

}//if set POST
else{
	echo "Would you like to change your password?";
}
echo $_SESSION['username'];


 ?>


<form action="" method='POST'>

	<label for="password"><h6>Current PassWord</h6></label>
	<input class='styletextfield' type="password" name='password' value='' required>

	<label for="password"><h6>New PassWord</h6></label>
	<input class='styletextfield' type="password" name='newpassword' value='' required>

	<label for="cfmpasssword"><h6>Confirmm New Password</h6></label>
	<input class='styletextfield' type="password" name='cfmnewpassword' value='' required><br>

	<label for="changepass"><h6>Submit</h6></label>
	<input class='styletextfield'type="submit" name='changepass' value='Change Password'>

</form>