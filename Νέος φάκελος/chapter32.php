<!DOCTYPE html>
<html>
	<body>
		<h1>
		<?php
			$i = 1;
			while ($i <= 10) {
				print $i++;
			}

			echo "<br/>";

			$i = 1;
			do {
				print $i++;
			} while ($i <= 10);

			echo "<br/>";

			for ($i = 1; $i <= 10; $i++) {
				if ($i == 7) continue;
				print $i;
			}
		?>
		</h1>
	</body>
</html>

