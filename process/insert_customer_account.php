<?php

include 'config.php';

function generateRandomNumber($length) {
    if ($length <= 0) {
        return '';
    }

    $number = '';
    for ($i = 0; $i < $length; $i++) {
        $number .= random_int(0, 9);
    }
    if ($length > 1 && $number[0] == '0') {
        $number[0] = random_int(1, 9);
    }

    return $number;
}

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $nida = $_POST['nida'];
    $status = $_POST['status'];
    $amount = $_POST['amount']
    $account = generateRandomNumber(10);


    $sql = "SELECT * FROM customers WHERE email='$email' AND nida='$nida'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        header("location: ../add_customer.php?error=Customer already exists!");
    }else {
        $sql = "INSERT INTO customers (first_name, last_name, dob, address, phone, email, nida, status, amount, account)
                VALUES('$fname', '$lname', '$dob', '$address', '$phone', '$email', '$nida', '$status', $amount, '$account')";

        $result = mysqli_query($conn, $result);

        if($result) {
            header("location: ../manage_customer.php?msg=New customer added");
        }else {
            header("location: ../add_customer.php?error=Failed to add customer!");
        }
    }
}