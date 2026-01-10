<?php
session_start();

if (!isset($_SESSION['s'])) {
    $_SESSION['s'] = 1;
}

if (!isset($_COOKIE['c'])) {
    setcookie('c', 2, time()+3600, "/");
}

echo "S=".$_SESSION['s']." C=".($_COOKIE['c'] ?? 0);
?>
<a href="b.php">Next</a>
<a href="c.php">Reset</a>
