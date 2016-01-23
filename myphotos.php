<?php
if (isset($_POST['upload'])) {
	echo '<pre>';
	print_r($_FILES);
	print_r($_FILES['image']['error']);
	echo "</pre>";
// echo $_SESSION['username'];
$file = $_FILES['image']['tmp_name']; 

if (!isset($file)) {
	echo "please select image";
 }else{
	$image = addslashes($_FILES['image']['tmp_name']);
	$image = file_get_contents($image);
	$image=base64_encode($image);
	 $image_name = addslashes($_FILES['image']['name']);
	 $image_size = getimagesize($_FILES['image']['tmp_name']);
	 if ($image_size == FALSE) {
	 	echo "Thants not an image!";
	 }else{
	 	 $result=mysql_query("UPDATE images SET username = "$_SESSION['username']", image = '$image' WHERE username = "{$_SESSION['username']}"") or trigger_error(mysql_error());;

	 	 echo 'user name '.$_SESSION['username'];
	 	 if ($result) {
	 	 	echo "<br> IMage uploaded!";

	

if($query = "SELECT * FROM userss WHERE username='$_SESSION[username]'"){
$result = mysql_query($query);
while ($image = mysql_fetch_assoc($result)){	
	echo '<img height="300" width="300" src="data:image; base64,'.$image['image'].'">';
}}


	 	 	// $id = $_SESSION['username'];
	 	 	// echo "<br>Image uploaded, <p /> Your image: <p /><img height = '100' width='100'src='date:image;getimage.php?id=$id'>";
	 	 	// 	 	 }else{
	 	 	// 	 	 	echo "<br> IMage not uploaded!";

	 	 }
	 	
	 }}}



// if (isset($_POST['upload'])) {

// $sql = "INSERT INTO userss (name , image) VALUES ('$name', '$imgfp') WHERE username = '{$_SESSION['username']}'";
//       $rsd = mysql_query($sql) or trigger_error(mysql_error()." in ".$sql);

   ?>

<form enctype="multipart/form-data" action="" method="post">
  <input name="image" type="file" />
  <input name='upload'type="submit" value="Submit" />
  </form>



