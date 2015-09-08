<html> 
<head> 
<title>Example</title> 
</head> 
<body> 
<?php
	function changeMas($mas) {
		$min = min($mas);
		$pos = 0;
		print "Mas = " . join(", ", $mas) . "<br>";
		print "Min element = " . $min . "<br>";
		foreach ($mas as $key => $value) {
			if ($value == $min) {
				$pos = $key;
			}
		}
		for ($i = 0; $i < $pos; $i++) {
			$mas[$i] *= $min;
		}
		print "Changed mas = " . join(", ", $mas);
	}
	changeMas(array(4, 3, 8, 5, 2, 6, 14));
?> 
</body> 
</html>