<?php

include 'config.php';

if(isset($_POST['submit'])) {
    $amount = $_POST['amount'];
    $account = $_POST['account'];

    $sql = "INSERT INTO transactions(amount, account, account_type) VALUES($amount, '$account', 'Withdraw')";
    $result = mysqli_query($conn, $sql);

    $sql2 = "SELECT amount FROM customers WHERE account='$account'";
    $acc = mysqli_query($conn, $sql2)

    $amount -= $acc

    $sql2 = "UPDATE customers SET amount=$amount";
    mysqli_query($conn, $$sql2);

    if($result) {
        header("location: ../user/deposit.php?msg=Withdrew successfully");
    }else {
        header("location: ../user/deposit.php?error=Failed to withdraw");
    }

}