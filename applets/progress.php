<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress Bar Demo</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h3>Progress Bar Demo</h3>
    <div class="progress">
        <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
    </div>
</div>

<!-- Include Bootstrap JS (Optional) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Function to update the progress bar
    function updateProgressBar() {
        const progressBar = document.getElementById("progress-bar");
        let currentProgress = parseInt(progressBar.style.width);

        if (currentProgress < 100) {
            currentProgress += 10;
            progressBar.style.width = currentProgress + "%";
            progressBar.innerHTML = currentProgress + "%";
        }else{
            window.location.href = "https://google.com";
        }
    }

    // Update the progress bar every 2.5 seconds
    setInterval(updateProgressBar, 400);
</script>
</body>
</html>
