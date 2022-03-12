<?php

if (isset($_GET["id"]))
{
	$id= $_GET["id"];
	require "../config/config.php";
	$query= ("CALL usp_izbrisiTekst('{$id}')");
	//$query= "DELETE FROM tekstovi WHERE id={$id}";
	$rez= mysqli_query ($conn, $query);
	header ("location: ../obrisitekst.php");
}else {echo "ništa";} 


?>