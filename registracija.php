<!DOCTYPE html>
<html>
<lang="SR">

<head>
	<title>2Pac Shakur</title>
	<meta charset="UTF-8">
	<link href="style.css", rel="stylesheet", type="text/css">
</head>

<body>
	<div id="wrapper">
	<?php
	require "classes/header.class.php";
	$h= new Header;
	$h->meni();
	?>
	
	<div id="kontakt-main">
		<form action="proces/reg_form_proces.php" method="POST" name="registracija" id="registracija">
			
			<input type="text" name="username" id="username" placeholder="Korisničko ime" required="required"/><br><br>
			<input type="text" name="pass" id="pass" placeholder="Šifra" required="required"/><br><br>
			<input type="text" name="email" placeholder="E-mail" required="required"/><br><br><br>		
	
		<input type="submit" name="pošalji" id="pošalji" value="Pošalji">

	
		</form>
	
	
	</div>
	
</body>

</html>
