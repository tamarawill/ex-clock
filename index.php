<!doctype html>
<html>
<head>
	<title>PHP Clock</title>
	<meta charset="UTF-8">
</head>
<body>
	<p>The current time is 
		<?php 
			date_default_timezone_set('America/New_York');
			echo date('g:i a');
		?>
	</p>
	<p>Blah blah blah</p>
</body>
</html>