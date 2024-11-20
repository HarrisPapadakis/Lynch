<!DOCTYPE html>
<html>
	<body>
		<h1>
		<?php
			$vathmos = 'G';

			if ($vathmos === 'Α') echo "Άριστα";
			else if ($vathmos === 'Β') echo "Αρκετά Καλά";
			else if ($vathmos === 'Γ') echo "Όχι Άσχημα";
			else if ($vathmos === 'Δ') echo "Μόλις που τα κατάφερες";
			else if ($vathmos === 'Ε') echo "Καλοκαιρινό Φροντηστήριο";
			else echo "Αυτός δεν είναι βαθμός";
		?>
		</h1>
	</body>
</html>