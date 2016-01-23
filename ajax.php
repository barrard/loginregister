// <?php //include 'head.php'; ?>
// <?php //include 'header.php'; ?>
// <?php 
//echo "This BLAH time is: ". @date("d=m=Y H:i:s");

 ?>
 <head>
 	<script src="js/script.js"></script>
 </head>
<body>
	<div class="wrapper">
		<h3>Ajax XMLHttpRequest</h3>
		<div class="entry_wrapper">
			<h4>Subscribers Details:</h4>
			<ul>
				<li>
					<label for="">First Name</label>
					<input size='50'id='first_name'type="text">
				</li>
				<li>
					<label for="">Last Name</label>
					<input size='50'id='last_name'type="text">
				</li>
			</ul>
		</div><!-- entery_wrapper -->
<div class="response_wrapper">
	<textarea name="" id="responseText" cols="30" rows="10"></textarea>
</div><!-- response_wrapper -->
<input type="button" value='Save Date' id='call_back_btn'>
	</div><!-- wrapper -->

</body>
</html>