<!DOCTYPE html>
<html>
	<body>
		<h1>
		<?php
			$a = 3; $b = 0;
			echo (isset($a, $b)) ? "The variables is set<br>" : "The variables is not set<br>";
			echo (empty($a)) ? "The variable a is empty<br>" : "The variable a is not empty<br>";
			echo (empty($b)) ? "The variable b is empty<br>" : "The variable b is not empty<br>";
			unset($a, $b);
			echo (isset($a, $b)) ? "The variables is set<br>" : "The variables is not set<br>";
			echo (empty($a)) ? "The variable a is empty<br>" : "The variable a is not empty<br>";
			echo (empty($b)) ? "The variables b is empty" : "The variables b is not empty";
		?>
		</h1>
	</body>
</html>