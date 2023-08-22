<?php
// Include SQLite database connection code here
$db = new SQLite3('mydatabase.sqlite');

$table_name = 'starters_sides';

// Query the pizza table
$query = "SELECT * FROM $table_name";
$result = $db->query($query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="logo.jpeg" height="80" alt="" loading="lazy">
    </a>
</nav>

<div class="container mt-5">
    <h1><?php echo $table_name ?> menu list</h1>
    <hr><br><br>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Size</th>
            <th>Price</th>
            <th>Description</th>
            <th>Image</th>
        </tr>
        </thead>
        <tbody>
        <?php

        // Fetch data and display in a table
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['size']}</td>";
            echo "<td>{$row['price']}</td>";
            echo "<td>{$row['description']}</td>";
            echo "<td>{$row['image_path']}</td>";
            echo "</tr>";
        }

        // Close the database connection
        $db->close();
        ?>
        </tbody>
    </table>
</div>

<!-- Include Bootstrap JS (Optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
