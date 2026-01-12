<?php
header("Content-Type: application/json");

// Read JSON file
$data = file_get_contents("student.json");

// Send JSON data
echo $data;
?>
