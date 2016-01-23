<nav>
	<ul ontouch='doSomething()'onclick='doSomething()'>
		<li ><a href="http://localhost/loginregister/edit_profile.php?edit=basicinfo">Basic Info</a></li>
		<li><a href="http://localhost/loginregister/edit_profile.php?edit=photo">Upload a Photo</a></li>
		<li><a href="http://localhost/loginregister/edit_profile.php?edit=changepassword">Change Password</a></li>
		<li><a href="http://localhost/loginregister/edit_profile.php?edit=messages">My Messages</a></li>
		<li><a href="http://localhost/loginregister/edit_profile.php?edit=settings">Settings</a></li>
	</ul>
</nav>
<script>
	function doSomething(e){
		eventt = event.target;
		eventt.style.color = '#c0fff4';
		eventt.style.background = '#9bbc57';
	}
</script>

