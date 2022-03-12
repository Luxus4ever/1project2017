<?php

if (isset($_GET["tid"]))
{
	$id= $_GET["tid"];
	@include_once "../config/config.php";
	//$q= ("CALL usp_izbrisiKomentar('{$id}')");
	$q= ("DELETE FROM komentari WHERE id={$id}");
	$rez= mysqli_query ($conn, $q);
	header ("location: ../albumi.php");
}else 
	{
		echo "ništa";
	} 