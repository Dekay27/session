<?php

    $balance    = 0;
    $credits    = 30;

    $username = 'pu';
    $password = 'Pu6_university';
    $baseurl = 'https://frog.wigal.com.gh/ismsweb/Query';
    $params = "username=$username&password=$password&query=balance";
    $url = "$baseurl?$params";

    $balance = file_get_contents($url);

    if ($balance === false) {
        $balance = "Error: Unable to fetch balance.";
    }
    // else {
        // echo $balance;
    // }

    $currentDateTime = date('F j, Y g:i a');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balance and Credits</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>


<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="pentecost-university-logo-alt.png" height="60" alt="" loading="lazy">
    </a>
</nav>

<div class="container mt-5">
    <div class="row justify-content-center">

            <div class="card" style="width: 16rem;">
                <img src="img_balance.svg" class="card-img-top" alt="Image Depicting Balance">
                <div class="card-body">
                    <h3 class="card-title">PU SMS Credits</h3>
                    <hr>
                    <h6 class="card-text">Balance: <?php echo $balance ?></h6><br>
                </div>
                <div class="card-footer text-muted">
                    <?php echo $currentDateTime ?>
                </div>
            </div>

    </div>
</div>

<!-- Include Bootstrap JS (Optional) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
