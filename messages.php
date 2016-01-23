<?php 
$sql = "SELECT * FROM messages WHERE touserid = '$_SESSION[username]'";
 $rsd = mysql_query($sql) or trigger_error(mysql_error()." in ".$sql);

 ?>

<style>
	div#inbox, #message{
		float: left;
		height: 100%;
		padding:0px;
	}
	#inbox{
		width: 100%;

	}
	#sent{
		display: inline-block;
		border: 2px solid green;
	}
	#message{
		width: 69%;
	}

</style>

<h3><a href="?edit=write">Write message</a></h3>
 <div id='inbox'>
 	<h3>Inbox</h3>
 	<table border="1" cellpadding="3" cellspacing="3"

 		<tr>
 			<th width="25">#</th>
			<th width="120">From. </th>
			<th width="120">subject. </th>
			<th width="25">Time </th>
			<th width="25">view </th>
		</tr>
<?php 
 while ($row = mysql_fetch_array($rsd)) {
 ?>
<?php 
$messageid = $row['messageid']; 
$fromuserid = $row['fromuserid']; 
$touserid = $row['touserid']; 
$subject = $row['subject']; 
$content = $row['content']; 
$time = $row['time']; 

?>
		<tr>
			<td><?php echo $messageid; ?></td>
			<td><?php echo $fromuserid; ?></td>
			<td><?php echo $subject; ?></td>
			<td><?php echo $time; ?></td>
			<td><a href="viewmessage.php?messageid=<?php echo $messageid;?>">View</a></td>
		</tr>

<?php 
}//while row

?>
	</table>
</div>
<div id='sent'>
	<?php 
$sql = "SELECT * FROM messages WHERE fromuserid = '$_SESSION[username]'";
 $rsd = mysql_query($sql) or trigger_error(mysql_error()." in ".$sql);

 ?>
<h3>Sent</h3>
 	<table border="1" cellpadding="3" cellspacing="3"

 		<tr>
 			<th width="25">#</th>
			<th width="120">To user. </th>
			<th width="120">subject. </th>
			<th width="25">Time sent </th>
			<th width="25">view </th>
		</tr>
<?php 
 while ($row = mysql_fetch_array($rsd)) {
 ?>
<?php 
$messageid = $row['messageid']; 
$touserid = $row['touserid']; 
$touserid = $row['touserid']; 
$subject = $row['subject']; 
$content = $row['content']; 
$time = $row['time']; 

?>
		<tr>
			<td><?php echo $messageid; ?></td>
			<td><?php echo $touserid; ?></td>
			<td><?php echo $subject; ?></td>
			<td><?php echo $time; ?></td>
			<td><a href="viewmessage.php?messageid=<?php echo $messageid;?>">View</a></td>
		</tr>

<?php 
}//while row

?>	
</table>
</div>





</div>
