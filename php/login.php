<?php require '../validation/config/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <form class="shadow-lg p-5 m-5 bg-body-tertiary rounded" method="POST" action="../validation/login-user.php">
            <?php 
              if (isset($_SESSION['successMessage'])) {
                echo
                  '<div class="alert alert-success" role="alert">
                  '.$_SESSION['successMessage'].'
                </div>';
              }
              require '../validation/config/session-destroy.php';
            ?>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="register.php"><span>Don't have an account?</span></a>
          </form>
    </div>
</body>
</html>