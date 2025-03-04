<?php
	$host="localhost";
	$rootusername="root";
	$rootpassword="";
	$db_name="school";
	$tbl_prosopiko="prosopiko";
	$tbl_mathima="dioik_math";
	$tbl_apousies="dioik_apousies";
	$tbl_vivliothiki="vivliothiki";
	//Connect to server and select database.
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$msqli = new mysqli("$host","$rootusername","$rootpassword","$db_name");
?>