<!DOCTYPE html>
<html>
	<body>
		<h1>
		<?php
			$propedia_8 = array();
			
			for ($i = 1; $i <= 10; $i++) $propedia_8[$i - 1] = $i * 8;
			rsort($propedia_8);
			foreach($propedia_8 as $var) echo $var. ' ';
		?>
		</h1>
	</body>
</html>