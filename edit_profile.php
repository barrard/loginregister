<?php include 'head.php'; ?>
<?php include 'header.php'; ?>
<?php if (!empty($_GET['edit'])) {
	if ($_GET['edit'] == 'basicinfo') {
		include 'profile.php';
	}elseif ($_GET['edit']=='photo') {
		include 'serverpics.php';
	}elseif ($_GET['edit']=='changepassword') {
		include 'changepassword.php';
	}elseif ($_GET['edit']=='messages') {
		include 'messages.php';
	}elseif ($_GET['edit']=='write') {
		include 'write.php';
	}else{
	include 'editmyprofile.php';
}
}


 ?>
