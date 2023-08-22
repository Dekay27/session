<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toast Example</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<!-- Just an image -->
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="img.png" height="50" alt="" loading="lazy">
    </a>
</nav>

<div class="container mt-5">
    <h3>Toast Example</h3>

    <form method="post" id="toastForm">
        <button type="submit" name="showToast" class="btn btn-primary">Show Toast</button>
    </form>
</div>

<!-- Include Bootstrap JS (Required for Toasts) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Function to show the toast when the button is clicked
    document.getElementById("toastForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission

        // Create and display the toast
        var toast = document.createElement("div");
        toast.className = "toast";
        toast.setAttribute("role", "alert");
        toast.setAttribute("aria-live", "assertive");
        toast.setAttribute("aria-atomic", "true");
        toast.setAttribute("data-delay", "3000");

        toast.innerHTML = `
                <div class="toast-header">
                    <strong class="mr-auto">Toast Notification</strong>
                    <small>Just now</small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    This is a simple toast notification.
                </div>
            `;

        document.body.appendChild(toast);

        // Show the toast
        var bsToast = new bootstrap.Toast(toast);
        bsToast.show();
    });
</script>
</body>
</html>
