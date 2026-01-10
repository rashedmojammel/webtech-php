<?php
session_start();

session_destroy();
setcookie('c', 1, time()+3600, "/");

header("Location: c.php");
?>
