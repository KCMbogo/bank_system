<?php

include 'config.php';

if(isset($_GET['id']) && isset($_GET['loan_id'])) {

    $id = $_GET['id'];
    $loan = $_GET['loan_id'];

    $sql = "UPDATE loans SET status='Declined' WHERE customer=$id AND id=$loan";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("location: ../manage_loan.php");
    }else {
        header("location: ../manage_loan.php");
    }

}