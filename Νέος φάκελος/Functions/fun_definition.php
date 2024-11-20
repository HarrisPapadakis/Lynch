<!DOCTYPE html>
<html>
	<body>
		<h1>
		<?php
			function print_spec_type(int $a, int $b) {
				echo "values=". $a. ",". $b;
			}
			function print_gen_type($a, $b) {
				echo "values=". $a. ",". $b;
			}
			function by_reference(&$a, &$b) {
				echo "values=". $a. ",". $b;
				$a = 5; $b = 10;
				echo "values=". $a. ",". $b;
			}
			function sum(int $a, int $b) {
				return $a + $b;
			}
			function print_results($sum) {
				echo "The sum is: ". $sum;
			}
			function optional_var(int $a, int $b = 15) {
				echo "values=". $a. ",". $b;
			}
			print_spec_type(3.45,5.78);
			echo "<br>";
			print_gen_type(3,5);
			echo "<br>";
			print_gen_type(3.45,5.78);
			echo "<br>";
			print_gen_type("Hello","World");
			echo "<br>";
			$a = 3; $b = 5;
			by_reference($a,$b);
			echo "<br>";
			print_results(sum($a, $b));
			echo "<br>";
			optional_var(3);
		?>
		</h1>
	</body>
</html>