<!doctype html>
<?php 
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
<html>
<head>
	<title>PHP Clock</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css" />
	<?php require('controller.php'); ?>
</head>
<body class="<?=$colorname ?>">
	<h1>It's <?=$prettydate ?></h1>
	<p>Time zone: <?=$timezone ?></p>
	<div class="image">
	<img src = "http://making-the-internet.s3.amazonaws.com/<?=$picpath ?>" />
	</div>
	</body>
</html>