<!DOCTYPE html>
<html>
	<body>
		<h1>
		<?php
			// get author info and generate DocBook entry
			$auth = "24\tLewis Carroll";
			$n = sscanf($auth, "%d\t%s %s", $id, $first, $last);
			echo "<author id='$id'>
    			<firstname>$first</firstname>
    			<surname>$last</surname>
				</author>\n";
		?>
		</h1>
	</body>
</html>