<head>
	<!-- This site was created by Adam M. Erickson to learn more about PHP in 2012 -->
	<title>Title will be php created in the future</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
</head>
<body>
	<?php session_start(); echo ('<p>Welcome '.$_SESSION['valid_user'].'</p>'); ?>
	<h1>School Site</h1>
	<hr/>
