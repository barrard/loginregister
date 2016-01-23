<?php  ?>
<?php  ?>
<?php
class Chat 
{ 
include 'chat_errorhandler.php';
include 'header.php';
include 'head.php';
function deleteAllMessages(){
	$query = "TRUNCATE TABLE chat";
	$result = mysql_query($query)or trigger_error(mysql_error()." in ".$query);
}//delete all messages function

function postNewMessage($username, $message, $color){
	$username = mysql_real_escape_string($username);
	$message = mysql_real_escape_string($message);
	$color = mysql_real_escape_string($color);
		$query = "INSERT INTO chat (posted_on, username, message, color) VALUES (NOW(), {$_SESSION[username]}, {$message}, $color)";
	$result = mysql_query($query)or trigger_error(mysql_error()." in ".$query);
}//postNewMessage


function getNewMessages($id=0){
	$id = mysql_real_escape_string($id);
	if ($id>0) {
		$query="SELECT message_id, username, message, color, date_format(posted_on, '%H:%i:%s') AS posted_on FROM chat WHERE message_id > $id ORDER BY message_id ASC";
			$result = mysql_query($query)or trigger_error(mysql_error()." in ".$query);

	}//if $id>0
	else{
		$query = 'SELECT message_id, username, message, color, posted_on FROM (SELECT message_id, username, message, color, date_format(posted_on) FROM chat ORDER BY message_id DESC LIMIT 50) AS Last50 OREDER BY message_id ASC';
	}// else Get New Messages
		$result = mysql_query($query)or trigger_error(mysql_error()." in ".$query);
		//XML RESPONSE
		$response = '<?xml version ="1.0" encoding ="UTF-8" standalone="yes"?>';
		$response .= '<response>';
		$response .= isDatabaseCleared($id);
		if (mysql_num_rows($result)) {
			while ($row = mysql_fetch_assoc($result)) {
				$id = $row['message_id'];
				$color = $row['color'];
				$username = $row['username'];
				$time = $row['posted_on'];
				$message = $row['message'];
				$response .= '<id>' .$id . '</id>'.
				'<color>' .$color . '</color>'.
				'<name>' .$username . '</name>'.
				'<message>' .$message . '</message>'.
				'<time>' .$time . '</time>';
}//while fetch assoc
close($result);
		}//if num rows
		$response .= $response . '</response>';
return $response;

}//getNewMessages

function isDatabaseCleared ($id){
	if ($id>0) {
		$check_clear = "SELECT count(*) old FROM chat WHERE message_id<='$id'";
		$result = mysql_query($check_clear);
		$row = mysql_fetch_assoc($result);
		if($row['old']==0)
				return '<clear>true</clear>';
	}//if id>0
	return '<clear>false</clear>';
}//is DB cleared
}//class chat









 ?>