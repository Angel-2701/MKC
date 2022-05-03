<?php

//Include Configuration File Google API
include('loging/config.php');

$login_button = '';

if (isset($_GET["code"])) {

    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

    if (!isset($token['error'])) {
        $google_client->setAccessToken($token['access_token']);
        $_SESSION['access_token'] = $token['access_token'];
        $google_service = new Google_Service_Oauth2($google_client);
        $data = $google_service->userinfo->get();

        if (!empty($data['given_name'])) {
            $_SESSION['user_first_name'] = $data['given_name'];
        }

        if (!empty($data['family_name'])) {
            $_SESSION['user_last_name'] = $data['family_name'];
        }

        if (!empty($data['email'])) {
            $_SESSION['user_email_address'] = $data['email'];
        }

        if (!empty($data['gender'])) {
            $_SESSION['user_gender'] = $data['gender'];
        }

        if (!empty($data['picture'])) {
            $_SESSION['user_image'] = $data['picture'];
        }
    }
}

//Conditional to validate token
if (!isset($_SESSION['access_token'])) {
    //GOOGLE login button
    $login_button = '<a href="' . $google_client->createAuthUrl() . '"><button class="btn btn-c-c w-100 my-3 text-light">

    <div class="row align-items-center">
        <div class="col-2">
            <img src="images/google.jpeg" width="32">
        </div>
        <div class="col-10 text-center">
            Google
        </div>
    </div>
</button></a>';
}

//Start the current session
session_start();
include 'connection.php';

//email and password validation with data stored in DB
if (!empty($_POST['email']) && (!empty($_POST['password']))) {
    $objConne = new connection();
    $emaill = $_POST['email'];
    $result = $objConne->consult("SELECT id,email,password FROM `users` WHERE email = '$emaill'");
    if (($result) == '') {
        echo ("USER INCORRECT");
        header("location: login.php");
    }
    if (count($result) > 0 && (password_verify($_POST['password'], $result['password']))) {

        $_SESSION['user_id'] = $result['id'];
        $_SESSION['email'] = $result['email'];
        header("location: index.php");
    } else {
        echo ("USER INCORRECT");
        header("location: login.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKC - Login</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Boogaloo&family=Fjalla+One&family=Palette+Mosaic&family=Permanent+Marker&family=Raleway&family=Roboto:ital,wght@1,100&family=Rubik&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="styles/style2.css">
</head>


<body>
    <div class="container bg-black w-75  rounded shadow">

        <div class="row">
            <div class="col bgg d-none d-lg-block ">

            </div>
            <div class="col mx-3">
                <div class="text-center">
                    <a href="index.php"><img src="images/logo-black.jpeg" width="88" alt=""></a>
                </div>
                <h2 class="fw-bold text-center text-light py-5">Welcome</h2>
                <!--LOGIN-->
                <form action="login.php" method="post">
                    <div class="mb-4">
                        <label for="email" class="form-label text-light">Email</label>
                        <input type="email" class="form-control text-black" name="email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label text-light">Password</label>
                        <input type="password" class="form-control text-black" name="password">
                    </div>
                    <!--Keep the session opened-->
                    <div class="mb-4 form-check">
                        <input type="checkbox" name="connected" class="form-check-input" id="">
                        <label for="connected" class="form-check-label text-light">Keep signed in</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" value="send" class="btn btn-primary text-black btn-c">Sign In</button>
                    </div>

                    <div class="my-3">
                        <span class="text-light">Don´t you have an account? <a href="signup.php">Sign Up</a></span>
                        <br>
                        <span><a href="#">Recover Password</a></span>
                    </div>
                </form>

                <!--LOGIN SOCIAL MEDIA -->
                <div class="container w-100 my-3">
                    <div class="row text-center text-light">
                        <div class="col-12">Sign In</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-c-c w-100 my-3 text-light">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                                <div class="col-10 text-center">
                                    Facebook
                                </div>
                            </div>
                        </button>
                    </div>

                    <!--GOOGLE LOGIN BUTTON-->
                    <?php
                    echo '<div class="col">' . $login_button . '</div>';
                    ?>
                </div>
            </div>
        </div>
        <script src="bootstrap.bundle.min.js"></script>
        <script src="app/main.js"></script>
</body>

</html>