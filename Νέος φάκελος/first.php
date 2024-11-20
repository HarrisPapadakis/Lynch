<!DOCTYPE html>
<html>
	<body>
		<h1>
		<?php
			$firstMessage = "Hello";
			echo $firstMessage. " ". gettype($firstMessage). "<br/>";
			$firstMessage .= " World";
			echo $firstMessage. " ". gettype($firstMessage). "<br/>";
			$firstMessage = "5.6";
			echo $firstMessage. " ". gettype($firstMessage). "<hr/>";
			//settype($firstMessage, 'double');
			$double_firstMessage = (double)$firstMessage / 1.2;
			echo $double_firstMessage. " ". gettype($firstMessage). " ". gettype($double_firstMessage). "<hr/>";
			$firstMessage = 5 + 10;
			echo $firstMessage. " ". gettype($firstMessage). "<br/>";
			$firstMessage = 5 - 10;
			echo $firstMessage. " ". gettype($firstMessage). "<br/>";
			$firstMessage = 5 * 10;
			echo $firstMessage. " ". gettype($firstMessage). "<br/>";
			echo ((int)($firstMessage / 3)). " ". gettype($firstMessage). "<br/>";
			$firstMessage %= 3;
			echo $firstMessage. " ". gettype($firstMessage). "<br/>";
		?>
		</h1>
	</body>
</html>