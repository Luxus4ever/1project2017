<?php

class header
{
	//Metoda za registraciju, login i dobrodošlicu korisnika
	public function __construct()
	{
		session_start();

		if (isset($_SESSION['id']))
		{
			echo "Dobrodošao " . $_SESSION ['username']. "<br> 
			<a href='proces/logout.php'>Odjava</a><br><br>";
		}else
			{
				echo 
				"<a href='login.html'>Prijava</a>
				<a href='registracija.php'>Registracija</a>";
			}
	}
	//--------------------------------------------------------------------------------------------------------------------
	
	//Metoda za prikaz menija
	public function meni()
	{
		echo 
		'<header>
			<div id="logo"><a href="index.php"><img src="images/tupac-logo.png" alt="2pac Logo"></a></div>
            <div id="naslov"><p>2Pac Shakur</p></div>
		</header>
		<nav>
			<ul>
				<li><a href="index.php">Početna</a></li>
				<li><a href="biografija.php">Biografija</a></li>
				<li><a href="albumi.php">Albumi</a></li>
				<li><a href="video.php">Video</a></li>
				<li><a href="kontakt.php">Kontakt</a></li>
			</ul>
		</nav>';
	}
	//--------------------------------------------------------------------------------------------------------------------
	
	//Provjera korisnika da li je ulogovan na korisničke stranice
	public function provjera1()
	{
		if (!isset($_SESSION['id']))
			{
				die ("Niste ulogovani!");
			}
	}
	//--------------------------------------------------------------------------------------------------------------------
	
	//Provjera da li je ulogovan na ADMIN stranice
	public function provjera2()
	{
		if (!isset($_SESSION['id']))
				{
					die ("<a href='index.php'><img src='images/404-cat.gif'></a>");
				}
	}
	//--------------------------------------------------------------------------------------------------------------------
}
?>