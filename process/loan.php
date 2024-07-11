<?php

include 'config.php';

if(isset($_POST['submit'])) {
    $amount = $_POST['amount'];
    $desc = $_POST['desc'];
    $status = $_POST['status'];
    $customer = $_POST['customer'];

    $sql = "INSERT INTO loans(customer, amount, description, status) VALUES($customer, $amount, '$desc',  '$status')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("location: ../user/loan.php?msg=Applied successfully");
    }else {
        header("location: ../user/loan.php?error=Failed to apply for loan");
    }

}