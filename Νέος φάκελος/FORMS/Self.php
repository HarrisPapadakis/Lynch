<HTML>
	<HEAD>
		<TITLE>Φόρμα </TITLE>
	</HEAD>
	<BODY>
		<FORM ACTION="<?php echo $_SERVER['PHP_SELF'] ?>" METHOD="POST">
			<P><STRONG>Name:</STRONG><BR>
			<INPUT TYPE="TEXT" NAME="USER"></P>
			<P><STRONG>Address:</STRONG><BR>
			<TEXTAREA NAME="ADDRESS" ROWS="5" COLS="40"></TEXTAREA></P>
			<P><INPUT TYPE="SUBMIT" VALUE="SEND"></P>
		</FORM>
		<?php
			$user=$_POST["USER"];
			$address=$_POST["ADDRESS"];
			if ($user) {
				echo "<p>Welcome <b>$user</b></p>";
				echo "<p>Your address is:<br><b>$address</b></p>";
			}
		?>
	</BODY>
</HTML>
