<?php

include 'config.php';

if(isset($_GET['id']) && isset($_GET['loan_id'])) {

    $id = $_GET['id'];
    $loan = $_GET['loan_id'];

    $sql = "UPDATE loans SET status='Accepted' WHERE customer=$id AND id=$loan";
    $result = mysqli_query($conn, $sql);

    if($result) {
        $sql = "SELECT loans.amount FROM loans WHERE customer=$id";
        $result = mysqli_query($conn, $sql);
        $loan_amount = mysqli_fetch_assoc($result);

        $loan_amount = $loan_amount['amount'];

        $sql = "SELECT customers.amount FROM customers WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        $real_amount = mysqli_fetch_assoc($result);

        $total = $real_amount['amount'] + $loan_amount;

        $sql = "UPDATE customers SET amount=$total WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        header("location: ../manage_loan.php");
    }else {
        header("location: ../manage_loan.php");
    }

}