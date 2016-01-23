<?php include 'head.php'; ?>
<?php include 'header.php'; ?>
<?php if (!empty($_GET['find'])) {

$sql = "SELECT * FROM userss WHERE UserID = '$_GET[find]'";
      $rsd = mysql_query($sql) or trigger_error(mysql_error()." in ".$sql);
      while ($row = mysql_fetch_array($rsd)) {
    $latitude = $row['latitude'];
    $longitude = $row['longitude'];?>
 <input type="text" name='latitude'id='latitude' value='<?php echo $latitude; ?>'>
 <input type="text" name='longitude'id='longitude' value='<?php echo $longitude; ?>'>
<p ><?php echo $latitude; ?></p>
    <p><?php echo $longitude; ?></p>
    <?php
}
}
?>
<div id='content'>
	<div id='pageheading'>
		<h1>MAIN CONTENT</h1>
	</div> <!--pageheading-->
	<div id='contentleft'>
<h6>Friends here</h6>
<?php echo '<div id=\'friendlist\'>';
include 'friendlist.php';
echo'</div>';//friend list div
 ?>
  </div><!--contentleft-->
		<br>
	 <div id='contentright'>

<div id='map'></div>
<div id='here'></div>
	</div><!--contentRight-->
</div><!--Content-->
 <script>

 var latitude = parseFloat(document.getElementById('latitude').value);

var longitude = parseFloat(document.getElementById('longitude').value);

 here = document.getElementById('here').innerHTML = latitude + ' ' + longitude;
function initMap() {
  var myLatLng = {lat: latitude, lng: longitude};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 14,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
	};

 </script>
