<?php
	//get database connection
	require_once 'database_fns.php';

	$type = $_POST['type'];
	$surname = $_POST['surname'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$username = $_POST['user'];
	$password = $_POST['password'];

	//To prodect MySQL injection
	$surname = stripslashes($surname);
	$name = stripslashes($name);
	$phone = stripslashes($phone);
	$username = stripslashes($username);
	$password = stripslashes($password);
	$surname =  mysqli_real_escape_string($msqli, $surname);
	$name =  mysqli_real_escape_string($msqli, $name);
	$phone =  mysqli_real_escape_string($msqli, $phone);
	$username = mysqli_real_escape_string($msqli, $username);
	$password = mysqli_real_escape_string($msqli, $password);

	$sql = "SELECT * FROM $tbl_prosopiko WHERE username='$username' and password='$password'";
	$result = mysqli_query($msqli, $sql);
	$count = mysqli_num_rows($result);
	mysqli_free_result($result);

	//If result matched $myusername and $mypassword, table row must be 1 row
	if ($count == 1){
		document.getElementById("Warning").style.display = "block";
		document.getElementById("Warning").InnerText = "Ο χρήστης υπάρχει ήδη με τα συγκεκριμένα διαπιστευτήρια";
	} else {
		$sql = "INSERT INTO $tbl_prosopiko(type,surname,name,phone,username,password) VALUES($type,'$surname','$name','$phone','$username','$password')";
		$result = mysqli_query($msqli, $sql);
	}

	mysqli_close($msqli);
	header("Location: ..\components\modules\login.php");
?>