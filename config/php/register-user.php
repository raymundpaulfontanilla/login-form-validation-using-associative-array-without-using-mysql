<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    $userData = array($name => $name, $email => $email, $password => $password, $confirmPassword => $confirmPassword);

    if ($userData[$password] != $userData[$confirmPassword]) {
        echo "Password do not match";
    } else {
       header('location: ../../php/login.php ');
    }
?>