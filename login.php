<?php if (!empty($_SESSION['username'])) {
	header('Location: http://localhost/loginregister/index.php');
} ?>
<div id='content'>
	<div id='pageheading'>
		<h1>Login</h1>
	</div>
	<div id='contentleft'>
		<h2>Left Content</h2>
		<br>
		<h6>Text goes in here h6!!!</h6>
	</div>
	<div id='contentright'>
		<?php include 'loginform.php'; ?>
	</div>
</div>