<?php

include 'config.php';

include 'user-details.php';

if(isset($_POST['withdraw'])) {
    $amount = $_POST['amount'];
    $account = $_POST['account'];
    $user = $_POST['customer'];

    if($amount <= 0) {
        header("location: ../user/withdraw.php?error=Invalid amount");
    } else {

        $sql = "INSERT INTO transactions(amount, account, type) VALUES($amount, '$account', 'Withdraw')";
        $result = mysqli_query($conn, $sql);

        userDetails($amount, 'Withdraw', $user);

        $sql2 = "SELECT amount FROM customers WHERE account='$account'";
        $acc = mysqli_query($conn, $sql2);
        $acc = mysqli_fetch_assoc($acc);

        if($acc['amount'] < $amount) {
            if($result) {
                header("location: ../user/withdraw.php?error=Not enough balance");
            }else {
                header("location: ../user/withdraw.php?error=Failed to withdraw");
            }    
        } else {
            $amount = $acc['amount'] - $amount;

            $sql2 = "UPDATE customers SET amount=$amount WHERE account='$account'";
            mysqli_query($conn, $sql2);
            header("location: ../user/withdraw.php?msg=Withdrew successfully");
        }
    }
}