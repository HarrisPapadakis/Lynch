<HTML>
	<HEAD>
		<TITLE>Εμφάνιση στοιχείων από φόρμα</TITLE>
	</HEAD>
	<BODY>
		<?php
			$user=$_POST["USER"];
			$address=$_POST["ADDRESS"];
			echo "<p>Welcome <b>$user</b></p>";
			echo "<p>Your address is:<br><b>$address</b></p>";
		?>
	</BODY>
</HTML>