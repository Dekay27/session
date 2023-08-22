<?php
// Include SQLite database connection code here
$db = new SQLite3('mydatabase.sqlite');

$table_name = 'starters_sides';

// Query the starters/sides table
$query = "SELECT * FROM starters_sides";
$starters_sides = $db->query($query);

// Query the starters/sides table
$query = "SELECT * FROM salads";
$salads = $db->query($query);

// Query the starters/sides table
$query = "SELECT * FROM extras";
$extras = $db->query($query);

// Query the starters/sides table
$query = "SELECT * FROM noodles";
$noodles = $db->query($query);

// Query the starters/sides table
$query = "SELECT * FROM rice_dishes";
$rice_dishes = $db->query($query);

// Query the starters/sides table
$query = "SELECT * FROM sauces";
$sauces = $db->query($query);

// Query the starters/sides table
$query = "SELECT * FROM promo";
$promo = $db->query($query);

// Query the starters/sides table
$query = "SELECT * FROM mains";
$mains = $db->query($query);

// Query the starters/sides table
//$query = "SELECT * FROM pizza";
$query2 = "SELECT * FROM pizza GROUP BY name, size";
$query_unique = "SELECT DISTINCT name FROM pizza;";
$pizza = $db->query($query2);
$pizza_unique = $db->query($query_unique);

// Query the starters/sides table
$query = "SELECT * FROM promo";
$promo = $db->query($query);

// Query the starters/sides table
$query = "SELECT * FROM burgers";
$burgers = $db->query($query);

// Query the starters/sides table
$query = "SELECT * FROM sandwiches";
$sandwiches = $db->query($query);

// Query the starters/sides table
$query = "SELECT * FROM wraps_shawarma";
$wraps_shawarma = $db->query($query);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Hub Menu List</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="logo.jpeg" height="60" alt="" loading="lazy">
    </a>
</nav>
<div class="container mt-5">
    <!-- MAIN ROW 1 -->
    <div class="row">
        <!-- First Column -->
        <div class="col-md-4">
            <h2>Starters / Sides</h2>
            <table class="table table-bordered">
                <tbody>
                <?php

                // Fetch data and display in a table
                while ($row = $starters_sides->fetchArray(SQLITE3_ASSOC)) {
                    echo "<tr>";
                    echo "<td>{$row['price']}</td>";
                    echo "<td>{$row['size']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "</tr>";
                }

                ?>
                </tbody>
            </table>
            <hr>

            <h2>Rice Dishes</h2>
            <table class="table table-bordered">
                <tbody>
                <?php

                // Fetch data and display in a table
                while ($row = $rice_dishes->fetchArray(SQLITE3_ASSOC)) {
                    echo "<tr>";
                    echo "<td>{$row['price']}</td>";
                    echo "<td>{$row['size']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "</tr>";
                }

                ?>
                </tbody>
            </table>
        </div>

        <!-- Second Column -->
        <div class="col-md-4">
            <h2>Salads</h2>
            <table class="table table-bordered">
                <tbody>
                <?php

                // Fetch data and display in a table
                while ($row = $salads->fetchArray(SQLITE3_ASSOC)) {
                    echo "<tr>";
                    echo "<td>{$row['price']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "</tr>";
                }

                ?>
                </tbody>
            </table>
            <hr>

            <h2>Noodles</h2>
            <table class="table table-bordered">
                <tbody>
                <?php

                // Fetch data and display in a table
                while ($row = $noodles->fetchArray(SQLITE3_ASSOC)) {
                    echo "<tr>";
                    echo "<td>{$row['price']}</td>";
                    echo "<td>{$row['size']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "</tr>";
                }

                ?>
                </tbody>
            </table>
        </div>

        <!-- Third Column -->
        <div class="col-md-4">
            <h2>Extras</h2>
            <table class="table table-bordered">
                <tbody>
                <?php

                // Fetch data and display in a table
                while ($row = $extras->fetchArray(SQLITE3_ASSOC)) {
                    echo "<tr>";
                    echo "<td>{$row['price']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "</tr>";
                }

                ?>
                </tbody>
            </table>
            <hr>

            <h2>Sauces</h2>
            <table class="table table-bordered">
                <tbody>
                <?php

                // Fetch data and display in a table
                while ($row = $sauces->fetchArray(SQLITE3_ASSOC)) {
                    echo "<tr>";
                    echo "<td>{$row['price']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "</tr>";
                }

                ?>
                </tbody>
            </table>
            <hr>

            <h2>Mains</h2>
            <table class="table table-bordered">
                <tbody>
                <?php

                // Fetch data and display in a table
                while ($row = $mains->fetchArray(SQLITE3_ASSOC)) {
                    echo "<tr>";
                    echo "<td>{$row['price']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "</tr>";
                }

                ?>
                </tbody>
            </table>
        </div>
    </div>
    <hr>

    <!-- MAIN ROW 2 -->
    <div class="row">
        <!-- Second Row -->
        <div class="col-md-8">
            <h2>Promo Combo Plates</h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                <?php

                // Fetch data and display in a table
                while ($row = $promo->fetchArray(SQLITE3_ASSOC)) {
                    echo "<tr>";
                    echo "<td>{$row['price']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "</tr>";
                }

                ?>
                </tbody>
            </table>
        </div>


        </div>
        <hr>

    <!-- MAIN ROW 3 -->
    <div class="row">
        <!-- First Column -->
        <div class="col-md-6">
            <h2>Burgers</h2>
            <table class="table table-bordered">
                <tbody>
                <?php

                // Fetch data and display in a table
                while ($row = $burgers->fetchArray(SQLITE3_ASSOC)) {
                    echo "<tr>";
                    echo "<td>{$row['price']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "</tr>";
                }

                ?>
                </tbody>
            </table>
            <hr>

            <h2>Sandwiches</h2>
            <table class="table table-bordered">
                <tbody>
                <?php

                // Fetch data and display in a table
                while ($row = $sandwiches->fetchArray(SQLITE3_ASSOC)) {
                    echo "<tr>";
                    echo "<td>{$row['price']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "</tr>";
                }

                ?>
                </tbody>
            </table>
            <hr>

            <h2>Wraps (Shawarma)</h2>
            <table class="table table-bordered">
                <tbody>
                <?php

                // Fetch data and display in a table
                while ($row = $wraps_shawarma->fetchArray(SQLITE3_ASSOC)) {
                    echo "<tr>";
                    echo "<td>{$row['price']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "</tr>";
                }

                ?>
                </tbody>
            </table>
        </div>

        <!-- Second Column -->
        <div class="col-md-6">
            <h2>Pizza</h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                <?php

                // Fetch data and display in a table
                while ($row = $pizza->fetchArray(SQLITE3_ASSOC)) {
                    echo "<tr>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['size']}</td>";
                    echo "<td>{$row['price']}</td>";
                    echo "</tr>";
                }

                ?>
                </tbody>
            </table>
        </div>
    </div>

    </div>



</div>

<!-- Include Bootstrap JS (Optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
    // Close the database connection
    $db->close();
?>