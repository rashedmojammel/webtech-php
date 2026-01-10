<?php

session_start();
if ($_SERVER["REQUEST_METHOD"] == "post") 
    {
    $fname = $_POST['fname'];
    $uname = $_POST['Username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $profile = $_POST['profile'];

    if (empty($fname) || empty($uname) || empty($password) || empty($gender) || empty($country) || empty($profile)) 
    {
        echo "please enter the feild";
        exit;
    }
 $_SESSION['fname'] = $fname;
$_SESSION['uname'] = $uname;
$_SESSION['password'] = $password;
$_SESSION['gender'] = $gender;
$_SESSION['country'] = $country;
$_SESSION['profile'] = $profile;

header ("location: show.php");
exit;
}
else
{
    echo "invalid req";
}
?>

<!-- Create a PHP page named validate.php to Validate the data received. This page will check if 
none of the given output is not NULL. If any one of input is null, then it will show a message “Enter 
Valid data”. If user gives valid data, then display the user’s given data and Save the Full Name, 
Username, and uploaded image path in $_SESSION and Redirect the user to dashboard.php. -->