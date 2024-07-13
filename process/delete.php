<?php

include 'config.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM customers WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("location: ../user/manage_customer.php?msg=Deleted a customer account");
    }else {
        header("location: ../user/manage_customer.php?error=Failed to delete");
    }
}