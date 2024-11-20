<!DOCTYPE html>
<html>
	<body>
		<h1>
		<?php
			function _exit() { exit; }
			function check_file_open1() {
				$fp = (fopen("somefile", "r") || die("Το αρχείο δεν άνοιξε!"));
			}
			function check_file_open2() {
				$fp = (fopen("somefile", "r") or die("Το αρχείο δεν άνοιξε!"));
			}

			$a = 5;
			if ($a != 5) {
				print "Απαγορεύεται η πρόσβαση";
				_exit();
			}
			check_file_open1();
			check_file_open2();
		?>
		</h1>
	</body>
</html>