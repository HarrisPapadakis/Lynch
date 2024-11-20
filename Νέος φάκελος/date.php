<!DOCTYPE html>
<html>
	<body>
		<h1>
		<?php
			$today = strtotime(date('y-m-d'));
			echo gettype($today). ' '. $today. ' '. date("y-m-d", $today);
		?>
		</h1>
	</body>
</html>