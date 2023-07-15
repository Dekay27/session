<?php

    include('database.php');
    include('session.php');
    

//    if(isset($_POST['submit'])){
//        header("Location: home.php");
//        exit;
//    }
    
    if(isset($_POST['submit'])){
        //echo "WORKING";
        //echo "<script>alert('Button Clicked')</script>";
        
        if(empty($_POST['user'])){
            $user = null;
            $flag = false;
        }else{
            $user = $_POST['user'];
            $flag = true;
        }
        if(empty($_POST['password'])){
            $password = null;
            $flag = false;
        }else{
            $password = $_POST['password'];
            $flag = true;
        }
        
        if($flag){
            $query = "SELECT * FROM practice WHERE email=$user AND password=$password";
            $result = mysqli_query($connect, $query);
            $r = mysqli_fetch_assoc($result);
            $true = true;
            
            if(!empty($r['userid'])){
                session_start();
                $_SESSION['userid'] = $r['userid'];
                $_SESSION['username'] = $r['email'];
                header("Location: home.php");
                exit;
            }else{
                echo "<script>alert('Incorrect Username or Password')</script>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <form action="" method="POST">
      <div class="mb-3">
        <label for="user" class="form-label">Username</label>
        <input type="text" class="form-control" id="user" name="user" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

