<?php 
require 'db.php';


$sql = "INSERT INTO Users (name,email) VALUES ('Rashed','rashedmojamel@gmail.com')";

if(mysqli_query($conn,$sql))
    {
        echo "Insert succesfully";
    }
else{
    echo "not inersted " . mysqli_connect_error();
}


?>