<?php
if (!empty($_POST['send'])) {
	$fromuserid = $_SESSION['username'];
	$touserid = '';
	$subject = '';
	$content = '';

if ($_POST['touserid']) {
			$touserid = mysql_real_escape_string(strip_tags($_POST['touserid']));}
if ($_POST['subject']) {
			$subject = mysql_real_escape_string(strip_tags($_POST['subject']));}
if ($_POST['content']) {
			$content = mysql_real_escape_string(strip_tags($_POST['content']));}
$query = "INSERT INTO messages (fromuserid, touserid, subject, content, time) VALUES ('$fromuserid', '$touserid', '$subject', '$content', CURRENT_TIMESTAMP)";
mysql_query($query) or trigger_error(mysql_error()." in ".$query);
	header('Location: http://localhost/loginregister/edit_profile.php?edit=messages');
}//if we send a message
?>
<div id='myfriends'>
<h6>Select a Friend</h6>
<?php
$sql = "SELECT * FROM userss";
$rsd = mysql_query($sql);
while ($row = mysql_fetch_assoc($rsd)) {
?>
<style>
ul{
	display: inline-block;
	list-style: none;
}
ul li{
	list-style: none;
	float:left;
	display: block;
	width: 50px;
	height: 60px;
	text-align: center;
	line-height: 55px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 17px;
}
 ul li a{
	text-decoration: none;
	color: white;
}

 ul li:hover{
	background-color: rgb(242,242,242);
	}

 ul li:hover a{
	display: block;
	color: #000;
}


</style>
<ul>
	<li onTouch='fillsendto()'onclick='fillsendto()'><?php echo $row['username']; ?></li>

	<?php } ?>
</ul>
</div><!-- myfriends div -->
<script>

	function fillsendto(e){
		var to = document.getElementById('to');
		eventt = event.target.innerHTML;
		console.log(eventt);
		to.value = eventt;
	}

</script>

 <style>
	#subject{
		width:500px;
	}
	h3{
		display: inline;
	}
	textarea {
	margin-left: 125px;
	width: 600px;
	height: 120px;
	border-radius: 6px;
	padding: 5px;
	font-family: Tahoma, sans-serif;
	background-position: bottom right;
	background-repeat: no-repeat;
}
</style>
 <form action="" method='POST'>
 	<label for="from">FROM:</label>
<h3 name='from'><?php echo $_SESSION['username']; ?></h3>
 	<input type="text" id='to'name='touserid' placeholder='Send To Username' class='styletextfield'>
 	<input type="text" id='subject'name='subject' placeholder='Subject' class='styletextfield'>
	<textarea name="content" id="content" cols="30" rows="10"></textarea>
	<input class='styletextfield' type="submit" value='Send it!' name='send'>




 </form>