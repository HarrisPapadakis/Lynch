<!DOCTYPE html>
<html>
	<body>
		<h1>
		<?php
			$a = 30;
			$b = 12;
			$c = 45;
			$max = ($a > $b) ? $a : $b;
			$max = ($max > $c) ? $max : $c;

			echo "Ο μεγαλύτερος αριθμός είναι ". $max;
		?>
		</h1>
	</body>
</html>