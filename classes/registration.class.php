<?php

class Registracija
{
	public function registration ()
	{
		if(isset($_POST['pošalji']))
					{
						if (isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['email']))
						{
							if (!empty($_POST['username']) && !empty($_POST['pass']) && !empty($_POST['email']))
								{
									$username = trim($_POST['username']);
									$pass = trim($_POST['pass']);
									$pass = md5 ($_POST['pass']);
									$email = trim($_POST['email']);
									require "../config/config.php";
									$username= mysqli_real_escape_string ($conn, $username);
									$pass= mysqli_real_escape_string ($conn, $pass);
									$email= mysqli_real_escape_string ($conn, $email);
									
									$query= "INSERT INTO korisnici (username, pass, email) VALUES ('{$username}', '{$pass}', '{$email}')";
									//echo $query;
									if (mysqli_query ($conn, $query)=== TRUE)
										{
											echo "Registracija uspješna! <br> <br> <br> 
											Kliknite <a href='http://localhost:8080/php2/Assigment2.3/index.php'>OVDE</a> na povratak na glavnu stranu i da se ulogujete.";
											//header("Location: http://localhost:8080/php2/Assigment2.3/index.php");
										}else
											{
												echo "Greška prilikom upisa!";
											}
								}else 
									{
										echo "Sva polja moraju biti popunjena.";
									}
						}else 
							{
								echo "Svi parametri moraju biti unešeni.";
							}
					}
	}
}