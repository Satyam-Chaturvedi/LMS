<?php
include 'db.php';

$sql = "CREATE DATABASE IF NOT EXISTS library";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$sql = "USE library";
if ($conn->query($sql) !== TRUE) {
    echo "Error selecting database: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS books (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    publication_year INT(4) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table books created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
