 <?php 
 include 'connection/session.php';
 include 'connection/database.php';
if (!empty($_POST['locate'])) {
		$latitude = $_POST['latitude'];
		$longitude = $_POST['longitude'];
	
$query  = "UPDATE userss SET latitude='$latitude', longitude='$longitude', firstname='billy BOOB' WHERE UserID=15";
		mysql_query($query) or trigger_error(mysql_error()." in ".$query);
}
echo 'HELLO!';
echo $_POST['lat'];

  ?>
  <p id='up'>up</p>
  <p id='down'>down</p>
 <form method="POST">
 	<input value=''type="text"id="lat"name="lat" >
 	<input value=''type="text"id="long"name="long" >
 	<input value='locate'type="submit" >

 </form>

 <script>
//get the lat and long values
// lat = parent.window.document.getElement

	 var latitude = parent.window.document.getElementById('latitude').value;
	var longitude = parent.window.document.getElementById('longitude').value;


 document.getElementById('lat').value = latitude;
 document.getElementById('long').value = longitude;

// window.onload(function(){
// document.getElementsByTagName('form')[0].submit();
// }


setTimeout(function(){
document.getElementsByTagName('form')[0].submit();
	 }, 5000);


console.log('hello');
console.log(latitude);

 </script>