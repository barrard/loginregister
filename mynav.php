<nav>
	<ul onTouch='doSomething()'onclick='doSomething()'>
		<li ><a href="http://localhost/loginregister/?page=profile">Profile</a></li>
		<li><a href="http://localhost/loginregister/?page=friends">Friends</a></li>
		<li><a href="http://localhost/loginregister/find.php?find=">Search</a></li>
		<li><a href="http://localhost/loginregister/?page=search">Update Loc</a></li>
		<li><a href="http://localhost/loginregister/?page=logout">LogOut</a></li>
	</ul>
</nav>
<script>
	function doSomething(e){
		eventt = event.target;
		eventt.style.color = '#c0fff4';
		eventt.style.background = '#9bbc57';
	}
</script>

