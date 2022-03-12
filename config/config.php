<?php

define ("DB", "2pacsajt");
define ("DBHOST", "localhost");
define ("DBUSER", "root");
define ("DBPASS", "");
$conn = mysqli_connect (DBHOST, DBUSER, DBPASS, DB);
/*
$dbname= "2pacsajt";
$dbhost= "localhost";
$user= "root";
$dbpass = "";

$conn = mysqli_connect ("localhost", "root", "", "2pacsajt");*/
if (!$conn)
{
	die ("Connection error:" . mysqli_connect_error());
}

