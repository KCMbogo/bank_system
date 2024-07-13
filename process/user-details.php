<?php

function userDetails($amount, $action, $user) {
    include 'config.php';

    $sql2 = "INSERT INTO user_details(action, amount, user) VALUES('$action', $amount, $user)";
    $detail = mysqli_query($conn, $sql2);
    
    return $detail;
}