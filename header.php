<?php
session_start();
$user = $_SESSION['user_id'];
?>


<nav class="nav-main">

    <div class="menu-btn">
        <i class="fas fa-bars fa-2x"></i>
    </div>
    <ul class="nav-left">
        <li class="searcher"><i class="fas fa-search fa-2x"></i> <input class="text-input" type="text" placeholder="Search"></li>
    </ul>
    <ul class="nav-center">
        <li><a href="index.php"><img loading="lazy" class="logo" src="images/logo.png" alt="company logo"></a>
        </li>
    </ul>
    <ul class="nav-right">
        <li><i class="fa fa-shopping-bag"></i></li>
    </ul>
    <ul class="login">
        <?php echo ($_SESSION) ? "<a style = 'color:#FCC7BF;'href='login.php'>$user</a> <a style = 'color:#FCC7BF;'href='close.php'>Close</a>" : "<a class='fa fa-user' href='login.php'></a>"; ?>
    </ul>
</nav>

<div class="nav-sec">
    <ul class="nav-menu-sec">
        <li>
            <a href="index.php">Home</a>
        </li>

        <li onmouseover="show(2)" onmouseout="hide(2)">
            <a href="shop.php">Shop</a>
            <div class="submenu" id="submenu2">
                <p><a class="submenu-link" href="#">All The Products</a></p>
                <hr>
                <p><a class="submenu-link" href="#">Lipsticks</a></p>
                <hr>
                <p><a class="submenu-link" href="#">Eye Shadow</a></p>
                <hr>
                <p><a class="submenu-link" href="#">Skincare</a></p>
            </div>
        </li>

        <li onmouseover="show(3)" onmouseout="hide(3)">
            <a href="brands.php">Brands</a>
            <div class="submenu" id="submenu3">
                <p><a class="submenu-link" href="#">All The Marks</a></p>
                <hr>
                <p><a class="submenu-link" href="#">Revlon</a></p>
                <hr>
                <p><a class="submenu-link" href="#">MAC</a></p>
                <hr>
                <p><a class="submenu-link" href="#">AVON</a></p>
            </div>
        </li>

        <li>
            <a href="about.php">About</a>
        </li>

        <li onmouseover="show(5)" onmouseout="hide(5)">
            <a href="contact.php">Contact</a>
            <div class="submenu" id="submenu5">
                <p><a class="submenu-link" href="#">WhatsApp</a></p>
                <hr>
                <p><a class="submenu-link" href="#"> Email</a></p>
                <hr>

            </div>
        </li>

    </ul>
    <script>
        document.querySelector(".menu-btn").addEventListener("click", () => {
            document.querySelector(".nav-menu-sec").classList.toggle("show");
        });
    </script>
</div>