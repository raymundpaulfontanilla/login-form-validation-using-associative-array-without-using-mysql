<?php
    $users = array (
        array ("id" => 1, "email" => "raymundpaulfontanilla@gmail.com", "password" => "phpDeveloper123", "confirmPassword" => "phpDeveloper123")
    );

    if (!empty($users) && is_array($users)) {
        foreach($users as $rows) {
            if ($rows['email'] === "raymundpaulfontanilla@gmail.com") {
                echo "Email is exist, Please try again!";
            }  elseif ($rows['password'] === "phpDeveloper123" && $rows['confirmPassword'] === "phpDeveloper123") {
                echo "Account created successfully!";
            } else {
                echo "password does not matched, Please try again!";
            }
        }
    }
?>