<!doctype html>
<?php 
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
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