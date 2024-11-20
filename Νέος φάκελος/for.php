<!DOCTYPE html>
<html>
	<body>
		<h1>
		<?php
			for ($number = 1; $number <= 10; $number++) {
				for ($i = 1; $i <= 10; $i++) {
					printf("%03d\t",$number * $i);
				}
				print "<br/>";
			} 
		?>
		</h1>
	</body>
</html>