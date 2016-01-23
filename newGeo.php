<?php 
if (!empty($_POST['locate'])) {
		$latitude = $_POST['latitude'];
		$longitude = $_POST['longitude'];


$query  = "UPDATE userss SET latitude='$latitude', longitude='$longitude', firstname='Billy Bob' WHERE UserID=15";
		mysql_query($query) or trigger_error(mysql_error()." in ".$query);
}
 ?>

 <iframe src="postlocation.php" frameborder="0"></iframe>
<form method="POST">
 	<input value=''type="text"id="latitude"name="latitude" >
 	<input value=''type="text"id="longitude"name="longitude" >
 	<input value='locate'type="submit" >

 </form>
 <p id = 'coords'></p>
 			<div id='map'>this map</div>

<script>
window.onload = function(){
 	var map = document.getElementById("map");
 if ("geolocation" in navigator) {

//just gets one position
// navigator.geolocation.getCurrentPosition(function(position) {
//   do_something(position.coords.latitude, position.coords.longitude);
// });

///////////continuous update////////////
// var watchID = navigator.geolocation.watchPosition(function(position) {
//   do_something(position.coords.latitude, position.coords.longitude);
// });

/////////The Full Geo, Watcher////////
function geo_success(position) {
     latitude  = position.coords.latitude;
     longitude = position.coords.longitude;
 map.innerHTML = '<p>Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°</p>';
map.innerHTML += 'wow this geo location sucks';
 document.getElementById('latitude').value = latitude;
 document.getElementById('longitude').value = longitude;

}

function geo_error() {
  alert("Sorry, no position available.");
}

var geo_options = {
  enableHighAccuracy: true, 
  maximumAge        : 30000, 
  timeout           : 27000
};

var wpid = navigator.geolocation.watchPosition(geo_success, geo_error, geo_options);

// document.getElementsByTagName('form')[0].submit();


} else {
  /* geolocation IS NOT available */
}
}//onload function()
</script>