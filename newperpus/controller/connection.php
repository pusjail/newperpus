<?php
    $sever = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'perpus2';

    $con = mysqli_connect($sever, $user, $password, $database);

    if(!$con){
        die("gagal terhubung". mysqli_connect_error());
    }
