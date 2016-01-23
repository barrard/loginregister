<div id='content'>
	<div id='pageheading'>
		<h1>MAIN CONTENT</h1>
	</div> <!--pageheading-->
	<div id='contentleft'>
    <h6>A place when i can practice my PHP</h6>
    <?php 

$sql = "SELECT * FROM images WHERE username= '{$_SESSION['username']}'";
$rsd = mysql_query($sql) or trigger_error(mysql_error()." in ".$query);
while ($row = mysql_fetch_array($rsd)) {
  ?>
    <img height='100' width='100' src='<?php echo $row['image']; ?>
' alt="<?php echo $row['filename']; ?>">
<?php } ?>
    <h6><?php if ($loggedin) {
     echo('Add Friends');
      echo'<br>';
      echo '<div id=\'friendlist\'>';
        include 'friendlist.php';
      echo'</div>';//friend list div
    } ?>

    </div><!--contentleft-->
		<br>
	 <div id='contentright'>
    <div id='hellomessage'>
		<?php if (!$loggedin) {
			echo'<h6>Please Login</h6>';
    	}else {   
     include 'geomap.php';      
     include 'userinfo.php';      

      } ?>
    </div><!-- hello message to user -->

			<div id='map'></div>
	</div><!--contentRight-->
</div><!--Content-->
