<?php

require 'db.php';

$sql = "CREATE TABLE Users ( 
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(50) NOT NULL, 
    email VARCHAR(50), 
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
)";

if(mysqli_query($conn,$sql))
    {
        echo "table created succesfully";
    }
    else{
        echo "Note created yet";
    }

?>