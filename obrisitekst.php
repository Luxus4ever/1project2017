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
				require "config/config.php";
				$query = "SELECT * FROM tekstovi ORDER BY tekstovi.id DESC";
				$rez= mysqli_query ($conn, $query);
				
				if (mysqli_num_rows($rez)> 0 )
				{
					while ($red = mysqli_fetch_assoc($rez))
					{ ?>
						<div id="rezultat">
							<hr><a href="proces/obrisiTekst_proces.php?id=<?php echo $red['id']?>">Obriši</a>
							<p><b>Naziv: </b><?php echo $red["naziv"]. "  - <b>Album:</b> " . $red["album"] ?></p>
						
							
						</div>
						<?php
					}
				}else
						{
							echo "Nema tekstova.";
						}

			?>

		</div>		


			
	</div> <!--Kraj glavnog DIVA-->
	
</body>

</html>
