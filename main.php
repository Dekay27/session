<?php
    include('database.php');
    include('session.php');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap 5 Homepage</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
</head>
<body>
    
    <?php
        if(isset($_SESSION['userid'])){
            $user = $_SESSION['username'];
        }else{
            header('Location: index.php');
        } 
    
    ?>

  <header class="bg-dark text-white py-5">
    <div class="container">
      <h1>Welcome to My Website</h1>
      <p class="lead">A simple homepage built with Bootstrap 5</p>
    </div>
  </header>

  <section class="py-5">
    <div class="container">
      <h2>About</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non ex eu lorem consectetur dignissim. Nulla feugiat tristique elit, vel iaculis lectus. Phasellus semper urna et nibh finibus placerat. Integer et tellus nunc. Aliquam efficitur id arcu id mollis. Sed ultricies turpis id risus vulputate semper.</p>
    </div>
  </section>

  <section class="bg-light py-5">
    <div class="container">
      <h2>Services</h2>
      <ul>
        <li>Web Design</li>
        <li>Graphic Design</li>
        <li>Mobile App Development</li>
      </ul>
    </div>
  </section>

  <footer class="bg-dark text-white py-3">
    <div class="container">
      <p>&copy; 2023 My Website. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
