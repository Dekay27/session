<?php
    $mysqlusername = 'kaaflmsc_eportal';
    $mysqlpassword = 'ST&X#.MYWsF;';
    $mysqlhostname = 'localhost';
    $mysqldatabase = 'kaaflmsc_kucephp';
    
    $connect = mysqli_connect($mysqlhostname, $mysqlusername, $mysqlpassword, $mysqldatabase) OR die('Please try again.');

?>