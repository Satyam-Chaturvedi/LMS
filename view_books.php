<?php
include 'db.php';

$sql = "SELECT id, title, author, publication_year FROM books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>View Books</title>
</head>
<body>
    <h1>Book List</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Publication Year</th>
            <!-- <th>Action</th> -->
            <!-- For future delete books button code for line 35 -->
            <!-- <td><a href='delete_book.php?id={$row['id']}'>Delete</a></td> -->
        </tr>

       
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['title']}</td>
                        <td>{$row['author']}</td>
                        <td>{$row['publication_year']}</td>
                       
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No books found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <a href="lms.php">Back to Home</a>
</body>
</html>
