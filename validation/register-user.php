<?php
    include '../validation/config/session.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    $userData = array($name => $name, $email => $email, $password => $password, $confirmPassword => $confirmPassword);

    if ($userData[$password] != $userData[$confirmPassword]) {
        $_SESSION['errorMessage'] = 'Password do not match!';
        header('location: ../php/register.php');
    } else {
       header('location: ../php/login.php');
    }
?>