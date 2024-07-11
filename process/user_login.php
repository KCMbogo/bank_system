<?php

session_start();

include 'config.php';

if(isset($_POST['submit'])) {
    $account = $_POST['account'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM customers WHERE account='$account' AND password='$pwd'";
    $result = mysqli_query($conn, $sql)

    if(mysqli_num_rows($result) > 0) {
        $_SESSION['id'] = $result['id'];
        header("location: ../user/index.php?msg=Logged In Successfully!");
    } else {
        header("location: ../user/register.php?error=No such user");
    }
}