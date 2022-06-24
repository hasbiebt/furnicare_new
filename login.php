<?php
session_start();
if (isset($_POST['login'])) {
    include_once $_SERVER['DOCUMENT_ROOT'].'/furnicare_new/database/user-dbop.php';
    $objUser = new User();
    $objUser->login($_POST['email'], $_POST['password']);

    header('location:detailedservice.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furnicare</title>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-login.css">
</head>

<body>
    <div class="row m-0">
        <div class="col-lg-5">
            <div class="login-logo">
                <img class="logo-furnicare" src="assets/Logo Furnicare.png" alt="">
                <h5 class="text-logo"><i>Let your furniture in our care</i></h5>
            </div>
        </div>

        <div class="bg-right col-lg-7">
            <div class=" form-login">
                <h1 class="welcome-font">Welcome!</h1>
                <form name="login-form" action="login.php" method="POST">
                    <div class="mb-3">
                      <input placeholder="Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                      <input placeholder="Password" type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Remind me</label>
                    </div>
                    <a href="">
                        <button type="submit" class="button-login btn btn-primary" name="login">Login</button>
                    </a>
                    <a href="signup.php">
                        <button type="button" class="button-signup btn btn-outline-secondary">Sign Up</button>
                    </a>
                </form>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>