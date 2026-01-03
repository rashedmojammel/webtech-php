<?php 
$age = 20;
$citizen = true; 
if ($age >= 18) { 
    if ($citizen) { 
        echo "You are eligible to vote."; 
    } else { 
        echo "You must be a citizen to vote."; 
    } 
} else { 
    echo "You are not old enough to vote."; 
} 
?>