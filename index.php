<?php

//index.php

//Include Configuration File Google API
include('loging/config.php');

$login_button = '';

if (isset($_GET["code"])) {
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
    if (!isset($token['error'])) {
        $google_client->setAccessToken($token['access_token']);
        $_SESSION['access_token'] = $token['access_token'];
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKC - Makeup</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Boogaloo&family=Fjalla+One&family=Palette+Mosaic&family=Permanent+Marker&family=Raleway&family=Roboto:ital,wght@1,100&family=Rubik&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="styles/style.css">
    <!--BOOTSTRAP-->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
</head>

<body>
    <div class="container">
        <!--Include header-->
        <?php include 'header.php'; ?>

        <!-- MAIN-BANNER -->
        <header class="main-banner">
            <ul class="slider">
                <li class="slider-section"><a href="#"><img src="images/m1.jpg" alt="Taza ep Goku"></a></li>
                <li class="slider-section"><a href="#"><img src="images/m3.jpg" alt="Taza ep Goku"></a></li>
                <li class="slider-section"><a href="#"><img src="images/m6.jpg" alt="Taza ep Goku"></a></li>
            </ul>
            <a href="shop.php" class="btn slider-btn-main">SHOP NOW!</a>
            <div class="slider-btn slider-btn-right" id="btn-right"><i class="fa fa-arrow-right"></i></div>
            <div class="slider-btn slider-btn-left" id="btn-left"><i class="fa fa-arrow-left"></i></div>
        </header>

        <!--SECOND BANNER-->
        <section class="banner-sec">
            <div class="shop">
                <div class="shop-main">
                    <h2>OFFERS FOR YOU!</h2>
                    <p></p>
                    <a href="#" class="btn">GO! ></a>
                </div>
                <div class="shop-sec">
                    <h2>THE NEW!</h2>
                    <p></p>
                    <a href="#" class="btn">
                        GO! >
                    </a>
                </div>
            </div>

            <div class="shop">
                <div class="shop-third">
                    <h2>BEST SELLERS!</h2>
                    <p></p>
                    <a href="#" class="btn">
                        GO! >
                    </a>
                </div>
            </div>

        </section>

        <!--PRODUCTS-->
        <section class="products-container">
            <h1>PRODUCTS</h1>
            <hr>
            <div class="products">

                <div id="product">
                    <img alt="" onmouseout="this.src='images/blu11.png';" onmouseover="this.src='images/blu1-22.png';" src="images/blu11.png" />
                </div>

                <div class="product">
                    <img alt="" onmouseout="this.src='images/lab11.png';" onmouseover="this.src='images/lab11-2.png';" src="images/lab11.png" />
                </div>

                <div class="product">
                    <img alt="" onmouseout="this.src='images/gli1.png';" onmouseover="this.src='images/gli1-2.png';" src="images/gli1.png" />
                </div>

                <div class="product">
                    <img alt="" onmouseout="this.src='images/gli2.png';" onmouseover="this.src='images/gli2-2.png';" src="images/gli2.png" />
                </div>

            </div>

            <div class="products">

                <div class="product">
                    <img alt="" onmouseout="this.src='images/ba1.png';" onmouseover="this.src='images/ba1-22.png';" src="images/ba1.png" />
                </div>

                <div class="product">
                    <img alt="" onmouseout="this.src='images/liq11.png';" onmouseover="this.src='images/liq1-22.png';" src="images/liq11.png" />
                </div>

                <div class="product">
                    <img alt="" onmouseout="this.src='images/shad122.png';" onmouseover="this.src='images/shad12-22.png';" src="images/shad122.png" />
                </div>

                <div class="product">
                    <img alt="" onmouseout="this.src='images/mirr11.png';" onmouseover="this.src='images/mirr1-22.png';" src="images/mirr11.png" />
                </div>

            </div>

            <div class="products">

                <div class="product">
                    <img alt="" onmouseout="this.src='images/del1.png';" onmouseover="this.src='images/del1-2.png';" src="images/del1.png" />
                </div>

                <div class="product">
                    <img alt="" onmouseout="this.src='images/el1.png';" onmouseover="this.src='images/el1-2.png';" src="images/el1.png" />
                </div>

                <div class="product">
                    <img alt="" onmouseout="this.src='images/rim11.png';" onmouseover="this.src='images/rim1-22.png';" src="images/rim11.png" />
                </div>

                <div class="product">
                    <img alt="" onmouseout="this.src='images/bro.png';" onmouseover="this.src='images/bro.png';" src="images/bro.png" />
                </div>

            </div>

        </section>

        <section class="brands-container">

            <h1>BRANDS</h1>
            <hr>

            <div class="brands">

                <div class="brand">
                    <img src="images/brand1.png" alt="brand 1">
                </div>

                <div class="brand">
                    <img src="images/brand22.png" alt="brand 1">
                </div>

                <div class="brand">
                    <img src="images/brand3.png" alt="brand 1">
                </div>

                <div class="brand">
                    <img src="images/brand22.png" alt="brand 1">
                </div>

                <div class="brand">
                    <img src="images/brand3.png" alt="brand 1">
                </div>

            </div>

            <div class="brands">

                <div class="brand">
                    <img src="images/brand22.png" alt="brand 1">
                </div>

                <div class="brand">
                    <img src="images/brand3.png" alt="brand 1">
                </div>

                <div class="brand">
                    <img src="images/brand22.png" alt="brand 1">
                </div>

                <div class="brand">
                    <img src="images/brand3.png" alt="brand 1">
                </div>

                <div class="brand">
                    <img src="images/brand22.png" alt="brand 1">
                </div>

            </div>

            <div class="brands">
                
                <div class="brand">
                    <img src="images/brand3.png" alt="brand 1">
                </div>

                <div class="brand">
                    <img src="images/brand22.png" alt="brand 1">
                </div>

                <div class="brand">
                    <img src="images/brand3.png" alt="brand 1">
                </div>

                <div class="brand">
                    <img src="images/brand22.png" alt="brand 1">
                </div>

                <div class="brand">
                    <img src="images/brand3.png" alt="brand 1">
                </div>

            </div>

        </section>
        <!--Include footer-->
        <?php include 'footer.php'; ?>
    </div>
    <script src="app/main.js"></script>
</body>
</html>