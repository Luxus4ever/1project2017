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
	
	<div id="albumi-main">
		
		
			<?php
			include "classes/tekst.class.php";
			$t= new Tekst();
			$t->prikazTeksta();
	//echo $_GET['tid'];
	$tid=$_GET['tid'];  
			require "classes/komentar.class.php";
			$ok= new Komentar;
			$ok->formaKomentar($tid);
			$ok->obKomentar($tid);
			//$ok->doKomentar();
			?>
			
	</div> <!--Kraj glavnog DIVA-->
	
</body>

</html>
