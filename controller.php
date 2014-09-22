<?php 
	date_default_timezone_set('America/New_York');
	
	$prettydate = date('g:i a');
	$timezone = date('e');
	
	$hour = (int)date('G');
	
	$colorname = "morning";
	
	$picpath = "php-morning.png";
	
	if ($hour >= 5 && $hour < 11) {
		$colorname = "morning";
		$picpath = "php-morning.png";
	} else if ($hour >= 11 && $hour < 16) {
		$colorname = "afternoon";
		$picpath = "php-afternoon.png";
	} else if ($hour >= 16 && $hour < 20) {
		$colorname = "evening";
		$picpath = "php-evening.png";
	} else {
		$colorname = "night";
		$picpath = "php-night.png";
	}

?>
