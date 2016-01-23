<nav>
	<ul ontouch='doThis()'onclick='doSomething()'>
		<li ><a href="http://localhost/loginregister/?page=login">Login</a></li>
		<li><a href="http://localhost/loginregister/?page=register">Register</a></li>
		<li><a href="http://localhost/loginregister/?page=forgotpassword">Forgot Password</a></li>
		<li><a href="http://localhost/loginregister/?page=contact">Contact</a></li>
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

