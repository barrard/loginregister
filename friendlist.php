<?php 
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
	 	<td><a href="find.php?find=<?php echo $UserId ?>">locate</a></td>
	 </tr>
<?php }//while ?>


	</table>