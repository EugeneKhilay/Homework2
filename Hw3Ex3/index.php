<?php
	function speed($s, $t) {
		echo "<p> Speed km/h = " . $speed = $s / $t . "</p>";
		echo "<p> Speed m/s = " . $speed = $speed * 1000 / 3600 . "</p>";
	}
	speed($_GET['Way'], $_GET['Time']);	
?>