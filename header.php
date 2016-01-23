	<div id='holder'>
<div id='header'>
	<a href="index.php"></a>
</div>
<div style='border:3px solid green' id='navbar'>
	<nav>
		<?php if(!$loggedin){ 
				include 'nav.php';
			}elseif (!empty($_GET['edit'])|| !empty($_GET['messageid'])) {
				include'naveditprofile.php';
			}else{
				include'mynav.php';
			}?>
	</nav>
</div>
