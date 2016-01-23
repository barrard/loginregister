<?php include 'head.php'; ?>
<?php
if (!empty($_POST['locate'])) {
  $location = $_POST['latitude'].' '.$_POST['longitude'];
  $latitude = $_POST['latitude'];
  $longitude = $_POST['longitude'];

      mysql_query("UPDATE userss SET latitude = {$latitude}, longitude = {$longitude} WHERE username='$_SESSION[username]'")or trigger_error(mysql_error());
;

    //header('Location: http://localhost/loginregister/');


  echo "I Know Where You Are $location";
}



 ?>

HELLOW IFRAME!!!

 <form method="post">
<input type="text"name='latitude' value='' id='latitude'>
<input type="text"name='longitude' value='' id='longitude'>
  <input type="submit" id='submitloc'name='locate'>
  </form>

 

<button id='getlock' onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
//var getloc = document.getElementById('getloc');
setTimeout(function(){ 
	getlock.click();

	 }, 11000);
//var submitloc = document.getElementById('submitloc');
setTimeout(function(){ 
	submitloc.click();

	 }, 12000);
var x = document.getElementById("demo");
setTimeout(
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
},10000);
function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;	
    var latitude = position.coords.latitude;
var longitude  = position.coords.longitude;


document.getElementById('latitude').value = latitude ;
document.getElementById('longitude').value = longitude ;
}
</script>
