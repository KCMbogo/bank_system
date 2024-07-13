<?php

include 'config.php';

include 'user-details.php';

if(isset($_POST['submit'])) {
    $amount = $_POST['amount'];
    $desc = $_POST['desc'];
    $customer = $_POST['customer'];

    if($amount <= 0) {
        header("location: ../user/loan.php?error=Invalid amount");
    } else {

        $sql = "INSERT INTO loans(customer, amount, description) VALUES($customer, $amount, '$desc')";
        $result = mysqli_query($conn, $sql);

        userDetails($amount, 'Loan', $customer);

        if($result) {
            header("location: ../user/loan.php?msg=Applied successfully");
        }else {
            header("location: ../user/loan.php?error=Failed to apply for loan");
        }
    }

}