<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publication_year = $_POST['publication_year'];

    $sql = "INSERT INTO books (title, author, publication_year) VALUES ('$title', '$author', '$publication_year')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New book added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Add Book</title>
</head>
<body>
    <h1>Add New Book</h1>
    <form method="post" action="">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br>
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required><br>
        <label for="publication_year">Publication Year:</label>
        <input type="number" id="publication_year" name="publication_year" required><br>
        <input type="submit" value="Add Book">
    </form>
    <a href="lms.php">Back to Home</a>
</body>
</html>
