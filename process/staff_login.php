<?php

session_start();

include 'config.php';

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM staff WHERE email='$email' AND password='$pwd'";
    $result = mysqli_query($conn, $sql);

    

    if(mysqli_num_rows($result) > 0) {
	  $staff = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $staff['id'];
        header("location: ../dashboard.php?msg=Logged In Successfully!");
    } else {
        header("location: ../register.php?error=No such user");
    }
}