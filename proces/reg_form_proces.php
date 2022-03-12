<!DOCTYPE html>
<html>
<lang="SR">

<head>
	<title>2Pac Shakur</title>
	<meta charset="UTF-8">
	<link href="../style.css", rel="stylesheet", type="text/css">
</head>

<body>
	<div id="header">
		<ul>
			<li><a href="index.php">Početna</a></li>
			<li><a href="biografija.php">Biografija</a></li>
			<li><a href="albumi.php">Albumi</a></li>
			<li><a href="video.php">Video</a></li>
			<li><a href="kontakt.php">Kontakt</a></li>
	
	</div>
	<div id="kontakt-main">
<?php
require ("../classes/registration.class.php");

$reg= new Registracija;
$reg->registration();

?>
	</div>
	
</body>

</html>