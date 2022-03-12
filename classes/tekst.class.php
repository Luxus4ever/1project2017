<?php

class Tekst
{
	public $naziv;
	public $album;
	public $tekst;
	public $ispis;
	public $trajanje;
	
	
	//Ova metoda se izvršava na unesiTekst_proces.php
	public function uTekst()
	{
		if (isset($_POST['pošalji']))
		{
			if (isset($_POST['naziv']) && isset($_POST['album']) && isset($_POST['tekst']) && isset($_POST['trajanje']))
			{
				if (!empty($_POST['naziv']) && !empty($_POST['album']) && !empty($_POST['tekst']) && !empty($_POST['trajanje']))
				{
					$this->naziv = trim ($_POST['naziv']);
					$this->album = trim ($_POST['album']);
					$this->tekst= trim ($_POST['tekst']);
					$this->trajanje= trim ($_POST['trajanje']);
					
					require "../config/config.php"; 
					$this->naziv= mysqli_real_escape_string ($conn, $this->naziv);
					$this->album= mysqli_real_escape_string ($conn, $this->album);
					$this->tekst= mysqli_real_escape_string ($conn, $this->tekst);
					$this->trajanje= mysqli_real_escape_string ($conn, $this->trajanje);
					
					$this->tekst = str_replace('"', "&#10078", $this->tekst);
					$this->tekst = str_replace("'", "&#10076", $this->tekst);
					$q= ("CALL usp_dodajTekst('{$this->naziv}', '{$this->album}', '{$this->tekst}', '{$this->trajanje}')");
					//$q= ("INSERT INTO tekstovi (naziv, album, tekst, trajanje) VALUES ('{$this->naziv}', '{$this->album}', '{$this->tekst}', '{$this->trajanje}')");
					$unos= mysqli_query ($conn, $q);
					if($unos === TRUE)
					{
						header("Location: ../dodajtekst.php");
						
					}else
						{
							echo "greška";
						}
				}else
						{
							echo "Sva polja moraju biti popunjena.";
						}
			}else
				{
					echo "Nemožete poslati prazan komentar!";
				}
		}
	}
	//--------------------------------------------------------------------------------------------------------------------
	
	
	//Prikaz tekstova na tekstovi.php
	public function prikazTeksta()
	{
		require "config/config.php"; 
		$ime= isset ($_GET['tid']) && is_numeric ($_GET['tid']) ? $_GET['tid'] : 0;

		$q= ("SELECT * FROM tekstovi WHERE tekstovi.id= $ime"); 
		$ispis= mysqli_query ($conn, $q);
		while ($red= mysqli_fetch_assoc($ispis))
		{
		echo "<h2>Naziv: " . $red['naziv'] . "</h2><br><br>" . "<h3>Album: " . $red['album'] . "</h3><br><br><hr><p align='center'>" . nl2br($red['tekst']) ."<br><hr>";
		}
	}
	//--------------------------------------------------------------------------------------------------------------------
	
	
	//Prikaz zadnjih 5 unijetih tekstova na dodajtTekst.php
	public function tekst2()
	{
		require "config/config.php";
				$query = "SELECT tekstovi.naziv, tekstovi.album ,slikealbumi.slika FROM tekstovi LEFT JOIN slikealbumi ON tekstovi.album=slikealbumi.naziv ORDER BY tekstovi.id DESC limit 5";
				//pokušaj dodavanje slika uz tekstove
				
				//$query = "SELECT * FROM tekstovi ORDER BY tekstovi.id DESC limit 5";
				$rez= mysqli_query ($conn, $query);
				
				if (mysqli_num_rows($rez)> 0 )
				{
					while ($red = mysqli_fetch_assoc($rez))
					{ ?>
						<div id="rezultat">
							<p><b>Naziv: </b><?php echo $red["naziv"] . "  - <b>Album:</b> " . $red["album"] ?> &nbsp  &nbsp &nbsp<img src="<?php echo $red['slika'] ?>" id="malaSlika" ></img></p><hr>
						
							
						</div>
						<?php
					}
				}else
						{
							echo "Nema tekstova.";
						}
	}
	//--------------------------------------------------------------------------------------------------------------------
	
	
	
}

