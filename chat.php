<?php 
include 'chat.class.php';
$mode = $_POST['mode'];
$id = 0;
$chat = new Chat();

if ($mode == 'SendAndRetrieveNew') {
	$name = $_POST['name'];
	$message = $_POST['message'];
	$color = $_POST['color'];
	$id = $_POST['id'];

	if ($name !='' || $message != '' ||$color != '') 
		$chat->postNewMessage($name, $message, $color);
	}elseif ($mode=='DeleteAndRetrieveNew') {
	$chat(deleteAllMessages());
	}elseif ($mode=='RetrieveNew') {
		$id = $_POST['id'];
		
}
if (og_get_length()) ob_clean();

//Headders are setn to prevent browsrs form caching
header('Cache-Control: no-cache, must-revalidate');
header('Pragma: no-cache');
header('Content-Type: text/xml');

echo $chat(getNewMessages($id));



 ?>