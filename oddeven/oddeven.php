<?php 
if (isset($_POST['num'])) { 
    $num = (int)$_POST['num']; // Convert input to integer 
 
    if ($num % 2 === 0) { 
        echo "Even"; 
    } else { 
        echo "Odd"; 
    } 
} else { 
    echo "Please enter a number."; 
} 
?>
