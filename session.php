<?php 
session_start();
$_SESSION ["username"] = "mohsin";
$_SESSION ["age"] = "20";


echo "Session variable are set";

echo "Username :" .$_SESSION ["username"];
echo "age :" . $_SESSION ["age"];

?>
