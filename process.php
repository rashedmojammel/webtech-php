<?php
// ===============================
// 1️⃣ HANDLE GET FORM
// ===============================
if (isset($_GET['username'])) {
    echo "<h3>GET Form Data</h3>";
    echo "Username (GET): " . $_GET['username'] . "<br><br>";
}

// ===============================
// 2️⃣ HANDLE POST FORM
// ===============================
if (isset($_POST['username'])) {
    echo "<h3>POST Form Data</h3>";
    echo "Username (POST): " . $_POST['username'] . "<br><br>";
}

// ===============================
// 3️⃣ HANDLE FILE UPLOAD
// ===============================
if (isset($_FILES['myFile'])) {

    echo "<h3>File Upload</h3>";

    $fileName = $_FILES['myFile']['name'];
    $fileTmp  = $_FILES['myFile']['tmp_name'];
    $fileSize = $_FILES['myFile']['size'];

    echo "File Name: $fileName <br>";
    echo "File Size: $fileSize bytes <br>";

    // Move file to uploads folder
    move_uploaded_file($fileTmp, "uploads/" . $fileName);

    echo "File uploaded successfully!";
}
?>
