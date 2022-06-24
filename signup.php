<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furnicare</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-signup.css">
</head>
<body>
    <div class="row m-0">
        <div class="col-lg-5">
            <div class="signup-logo">
                <img class="logo-furnicare" src="assets/Logo Furnicare.png" alt="">
                <h5 class="text-logo"><i>Let your furniture in our care</i></h5>
            </div>
        </div>
        <div class="bg-right col-lg-5">
            <div class=" form-signup">
                <h1 class="welcome-font">Create a new account</h1>
                <form action="register.php" method="POST">
                    <div class="mb-3">
                      <input placeholder="Full name" type="text" class="form-control" id="full_name" name="full_name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <input placeholder="Username" type="text" class="form-control" id="user_name" name="user_name">
                    </div>
                    <div class="mb-3">
                        <input placeholder="Email" type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <input placeholder="Phone number" type="number" class="form-control" id="phone_no" name="phone_no"aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <input placeholder="Password" type="password" class="form-control" id="password" name="password"aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <input placeholder="Confirm password" type="password" class="form-control" id="confirm_password" aria-describedby="emailHelp">
                      </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Remind me</label>
                    </div>
                    <button type="submit" class="button-signup btn btn-primary" value="submit" name="register">Sign up</button>
                </form>
            </div>
        </div>
        <div class="bg-right col-lg-2">
            <div class="font-exclusive">
                <h5 class="text-end ">Join us to</h5>
                <h5 class="text-end ">get exclusive</h5>
                <h5 class="text-end ">services</h5>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>
</html>