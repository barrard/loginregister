<?php 
if (!isset($_GET['UserID'])) {

$sql = "SELECT * FROM userss ORDER BY UserId";
$rsd = mysql_query($sql);


echo'
<table border="1" cellpadding="3" cellspacing="3"
		<tr>
			<th width="120">User Id. </th>
			<th width="120">username. </th>
			<th width="25">Time </th>
		</tr>';
while ($row = mysql_fetch_array($rsd)) {
	$UserId = $row['UserID'];
	$username = $row['username'];
	$time = $row['time'];
	// $f3 = $row['last_name'];
?>
	 <tr>
	 	<td><?php echo $UserId; ?></td>
	 	<td><?php echo $username; ?></td>
	 	<td><?php echo $time; ?></td>

	 	<td><a href="viewprofile.php?UserID=<?php echo $UserId ?>">View Profile</a></td>
	 	<td><a href="?find=<?php echo $UserId ?>">locate</a></td>
	 </tr>
<?php }//while ?>

	</table>
<?php 
	}else{
   
if (isset($_GET['UserID'])) {
 	$userid = $_GET['UserID']; 
 $sql = "SELECT * FROM userss WHERE UserID = '$userid'";
      $rsd = mysql_query($sql) or trigger_error(mysql_error()." in ".$sql);
      while ($row = mysql_fetch_array($rsd)) {
     echo  '<h6>Hello '.$_SESSION['username'].'Member since '.$row['time'].'</h6>';

      echo 'last logged in '. $row['logout'];
      echo '<br>UserID is '. $row['UserID'];
      echo '<br>Your Username is '. $row['username'];
      echo '<br>Your password is'. $row['password'];
      echo '<br>Your First Name is '. $row['firstname'];
      echo '<br>Your Last name is '. $row['lastname'];
      echo '<br>Your Salt is '. $row['salt'];
      echo '<br>Your account was made on '. $row['time'];
      echo '<br>Your email is '. $row['email'];
      echo '<br>last logged in '. $row['login'];
      echo '<br>last logged out '. $row['logout'];
      $row['total'] = (int)$row['login'] - (int)$row['logout'];
      echo '<br>total time logged in '. $row['total'];}

      }
}?>