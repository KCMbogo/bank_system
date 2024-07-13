<?php

include 'config.php';

include 'user-details.php';

if(isset($_POST['deposit'])) {
    $amount = $_POST['amount'];
    $account = $_POST['account'];
    $user = $_POST['customer'];

    if($amount <= 0) {
        header("location: ../user/deposit.php?error=Invalid amount");
    } else {

        $sql = "INSERT INTO transactions(amount, account, type) VALUES($amount, '$account', 'Deposit')";
        $result = mysqli_query($conn, $sql);

        userDetails($amount, 'Deposit', $user);

        $sql2 = "SELECT * FROM customers WHERE account='$account'";
        $acc = mysqli_query($conn, $sql2);
        $acc = mysqli_fetch_assoc($acc);

        $amount += $acc['amount'];

        $sql2 = "UPDATE customers SET amount=$amount WHERE account='$account'";
        mysqli_query($conn, $sql2);

        if($result) {
            header("location: ../user/deposit.php?msg=Deposited successfully");
        }else {
            header("location: ../user/deposit.php?error=Failed to deposit");
        }
    }

}