<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    header("Location: index.php#signIn");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Library Management System</title>
    <style>
        .h1 {
            color: red;


        }

        body {
            background-image: url('images/lms_bg4.avif');
            background-size: cover;
            background-position: center;
        }

        .welcome-message {
            margin-top: 20px;
            padding: 10px;
            /* background-color: rgba(0, 123, 255, 0.2);
             */

            background-color: rgb(255, 323, 123);
            border: 1px solid #007bff;
            color: #007bff;
            border-radius: 5px;
        }

    </style>
</head>

<body>
<?php include 'navbar.php'; ?>


    <?php
    if (isset($_SESSION['id'])) {
        $firstname = $_SESSION['firstname'];
        echo "<div class='welcome-message'>Hello $firstname, welcome to PMPT Library</div>";
    }
    ?>

    <h1 class="h1">Library Management System</h1>
    <button type="button" class="btn btn-light"><a href="add_new_book.php">View Books</a></button><br>
    <button type="button" class="btn btn-light"><a href="view_books.php">View Books</a></button>

</body>
        <script src="script.js"></script>
</html>