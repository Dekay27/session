<?php
// Your tabular data
$data = [
    ["BBQ Chicken", "L", 100],
    ["BBQ Chicken", "M", 80],
    ["BBQ Chicken", "S", 60],
    ["Four Seasons", "L", 108],
    ["Four Seasons", "M", 88],
    ["Four Seasons", "S", 68]
];

// Create an associative array to hold the JSON structure
$result = [];

// Iterate through the data and construct the JSON structure
foreach ($data as [$name, $size, $price]) {
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
echo "<br>";
echo "<br>";


$db = new SQLite3('mydatabase.sqlite');
$query = "SELECT name, size, price FROM pizza";
$pizza = $db->query($query);
$row = $pizza->fetchArray(SQLITE3_ASSOC);
echo json_encode($row);

foreach ($row as $name => $prices) {
    $jsonArray2[] = ["name" => $name, "prices" => $prices];
}

// Encode the JSON array
$jsonString2 = json_encode($jsonArray2, JSON_PRETTY_PRINT);
echo $jsonString2;
?>
