<!DOCTYPE html>
<html>
	<body>
		<h1>
		<?php
			$i = 1;
			$number = 1;

			do {
				do {
					printf("%03d\t",$number * $i++);
				} while($i <= 10);
				print "<br/>";
				$number++;
				$i = 1;
			} while($number <= 10);
		?>
		</h1>
	</body>
</html>