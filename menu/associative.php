<?php
// Your PHP associative array
$data = [
    ["name" => "Pepperoni", "size" => "S", "price" => 61]
];

$db = new SQLite3('mydatabase.sqlite');
$query = "SELECT name, size, price FROM pizza";
$pizza = $db->query($query);
$row = $pizza->fetchArray(SQLITE3_ASSOC);

// Create an associative array to hold the JSON structure
$result = [];

// Iterate through the data and construct the JSON structure
foreach ($data as $item) {
    $name = $item["name"];
    $size = $item["size"];
    $price = $item["price"];

    if (!isset($result[$name])) {
        $result[$name] = [];
    }
    $result[$name][$size] = $price;
}

// Create an array for the final JSON
$jsonArray = [];

// Convert the result array to the desired JSON array format
foreach ($result as $name => $prices) {
    $jsonArray[] = ["name" => $name, "prices" => $prices];
}

// Encode the JSON array
$jsonString = json_encode($jsonArray, JSON_PRETTY_PRINT);

// Print the JSON string
echo $jsonString;
?>
