<?php
session_start();

$_SESSION['s'] += $_COOKIE['c'];
setcookie('c', $_COOKIE['c'] + 1, time()+3600, "/");

header("Location: b.php");
?>
