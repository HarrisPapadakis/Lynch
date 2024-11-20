<!DOCTYPE html>
<html>
	<body>
		<h1>
		<?php
			$a = "1.Πορτοκαλάδα με 0.7€";
			$b = "2. Λεμονάδα 0.5€";
			$c = "3. Ανθρακούχο Νερό 0.4€";
			$d = "4. Χωνευτικό ποτό 0.8€";

			echo $a. "<br/>".$b. "<br/>".$c. "<br/>".$d. "<br/>". "<br/>";
			
			$choice = 31;

			if ($choice === 1) echo $a;
			elseif ($choice === 2) echo $b;
			elseif ($choice === 3) echo $c;
			elseif ($choice === 4) echo $d;
			else echo "Λάθος Επιλογή";
		?>
		</h1>
	</body>
</html>