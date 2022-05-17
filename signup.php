<?php include 'connection.php'; ?>

<?php
//Getting the form data (POST METHOD)
if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    //Encrypt the password
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $objConn = new connection();
    $sql = "INSERT INTO `users`(nombre,email,password) VALUES ('$name','$email','$password')";
    $objConn->ejec($sql);  
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
    <div class="container bg-black w-75  mt-4 rounded shadow">
        <div class="row">
            <div class="col mx-3">
                <div class="text-center">
                    <a href="index.php"><img src="images/logo-black.jpeg" width="88" alt=""></a>
                </div>
                <h2 class="fw-bold text-center text-light py-5">Welcome</h2>
                <!--LOGIN-->
                <form action="signup.php" method="post">
                    <div class="mb-4">
                        <label for="name" class="form-label text-light">Name</label>
                        <input type="text" class="form-control text-black" name="name">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label text-light">Email</label>
                        <input type="text" class="form-control text-black" name="email">
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
                        <button type="submit" value="send" class="btn btn-primary text-black btn-c">Sign Up</button>
                    </div>

                    <div class="my-5">
                        <span class="text-light">Do you have an account? <a href="login.php">Sign In</a></span>
                        <br>
                    </div>
                </form>
            </div>
            <div class="col bggg d-none d-lg-block ">
            </div>
        </div>
        <script src="bootstrap.bundle.min.js"></script>
        <script src="app/main.js"></script>
</body>

</html>