<!DOCTYPE html>
<html>
	<body>
		<h1>
		<?php
			$LANG_FR = 'fr';
			$LANG_ES = 'es';
			$LANG_EN = 'en';
			$LANG_DE = 'de';
			$LANG_GR = 'gr';

			$choice = 'fr';

			switch ($choice) {
				case $LANG_FR: echo 'Γαλλικά'; break;
				case $LANG_ES: echo 'Ισπανικά'; break;
				case $LANG_EN: echo 'Αγγλικά'; break;
				case $LANG_DE: echo 'Γερμανικά'; break;
				case $LANG_GR: echo 'Ελληνικά'; break;
				default: echo 'Άγνωστη Γλώσσα!';
			}
		?>
		</h1>
	</body>
</html>