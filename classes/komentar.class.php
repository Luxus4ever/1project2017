<?php


class Komentar
{
	public $komentar;
	public $tid;

	//Metoda sa formom za unos komentara ispod tekstova, na tekstovi.php
	public function formaKomentar($tid1)
	{
		?>
		<form action="proces/komentar_proces.php" method="POST" name="koment" id="koment">
				
					<label for="tekst">Ostavite komentar</label><br>
					
					<textarea name="tekst" id="tekst"></textarea><br>
					<input type="hidden" name="tid" value="<?php echo $tid1 ?>" id="tid"> <br>
					<input type="submit" name="pošalji" id="pošalji" value="Pošalji">
					<br><hr>
				
			
			</form>
			<?php
	}
	
	//--------------------------------------------------------------------------------------------------------------------
	
	
	//Ova metoda dodaje komentar i izvršava se na komentar_proces.php
	public function doKomentar()
	{
		if (isset($_POST['pošalji']))
		{
			if (isset($_POST['tekst']))
			{
				if (!empty($_POST['tekst']))
				{
					$this->komentar= trim ($_POST['tekst']);
					
					require "../config/config.php"; 
					session_start();
					$this->komentar= mysqli_real_escape_string ($conn, $this->komentar);
					//$q= ("CALL usp_dodajKomentar(null, '{$this->komentar}', '".$_SESSION['id']."')");
				$q= ("INSERT INTO komentari VALUES (null, '{$this->komentar}', '".$_SESSION['id']."', '".$_POST['tid']."')");
					$unos= mysqli_query ($conn, $q);
					if($unos === TRUE)
					{
						header("Location: ../tekstovi.php?tid=".$_POST['tid']);
						
					}else
						{
							echo "Greška";
						}
				}else
						{
							echo "Ne možete poslati prazan komentar";
						}
			}else
				{
					echo "Nemožete poslati prazan komentar!";
				}
		}
	}
	//--------------------------------------------------------------------------------------------------------------------
	
	
	//Prikaz i brisanje komentara na tekstovi.php i šalje se na obrisiKomentar_proces.php
	public function obKomentar ($tid)
	{
		@include "config/config.php";
		$q = "SELECT komentari.komentar, komentari.id, korisnici.username FROM komentari JOIN korisnici ON korisnici.id=komentari.korisnik_id WHERE komentari.tekst_id = '".$tid."' ORDER BY id DESC";
		//$q = "SELECT * FROM komentari ORDER BY id DESC";
		$rez= mysqli_query ($conn, $q);
				
		if (mysqli_num_rows($rez)> 0 )
		{
			while ($red = mysqli_fetch_assoc($rez))
			{ ?>
				<div id="rezultat">
				<hr><a href="proces/obrisiKomentar_proces.php?tid=<?php echo $red['id']?>">Obriši</a>
				<p><?php echo $red["komentar"] . "<br> Autor: " . $red["username"] . " <br>"?></p>		
				</div>
				<?php
			}
		}else
			{
				echo "Nema komentara.";
			}
	}
}