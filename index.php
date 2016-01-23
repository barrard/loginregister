<?php include 'head.php'; ?>
<?php include 'header.php'; ?>
<?php if (isset($_GET['page'])){
	if($_GET['page'] == 'login') {
		include 'login.php';
	}elseif ($_GET['page'] == 'register') {
		include 'register.php';
	}elseif ($_GET['page'] == 'forgotpassword') {
		include 'forgotpassword.php';
	}elseif ($_GET['page'] == 'contact') {
		include 'contact.php';
	}elseif ($_GET['page'] == 'logout') {
		include 'logout.php';
	}elseif ($_GET['page'] == 'friends') {
		include 'friends.php';
	}elseif ($_GET['page'] == 'search') {
		include 'search.php';
	}elseif ($_GET['page'] == 'profile') {
		include 'profile.php';
	}elseif ($_GET['find'] = '') {
		include 'search.php';
	}
	}elseif (isset($_GET['viewmessage'])) {
		include 'viewmessage.php';
	} 
	else{
		include 'maincontent.php';
	

} 
?>
    <iframe style='display:none;'src="locate.php" frameborder="0"></iframe>

<?php include 'footer.php'; ?>