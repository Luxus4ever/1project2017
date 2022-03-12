<?php
/*
class sesija
{*/
	//public function __construct()
	session_start();
	$_SESSION['id']= $user->id;
	$_SESSION['username']= $username;
	//$id = $_SESSION['id'];
	header("Location: http://localhost:8080/php2/Assigment2.3/index.php");
	
	
//}
