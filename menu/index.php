<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CRUD SPA</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div id="app" class="container mt-5">
    <h1 class="mb-4">Simple CRUD SPA</h1>
    <div id="items-list">
        <!-- Display items here -->
    </div>
    <div id="item-form">
        <form method="post" action="save_item.php" class="mb-4">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Item Name">
            </div>
            <div class="form-group">
                <input type="text" name="description" class="form-control" placeholder="Item Description">
            </div>
            <button type="submit" class="btn btn-primary">Add Item</button>
        </form>
    </div>
</div>

<!-- Include Bootstrap JS (Optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<?php

?>
