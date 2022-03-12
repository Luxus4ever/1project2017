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
	$h->provjera1();
	?>
		<form action="neka.skripta" method="post" name="kontakt" id="kontakt">

		<label for="ime">*Ime</label> <br>
		<input type="text" name="ime" id="ime" required="required">
		
		<br>
		<br>
		<label for="prezime">*Prezime</label> <br>
		<input type="text" name="prezime" id="prezime" required="required">
		
		<br>
		<br>
		<label>*Email:</label><br>
		<input type="text" name="email" required="required">
		<br>
		
		
		<br>
		<br>
		<label for="sifra">*Šifra</label> <br>
		<input type="password" name:="sifra" id="sifra" required="required">
		
		
		<br>
		<br>
		<label for="file">Postavite dokument ukoliko treba</label><br>
		<input type="file" name="file" id="file">
		
		<br>
		<br>
		<label for="tekst">Vaš predmet poruke</label><br>
		<textarea name="tekst" id="tekst"></textarea>
		
		
		
		
		
		<br>
		<br>
		<input type="submit" name="pošalji" id="pošalji" value="Pošalji">

		
		</form>
	
	
	</div>
	
</body>

</html>