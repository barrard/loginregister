<?php 
// Check if image file is a actual image or fake image
if(!empty($_POST["upload"]) && !empty($_FILES['image']['name'])) {
	$username = $_POST['username'];
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    list($width, $height) = getimagesize($_FILES["image"]["tmp_name"]);
    if($check == false) {
        echo "File is not an image.";
        $uploadOk = 0;
    } else {
    	echo '<pre>';
    	print_r($check);
    	echo '<pre>';
    	echo 'This files size is '.filesize($_FILES["image"]["tmp_name"]).'<br>';
        echo "File is an image - " . $check["mime"] . ".";
        echo "<br> The file name is " . $_FILES["image"]["name"];
        $uploadOk = 1;
$width = 100;
$height = 100;
list($w, $h) = getimagesize($_FILES['image']['tmp_name']);
  /* calculate new image size with ratio */
  $ratio = max($width/$w, $height/$h);
  $h = ceil($height / $ratio);
  $x = ($w - $width / $ratio) / 2;
  $w = ceil($width / $ratio);
  /* new file name */
  $path = '/var/www/html/loginregister/uploads'.time().'_'.$_FILES['image']['name'];
  /* read binary data from image file */
  $imgString = file_get_contents($_FILES['image']['tmp_name']);
  /* create image from string */
  $image = imagecreatefromstring($imgString);
  $tmp = imagecreatetruecolor($width, $height);
  imagecopyresampled($tmp, $image,
    0, 0,
    $x, 0,
    $width, $height,
    $w, $h);

$imageFileType = pathinfo($path,PATHINFO_EXTENSION);
$imageFileType = strtolower($imageFileType);
    }//else is an image
// Check if file already exists
if (file_exists($path)) {
	$target_file = $target_dir .rand(10000, 0). basename($_FILES["image"]["name"]) ;
    echo 'This string will never get echoed'.$target_file;
    $uploadOk = 0;
}//file already exists

 // Check file size
if ($_FILES["image"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}//file size

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}//check certain files type

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	switch ($_FILES['image']['type']) {
    case 'image/jpeg':
      imagejpeg($tmp, $path, 50);
      break;
    case 'image/png':
      imagepng($tmp, $path, 0);
      break;
    case 'image/gif':
      imagegif($tmp, $path);
      break;
    default:
      exit;
      break;}//Switch
	// if ($check['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($_FILES["image"]["tmp_name"]); 
	// elseif ($check['mime'] == 'image/gif') $image = imagecreatefromgif($_FILES["image"]["tmp_name"]); 
	// elseif ($check['mime'] == 'image/png') $image = imagecreatefrompng($_FILES["image"]["tmp_name"]);

	//$image = $_FILES["image"]["tmp_name"];
	// $image = imagecreatefromjpeg($_FILES["image"]["tmp_name"]);
	// $image_p = imagecreatetruecolor(400, 400);
	// imagecopyresampled($image_p, $image, 0, 0, 0, 0, 400, 400, 0, 0);
	// $manipulator = new ImageManipulator($_FILES['image']['tmp_name']);
 //        // resizing to 200x200
 //        $newImage = $manipulator->resample(400, 400);
 //        // saving file to uploads folder
 //        $manipulator->save('uploads/' . $_FILES['image']['name']);
 //        echo 'Done ...';

	//$image = imagejpeg($image, $path, 10);

	echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.<br>";
	echo 'New File Size equals '.filesize($path);
	$thefilename=$_FILES["image"]["name"];
	$thefilesize=filesize($path);

}
    // if (move_uploaded_file($image, $target_file)) {
    //     echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    // } else {
    //     echo "Sorry, there was an error uploading your file.";
    // }//else sorry no can
// $result = mysql_query("UPDATE images SET image = '$image', time = CURRENT_TIMESTAMP, username = '$_SESSION[username]', type = '$imageFileType'");


if ($uploadOk != 0) {
$result=mysql_query("INSERT INTO images (username, image, time, type, filename, filesize) VALUES ('$_SESSION[username]', '$path', CURRENT_TIMESTAMP, '$imageFileType', '$thefilename', '$thefilesize')") or trigger_error(mysql_error());
if ($result) {
echo "Whos a Genius?!?!?!?";
}else{
	echo "Ugh still not working";
	}



}//if $uploadOk !=0
}//if isset POST SUBMIT
else{echo 'Please Select a photo to upload';}

?>

<div id='bar_blank'>
	<div id='bar_color'></div>
</div>
<div id="status"></div>
<form id='myform' enctype="multipart/form-data" action="" method="post">
  <input type="hidden" name='<?php echo ini_get('session.upload_progress.name'); ?>' value='myform'>
    <input type="hidden" name='username' value='<?php echo $_SESSION['username']; ?>'>

    <input id='image'name="image" type="file" />
  <input name='upload'type="submit" value="Submit" />
  <progress id='progressbar' value='0' max='100' style ="width:300px"></progress>
  <h3 id='statustext'></h3>
  <p id='loaded_n_total'>Loaded:</p>

  </form>
  <script>

  function startUpload(){
  	var file = document.getElementById('image').files[0];
  	alert(file.name+' | '+file.size+' | '+file.type);
  	var formdata = new FormData();
  	formdata.append('image', file);
  	var ajax = new XMLHttpRequest();
  	ajax.upload.addEventListener('progress', progressHandler, false);
  	ajax.addEventListener('load', completeHandler, false);
  	ajax.addEventListener('error', errorHandler, false);
  	ajax.addEventListener('abort', abortHandler, false);
  	ajax.open('POST', 'serverpics.php');
  	ajax.send(formdata);
  }
  function progressHandler(event){
  	document.getElementById('loaded_n_total').innerHTML = "uploaded "+event.loaded+" bytes of "+event.total;
  	var percent = (event.loaded / event.total) *100;
  	document.getElementById('progressbar').value=Math.round(percent);
  	document.getElementById('statustext').innerHTML = Math.round(percent)+"% uploaded...please wait";
  }
    function completeHandler(event){
    document.getElementById('statustext').innerHTML = event.target.responseText;
  	document.getElementById('progressbar').value=100;

  }
      function errorHandler(event){
    document.getElementById('statustext').innerHTML = "Upload Failed!"
  }
      function abortHandler(event){
    document.getElementById('statustext').innerHTML = "Upload Cancled!"
  }
(function () {
    document.getElementById("myform").onsubmit = startUpload;
})();
  </script>
</body>
</html>
