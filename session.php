<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        //
    }else{
        //
    }

/**
    if(isset($_POST['name'])){
        //echo "WORKING";
        //echo "<script>alert('Button Clicked')</script>";
        
        if(empty($_POST['user'])){
            $user = null;
            $flag = false;
        }else{
            $user = $_POST['user'];
        }
        if(empty($_POST['password'])){
            $password = null;
            $flag = false;
        }else{
            $password = $_POST['password'];
        }
        
        if($flag){
            $query = "SELECT * FROM user WHERE email=$user AND password=$password";
            $result = mysqli_connect($connect, $query);
            $r = mysqli_fetch_assoc($result);
            $true = true;
            
            //if(!empty($r['userid'])){
            if($true){
                session_start();
                $_SESSION['userid'] = $r['userid'];
                $_SESSION['username'] = $r['email'];
                header("Location: main.php");
            }else{
                echo "<script>alert('Incorrect Username or Password')</script>";
            }
        }
    }

**/

?>
