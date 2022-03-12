<?php
require "../config/config.php";


$username= $_POST['username'];
$password= $_POST['pass'];
//$userID= $_POST['id'];
$id;
$newpassword = md5($password);

	$username = str_replace("'", "", $_POST['username']);
	$username = str_replace("<", "", $username);
	$username = str_replace(">", "", $username);
	$username = str_replace("-", "", $username);
	$username = str_replace(";", "", $username);
	$username = str_replace("`", "", $username);
	$username = str_replace("*", "", $username);

	$password = str_replace("'", "", $_POST['pass']);
	$password = str_replace("<", "", $_POST['pass']);
	$password = str_replace(">", "", $_POST['pass']);
	$password = str_replace("-", "", $_POST['pass']);
	$password = str_replace(";", "", $_POST['pass']);
	$password = str_replace("`", "", $_POST['pass']);
	$password = str_replace("*", "", $_POST['pass']);
	
$query=("SELECT * FROM korisnici WHERE username='{$username}' and pass='{$newpassword}' limit 1");
$res= mysqli_query($conn,$query);
$user= mysqli_fetch_object($res);
require "../classes/sesija.class.php";
if ($user)
{
	
	echo "Dobrodošao ".$username;
	
}else
	{
		if (empty ($_POST['username']) || ($_POST['pass']) )
		{
			echo ("Pogrešna šifra ");
		}else
		{
		echo "Niste unijeli sve podatke.";
		}
	}

/*	
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,"select id,username from korisnici where username = ? and pass = ?");
mysqli_stmt_bind_param($stmt,"ss",$username,$password);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt,$userID,$user_name);
session_start();
$_SESSION['id']= $user->id;
$_SESSION['username']= $username;
header("Location: http://localhost:8080/php2/Assigment2.3/index.php");*/
	
//print_r ($user);

