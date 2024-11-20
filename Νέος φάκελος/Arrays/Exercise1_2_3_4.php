<!DOCTYPE html>
<html>
	<body>
		<h1>
		<?php
			$lang_prog = array('Perl', 'PHP', 'C', 'Java', 'Pascal', 'Cobol', 'Visual Basic');
			$numbers = array(8, 12, 21, 3, 15, 6, 7, 32, 9);
			$max = $numbers[0];
			$min = $numbers[0];

			foreach ($lang_prog as $var) echo $var. ' ';
			echo '<br/>';
			foreach ($numbers as $var) echo $var. ' ';
			echo '<br/>';
			foreach ($numbers as $var) {
				$max = $max <= $var ? $var : $max;
				$min = $min >= $var ? $var : $min;
			}
			echo 'Max:'. $max. ' Min:'. $min;
			echo '<br/>';
			sort($numbers);
			foreach ($numbers as $var) echo $var. ' ';
			echo '<br/>';
			rsort($numbers);
			foreach ($numbers as $var) echo $var. ' ';
		?>
		</h1>
	</body>
</html>