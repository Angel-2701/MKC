<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKC - Shop</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Boogaloo&family=Fjalla+One&family=Palette+Mosaic&family=Permanent+Marker&family=Raleway&family=Roboto:ital,wght@1,100&family=Rubik&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="shopbag/css/main.css">
    <!--BOOTSTRAP-->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
</head>

<body>
    <div class="container">

        <?php include 'header.php'; ?>

        <section class="products-container">
            <h1>PRODUCTS</h1>
            <hr>
            <?php
            $response = json_decode(file_get_contents('http://localhost/MKCCC/shopbag/api/productos/api-productos.php?getAllItems'), true);
            ?>

            <div class="articles">
                <?php
                if ($response['statuscode'] == 200) {
                    if ($response['items'] == '') {
                        $item = $response['item']; ?>
                        <div class="articulo">
                            <input type="hidden" id="id" value="<?php echo $item['id'];  ?>">
                            <div class="imagen"><img onmouseout="this.src='images/<?php echo $item['imagen'] . '.jpg';  ?>'" onmouseover="this.src='images/<?php echo $item['imagen'] . '-2.jpg';  ?>'" src='images/<?php echo $item['imagen'] . '.jpg';  ?>' /></div>
                            <div class="titulo"><?php echo $item['nombre'];  ?></div>
                            <div class="precio">$<?php echo $item['precio'];  ?> MXN</div>
                            <div class="botones">
                                <button class='btn-add'>Agregar al carrito</button>
                            </div>
                        </div>
            </div>
            <?php
                    } else {
                        foreach ($response['items'] as $item) { ?>
                <!--include('shopbag/layout/items.php');-->
                <div class="articulo">
                    <input type="hidden" id="id" value="<?php echo $item['id'];  ?>">
                    <div class="imagen"><img onmouseout="this.src='images/<?php echo $item['imagen'] . '.jpg';  ?>'" onmouseover="this.src='images/<?php echo $item['imagen'] . '-2.jpg';  ?>'" src='images/<?php echo $item['imagen'] . '.jpg';  ?>' /></div>
                    <div class="titulo"><?php echo $item['nombre'];  ?></div>
                    <div class="precio">$<?php echo $item['precio'];  ?> MXN</div>
                    <div class="botones">
                        <button class='btn-add'>Agregar al carrito</button>
                    </div>
                </div>
    <?php
                        }
                    }
                } else {
                    // mostrar error
                }
    ?>
    <!--
            <div class="products">
                <div id="product">
                    <img alt="logo" onmouseout="this.src='../images/blu11.png';" onmouseover="this.src='../images/blu1-22.png';" src="images/blu11.png" />
                </div>

                <div class="product">
                    <img alt="logo" onmouseout="this.src='../images/lab11.png';" onmouseover="this.src='../images/lab11-2.png';" src="images/lab11.png" />
                </div>

                <div class="product">
                    <img alt="logo" onmouseout="this.src='../images/gli1.png';" onmouseover="this.src='../images/gli1-2.png';" src="images/gli1.png" />
                </div>

                <div class="product">
                    <img alt="logo" onmouseout="this.src='../images/gli2.png';" onmouseover="this.src='../images/gli2-2.png';" src="images/gli2.png" />
                </div>
            </div>

            <div class="products">

                <div class="product">
                    <img alt="logo" onmouseout="this.src='../images/ba1.png';" onmouseover="this.src='../images/ba1-22.png';" src="images/ba1.png" />
                </div>

                <div class="product">
                    <img alt="logo" onmouseout="this.src='../images/liq11.png';" onmouseover="this.src='../images/liq1-22.png';" src="images/liq11.png" />
                </div>

                <div class="product">
                    <img alt="logo" onmouseout="this.src='../images/shad122.png';" onmouseover="this.src='../images/shad12-22.png';" src="images/shad122.png" />
                </div>

                <div class="product">
                    <img alt="logo" onmouseout="this.src='../images/mirr11.png';" onmouseover="this.src='../images/mirr1-22.png';" src="images/mirr11.png" />
                </div>
            </div>

            <div class="products">

                <div class="product">
                    <img alt="logo" onmouseout="this.src='../images/del1.png';" onmouseover="this.src='../images/del1-2.png';" src="images/del1.png" />
                </div>

                <div class="product">
                    <img alt="logo" onmouseout="this.src='../images/el1.png';" onmouseover="this.src='../images/el1-2.png';" src="images/el1.png" />
                </div>



                <div class="product">
                    <img alt="logo" onmouseout="this.src='../images/rim11.png';" onmouseover="this.src='../images/rim1-22.png';" src="images/rim11.png" />
                </div>

                <div class="product">
                    <img alt="logo" onmouseout="this.src='../images/bro.png';" onmouseover="this.src='../images/bro.png';" src="images/bro.png" />
                </div>
            </div>

            <div class="products">

                <div id="product">
                    <img alt="logo" onmouseout="this.src='../images/blu11.png';" onmouseover="this.src='../images/blu1-22.png';" src="images/blu11.png" />
                </div>

                <div class="product1>
                    <img alt=" logo" onmouseout="this.src='../images/lab11.png';" onmouseover="this.src='../images/lab11-2.png';" src="images/lab11.png" />
            </div>

            <div class="product">
                <img alt="logo" onmouseout="this.src='../images/gli1.png';" onmouseover="this.src='../images/gli1-2.png';" src="images/gli1.png" />
            </div>

            <div class="product">
                <img alt="logo" onmouseout="this.src='../images/gli2.png';" onmouseover="this.src='../images/gli2-2.png';" src="images/gli2.png" />
            </div>
    </div>

    <div class="products">

        <div class="product">
            <img alt="logo" onmouseout="this.src='../images/ba1.png';" onmouseover="this.src='../images/ba1-22.png';" src="images/ba1.png" />
        </div>

        <div class="product">
            <img alt="logo" onmouseout="this.src='../images/liq11.png';" onmouseover="this.src='../images/liq1-22.png';" src="images/liq11.png" />
        </div>

        <div class="product">
            <img alt="logo" onmouseout="this.src='../images/shad122.png';" onmouseover="this.src='../images/shad12-22.png';" src="images/shad122.png" />
        </div>

        <div class="product">
            <img alt="logo" onmouseout="this.src='../images/mirr11.png';" onmouseover="this.src='../images/mirr1-22.png';" src="images/mirr11.png" />
        </div>
    </div>

    <div class="products">
        <div class="product">
            <img alt="logo" onmouseout="this.src='../images/del1.png';" onmouseover="this.src='../images/del1-2.png';" src="images/del1.png" />
        </div>

        <div class="product">
            <img alt="logo" onmouseout="this.src='../images/el1.png';" onmouseover="this.src='../images/el1-2.png';" src="images/el1.png" />
        </div>

        <div class="product1">
            <img alt="logo" onmouseout="this.src='../images/rim11.png';" onmouseover="this.src='images/rim1-22.png';" src="images/rim11.png" />
        </div>

        <div class="product">
            <img alt="logo" onmouseout="this.src='../images/bro.png';" onmouseover="this.src='../images/bro.png';" src="images/bro.png" />
        </div>

    </div>
    </section>-->
    <?php include 'footer.php'; ?>
    </div>
    <script src="app/main.js"></script>
    <script src="shopbag/js/main.js"></script>
</body>

</html>