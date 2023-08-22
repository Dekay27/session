<?php
// API logic to perform CRUD operations with SQLite

// Create or open the SQLite database
$db = new SQLite3('mydatabase.sqlite');

// Handle POST request to add a new item
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];

    // Insert data into the "items" table
    $stmt = $db->prepare("INSERT INTO items (name, description) VALUES (:name, :description)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->execute();
    // Handle errors here if needed
}

// Handle GET request to fetch items
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Fetch data from the "items" table
    $result = $db->query('SELECT * FROM items');

    $items = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $items[] = $row;
    }

    // Return items as JSON
    header('Content-Type: application/json');
    echo json_encode($items);
}
?>
