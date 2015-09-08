<html> 
<head> 
<title>Example</title> 
</head> 
<body> 
<?php
	function speed($s, $t) {
		echo "<p> Speed km/h = " . $speed = $s / $t . "</p>";
		echo "<p> Speed m/s = " . $speed = $speed * 1000 / 3600 . "</p>";
	}
	speed(30, 2);
?> 
</body> 
</html>