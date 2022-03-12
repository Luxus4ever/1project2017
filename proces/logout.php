<?php
session_start();
unset ($_SESSION['id']);
session_destroy();
header("Location: http://localhost:8080/php2/Assigment2.3/index.php");