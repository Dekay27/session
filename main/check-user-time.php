<?php
session_start();
$userlogintime = $_SESSION['login_user_time'];

if(isset($userlogintime)){
    $difference = time() - $userlogintime;
    if($difference>5){
        echo 'logout';
    }
}

?>