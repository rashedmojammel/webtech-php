<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Registration form</h2>
    <form action="showdata.php" method="post">
        Full name : <input type="text" name="fname"><br>
        Last name : <input type="text" name="lname"><br>
        Data of Birth :<input type = "date" name="dob"><br>
        Gender :
        <input type="radio" name="Gender" value="Male"> Male <br>
        <input type="radio" name="Gender" value="Female"> Female<br>
        Phone : <input type="text"  name="phone"><br>
        Email : <input type="email" name="email"><br>
        Password :<input type="password" name="password"><br>
        Confirm Password :<input type="password" name="Cpassword"><br>

        <input type="submit" value="submit">


    </form>
</body>
</html>
<!-- Create a PHP page named “registration.php”, that will contain a HTML form that will have 
following input fields: First Name, Last Name, DOB, Gender, Phone, Email ID, Password and 
Confirm password. 
o First Name, Last Name, DOB, Phone and Email will be textbox, Gender will be Radio 
Button and Password and Confirm password will be password in type. 
o Make sure you have defined “showdata.php” as the value of action attribute of your HTML 
form.  -->