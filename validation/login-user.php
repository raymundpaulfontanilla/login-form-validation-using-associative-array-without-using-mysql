<?php
    include '../validation/config/session.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userData = array($email => $email, $password => $password);

    if ($userData[$email] != "" && $userData[$password] != "") {
        if ($userData[$email] !== $userData[$email] && $userData[$password] !== $userData[$password]) {
            $_SESSION['errorMessage'] = "email or password is incorrect, Please try again!";
        } else {
            header('location: ../php/index.php');
        }
    }
?>