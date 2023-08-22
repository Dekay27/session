<?php
try {
    // Create or open the SQLite database
    $db = new SQLite3('mydatabase.sqlite');

    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $description = $_POST['description'];

        // Insert data into the "items" table
        $stmt = $db->prepare("INSERT INTO items (name, description) VALUES (:name, :description)");
        $stmt->bindParam(':name', $name, SQLITE3_TEXT);
        $stmt->bindParam(':description', $description, SQLITE3_TEXT);
        $stmt->execute();

        // Redirect back to the index page or display a success message
        header('Location: index.php');
        exit();
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
