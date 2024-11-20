<!DOCTYPE html>
<html>
	<body>
		<h1>
		<?php
			$prod = array("Μήλο", "Αχλάδι", "Ντομάτα", "Αγγούρι");
			$prod_qty = array(20, 30, 20, 15);
			$prod_price = array(1.5, 2.5, 1.3, 1.8);
			$i = 0;

			while ($i < 4) {
				echo $prod[$i]. ":". $prod_qty[$i] * $prod_price[$i]. "<br/>";
				$i++;
			}
		?>
		</h1>
	</body>
</html>