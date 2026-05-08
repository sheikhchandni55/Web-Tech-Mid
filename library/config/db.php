<?php
$conn = mysqli_connect("localhost", "root", "", "university_library");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>