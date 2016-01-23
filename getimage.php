<?php include 'connection/database.php';
if (isset($_GET['id']) {
$id = $_GET['id'];
$query = "SELECT * FROM userss WHERE UserID={$id}";
$result = mysql_query($query);
while ($image = mysql_fetch_assoc($result)){	
$image = $image['image'];}
header("Content-type: image/png");
echo $image;
