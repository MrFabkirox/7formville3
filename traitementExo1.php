<!DOCTYPE HTML>
<html>
<head>
 	<title>7formville1</title>
 	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="style.css">
    <script type='text/javascript' src='script.js'></script>
</head>
<body>


<div id="right"><?php include("menu.php"); ?></div>

<div id="left">

<h3>Reponse</h3>

<?php

	if(isset($_POST['name'])) {
		$name = $_POST['name'];
		print("Name is $name <br />");
	}

	if(isset($_POST['psw'])) {
		$psw = $_POST['psw'];
		print("Pass is $psw <br />");
	}

	if(isset($_POST['sex'])) {
		$sex = $_POST['sex'];
		print("You are a $sex<br />");
	}

	$city = $_POST['city'];
	print("You re from $city<br />");


	$hobbies = $_POST['hobbies'];
	foreach($hobbies as $elem) {
		print("Your hobbies : $elem<br />");
	}

	$cars = $_POST['cars'];
	foreach($cars as $elem) {
		print("You like $elem<br />");
	}


?>

</div>

</body>
</html>