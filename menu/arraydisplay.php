<?php

$db = new SQLite3('mydatabase.sqlite');
$query = "SELECT name, size, price FROM pizza";
$pizza = $db->query($query);
$row = $pizza->fetchArray(SQLITE3_ASSOC);

foreach ($row as $person) {
    foreach ($person as $key => $value) {
        echo "$key: $value<br>";
    }
    echo "<br>";
}
