<?php
session_start();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if (
    empty($fname) || empty($lname) || empty($dob) ||
    empty($gender) || empty($phone) ||
    empty($email) || empty($password) || empty($cpassword)
) {
    header("Location: registration.php");
    exit;
}

if ($password !== $cpassword) {
    echo "Passwords do not match";
    exit;
}

echo "<h2>Registration Details</h2>";
echo "First Name: $fname <br>";
echo "Last Name: $lname <br>";
echo "Date of Birth: $dob <br>";
echo "Gender: $gender <br>";
echo "Phone: $phone <br>";
echo "Email: $email <br>";
?>
