<html> 
<head> 
</head> 
<body> 
<?php 
    if (isset($_COOKIE['count'])) { 
        echo "<p>You have visited " . $_COOKIE['count'] . " 
times.</p>"; 
    } else { 
        echo "Cookie has been reset or not initialized."; 
    } 
?> 
<button><a href="show.php">Refresh Page</a></button> 
</body> 
</html> 