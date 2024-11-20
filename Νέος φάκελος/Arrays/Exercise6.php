<!DOCTYPE html>
<html>
	<body>
		<h1>
		<?php
			$number = 10;
			$arr_paragontiko = array();
			$paragontiko = 1;
			
			for ($i = 1; $i <= $number; $i++) {
				$paragontiko *= $i;
				$arr_paragontiko[$i - 1] = $paragontiko;
			}
			foreach($arr_paragontiko as $var) echo $var. ' ';
			echo '<br/>';
			echo "Paragontiko:". $paragontiko;
		?>
		</h1>
	</body>
</html>