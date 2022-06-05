<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cairogrnd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM compose";
$result = mysqli_query($conn, $query);
$resul = mysqli_query($conn, $query);
$resu = mysqli_query($conn, $query);
$res = mysqli_query($conn, $query);
$re = mysqli_query($conn, $query);
$r = mysqli_query($conn, $query);
$l = mysqli_query($conn, $query);

?>
<html>
<!DOCTYPE html>
<html lang="en">
<form method="post" action="">

    <head>
        <link rel="stylesheet" href="allstyles.css" />
        <link rel="stylesheet" href="stylesheet.css" />
        <script src="store.js" async></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Restaurant Menu</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

        <!-- swiper css link  -->
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="1.css">
    </head>

    <body>
        <!-- zart jasosoa  header start-->
        <section class="header">
            <a href="home.html" class="logo">Cairo GRND</a>
            <nav class="navbar">
                <a href="file:///C:/Users/USER/Desktop/home.html">home</a>
                <a href="about.html">about</a>
                <a href="book.php">Account</a>
                <a href="contactus.html">Contact Us</a>
                <div class="dropdown">
                    <a href="menu.html" class="dropbutton">Menu</a>
                    <div class="dropdown-content">
                        <a href="mainmenu.php" class="butt1">Main Menu</a><br>
                        <a href="breakfast.php" class="butt2">BreakFast Menu</a>
                        <a href="desserts.php" class="butt1">Desserts Menu</a>
                        <a href="beverages.php" class="butt2">Beverages Menu</a>
                        <a href="compose.php" class="butt1">Compose a Sandwich</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="cart.html" class="dropbutton">Cart</a>
                    <div class="dropdown-content">
                        <a href="mainmenu.php" class="butt1">Cart</a><br>
                        <section class="container content-section">
                            <h2 class="section-header">CART</h2>
                            <div class="cart-row">
                                <span class="cart-item cart-header cart-column">ITEM</span>
                                <span class="cart-price cart-header cart-column">PRICE</span>
                                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
                            </div>
                            <div class="cart-items">
                            </div>
                            <div class="cart-total">
                                <strong class="cart-total-title">Total</strong>
                                <span class="cart-total-price">$0</span>
                            </div>
                            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
                        </section>
                    </div>
                </div>
            </nav>
            <div id="menu-btn" class="fas fa-bars"></div>
        </section>
        <!-- zart jasosoa  header end-->

        <div class="container">
            <div class="menu">
                <h2 class="menu-group-heading"> Bread</h2>
                <div class="menu-group">
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        if ($row['type'] == 'Bread') {
                    ?>
                            <div class="menu-item">
                                <img class="menu-item-image" src='<?= $row['image']; ?>'>
                                <div class="menu-item-text">
                                    <h3 class="menu-item-heading">
                                        <span class="shop-item-title"> <?= $row['name']; ?></span>
                                        <span class="shop-item-price"><?= $row['price']; ?></span>
                                    </h3>
                                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="menu">
                <h2 class="menu-group-heading"> Chicken</h2>
                <div class="menu-group">
                    <?php
                    while ($row = mysqli_fetch_array($resul)) {
                        if ($row['type'] == 'Chicken') {
                    ?>
                            <div class="menu-item">
                                <img class="menu-item-image" src="<?= $row['image']; ?>">
                                <div class="menu-item-text">
                                    <h3 class="menu-item-heading">
                                        <span class="shop-item-title"> <?= $row['name']; ?></span>
                                        <span class="shop-item-price"><?= $row['price']; ?></span>
                                    </h3>
                                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="menu">
                <h2 class="menu-group-heading">Meat</h2>
                <div class="menu-group">
                    <?php
                    while ($row = mysqli_fetch_array($resu)) {
                        if ($row['type'] == 'Meat') {
                    ?>
                            <div class="menu-item">
                                <img class="menu-item-image" src="<?= $row['image']; ?>">
                                <div class="menu-item-text">
                                    <h3 class="menu-item-heading">
                                        <span class="shop-item-title"><?= $row['name']; ?></span>
                                        <span class="shop-item-price"><?= $row['price']; ?> </span>
                                    </h3>
                                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="menu">
                <h2 class="menu-group-heading">Fish</h2>
                <div class="menu-group">
                    <?php
                    while ($row = mysqli_fetch_array($res)) {
                        if ($row['type'] == 'Fish') {
                    ?>
                            <div class="menu-item">
                                <img class="menu-item-image" src="<?= $row['image']; ?>">
                                <div class="menu-item-text">
                                    <h3 class="menu-item-heading">
                                        <span class="shop-item-title"> <?= $row['name']; ?> </span>
                                        <span class="shop-item-price"> <?= $row['price']; ?> </span>
                                    </h3>
                                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="menu">
                <h2 class="menu-group-heading">Cheese </h2>
                <div class="menu-group">
                    <?php
                    while ($row = mysqli_fetch_array($re)) {
                        if ($row['type'] == 'Cheese') {
                    ?>
                            <div class="menu-item">
                                <img class="menu-item-image" src="<?= $row['image']; ?>">
                                <div class="menu-item-text">
                                    <h3 class="menu-item-heading">
                                        <span class="shop-item-title"> <?= $row['name']; ?> </span>
                                        <span class="shop-item-price"> <?= $row['price']; ?> </span>
                                    </h3>
                                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="menu">
                <h2 class="menu-group-heading"> Veggie </h2>
                <div class="menu-group">
                    <?php
                    while ($row = mysqli_fetch_array($r)) {
                        if ($row['type'] == 'Veggies') {
                    ?>
                            <div class="menu-item">
                                <img class="menu-item-image" src="<?= $row['image']; ?>">
                                <div class="menu-item-text">
                                    <h3 class="menu-item-heading">
                                        <span class="shop-item-title"><?= $row['name']; ?></span>
                                        <span class="shop-item-price"> <?= $row['price']; ?></span>
                                    </h3>
                                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="menu">
                <h2 class="menu-group-heading">Sauces </h2>
                <div class="menu-group">
                    <?php

                    while ($row = mysqli_fetch_array($l)) {
                        if ($row['type'] == 'Sauce') {
                    ?>
                            <div class="menu-item">
                                <img class="menu-item-image" src="<?= $row['image']; ?>">
                                <div class="menu-item-text">
                                    <h3 class="menu-item-heading">
                                        <span class="shop-item-title"><?= $row['name']; ?></span>
                                        <span class="shop-item-price"><?= $row['price']; ?></span>
                                    </h3>
                                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>


</form>
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.html"> <i class="fas fa-angle-right"></i> about</a>
            <a href="Menu.php"> <i class="fas fa-angle-right"></i> Menu</a>
            <a href="Account.php"> <i class="fas fa-angle-right"></i> Account</a>
        </div>
        <div class="box">
            <h3>Contact Us</h3>
            <a href="https://www.instagram.com/?hl=en"> <i class="fas fa-angle-right"></i> instagram</a>
            <a href="https://www.facebook.com/"> <i class="fas fa-angle-right"></i>Facebook</a>
            <a href="https://twitter.com/?lang=en"> <i class="fas fa-angle-right"></i> Twitter</a>
            <a href="#"> <i class="fas fa-phone"></i> 01234567890 </a>
            <a href="#"> <i class="fas fa-map"></i> 5th Settlement ,Cairo, Egypt, 11841 </a>
        </div>
    </div>
    <div class="credit"> Created by <span>Eslam Khaled/Hana Alaa/jasmine Hegazy/Julia Magdy/Salma Baligh</span> | all rights reserved! </div>
</section>
</body>

</html>