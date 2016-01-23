<?php include 'head.php'; ?>
<?php include 'header.php'; ?>
<body onload='init()'>
	<table id='content'>
		<tr>
			<td>
				<div id='scroll'></div>
			</td>
			<td id='colorpicker' valign='top'>
				<img src="#" alt="" >
				<br>
				<input type="hidden" id='color' readonly='true'value='#000000'>
				<p id='sampleText'>(Text will look liek this!)</p>
			</td>
		</tr>
	</table>
	<div>
		<input type="text" id='userName' maxlength='10' size-'1-' onblur='checkusername'>
		<input type="text" id='messageBox' maxlength='2000' size-'1-' onkeydown='handleKey(event)'>
		<input type="button" value='send' onclick='sendMessage();'>
		<input type="button" value='delete' onclick='deleteAll();'>
	</div>
</body>