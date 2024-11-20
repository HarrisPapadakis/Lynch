<!DOCTYPE html>
<html>
	<body>
		<h1>
		<?php
			$varos_epistolis = 1000;
			$proorismos = 'EJ';
			$ejoda_apostolis = 0;

			if ($varos_epistolis >= 0 && $varos_epistolis <= 500) {
				$ejoda_apostolis = ($proorismos == 'ES') ? 2 : (($proorismos == 'EJ') ? 4.8 : 0);
			}
			elseif ($varos_epistolis > 500 && $varos_epistolis <= 1000) {
				$ejoda_apostolis = ($proorismos == 'ES') ? 3.5 : (($proorismos == 'EJ') ? 7.2 : 0);
			}
			elseif ($varos_epistolis > 1000 && $varos_epistolis <= 2000) {
				$ejoda_apostolis = ($proorismos == 'ES') ? 4.6 : (($proorismos == 'EJ') ? 11.5 : 0);
			}

			if ($ejoda_apostolis != 0) echo "Τα έξοδα αποστολής είναι:". $ejoda_apostolis;
			else echo "Λανθασμένα Δεδομένα [". $varos_epistolis. ",". $proorismos. "]";

		?>
		</h1>
	</body>
</html>