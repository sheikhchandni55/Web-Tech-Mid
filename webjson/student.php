<?php
header("Content-Type: application/json");

$student = array(
    "name" => "Sheikh Chandni",
    "id" => "23-51027-1",
    "department" => "CSE",
    "cgpa" => 3.75
);

echo json_encode($student);
?>