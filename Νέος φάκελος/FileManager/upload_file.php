<!DOCTYPE html>
<html>
	<body>
		<form action="check_upload_file.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" value="512000" name="MAX_FILE_SIZE" />
			<p><strong>File to Upload:</strong><input type="file" name="userfile" /></p>
			<p><input type="submit" value="upload!" /></p>
		</form>
	</body>
</html>