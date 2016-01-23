<?php include 'head.php'; ?>
<?php include 'header.php'; ?>
<?php
if (isset($_GET['messageid'])) {
$messageid=$_GET['messageid'];
$sql = "SELECT * FROM messages WHERE messageid = '$messageid'";
$rsd = mysql_query($sql) or trigger_error(mysql_error()." in ".$sql);

$row = mysql_fetch_array($rsd);


?>
<style>
#messagebox{
	border: 1px solid red;
}
	#content{
		padding:20px;

	}
	#sender{
		margin: 10px;
	}
	#content{
		font-size: 25px;
	}
	#content strong{
		font-size: 35px;
	}

</style>
<div id = 'sender'><h6>FROM: " <?php echo $row['fromuserid']?>"</h36></div>
<div id='messagebox'>
	<h6>Message:</h6>
<div id='content'>

	<strong>"</strong>		<?php 
echo $row['content'];

 ?>			<strong>"</strong>
</div><!-- content box -->
</div><!-- message box -->

<?php } ?>

