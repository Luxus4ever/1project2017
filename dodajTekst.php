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
		$h->provjera2();
		$h->meni();
		?>
		
		<div id="al-main-foot">
			<?php
				

			?>
			
		</div>		
			<form action="proces/unesiTekst_proces.php" method="POST" name="koment" id="koment">
				
				<label for="naziv">Naziv pjesme:</label><br> 
				<input type="text" name="naziv" id="naziv" required="required"><br><br>
				
				<label for="album">Album: </label><br> 
				<input type="text" name="album" id="album" required="required"><br><br>
				
				<label for="tekst">Unesite tekst</label><br>
				<textarea name="tekst" id="tekst"></textarea><br>
				
				<label for="trajanje">Trajanje: </label> <br>
				<input type="text" name="trajanje" id="trajanje" required="required"><br><br>
				
				<input type="submit" name="pošalji" id="pošalji" value="Pošalji">
				<br><hr>
				<p>Zadnje dodato:</p>
				
			
			</form>
			<?php
				include "classes/tekst.class.php";
				$t= new Tekst;
				$t->tekst2();
			?>
			
	</div> <!--Kraj glavnog DIVA-->
	
</body>

</html>
