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
$e = mysqli_query($conn, $query);
$s = mysqli_query($conn, $query);
$u = mysqli_query($conn, $query);
include "pre.php";
$query2 = "SELECT * FROM images";
$logo = mysqli_query($conn, $query2);

while ($row = mysqli_fetch_array($logo)) {
   if ($row['image'] == 'Pictures/logo4.jpg') {
?>
      <link rel="shortcut icon" href=<?= $row['image']; ?>>
<?php
   }
}
?>
<html>
<!DOCTYPE html>
<html lang="en">
<form method="post" action="">

<?php include "header.php";?>
<title>Main Menu</title>

        <div class="container">
            <div class="menu">
                <h2 class="menu-group-heading">Starters</h2>
                <div class="menu-group">
                    <?php
                    while ($row = mysqli_fetch_array($resul)) {
                        if ($row['type'] == 'Starters') {
                    ?>
                    <form method="post" action="">
                            <div class="menu-item">
                                <img class="menu-item-image" src="<?= $row['image']; ?>">
                                <div class="menu-item-text">
                                    <h3 class="menu-item-heading">
                                        <span class="shop-item-title"> <?= $row['name']; ?></span>
                                        <span class="shop-item-price"><?= $row['price']; ?>EGP</span>
                                    </h3>
                                    <p class="menu-item-description"><?= $row['ingredients']; ?></p>
                                    <input type='hidden' name='ID' value=<?= $row['ID']; ?> />
                                    <button type='submit' class='btn btn-primary shop-item-button'> Add to cart </button>
                                </div>
                            </div>
                        </form>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="menu">
                <h2 class="menu-group-heading">Gourmet Burgers</h2>
                <div class="menu-group">
                    <?php
                    while ($row = mysqli_fetch_array($resu)) {
                        if ($row['type'] == 'Gourmet Burgers') {
                    ?>
                    <form method="post" action="">
                            <div class="menu-item">
                                <img class="menu-item-image" src="<?= $row['image']; ?>">
                                <div class="menu-item-text">
                                    <h3 class="menu-item-heading">
                                        <span class="shop-item-title"> <?= $row['name']; ?></span>
                                        <span class="shop-item-price"><?= $row['price']; ?>EGP</span>
                                    </h3>
                                    <p class="menu-item-description"><?= $row['ingredients']; ?></p>
                                    <input type='hidden' name='ID' value=<?= $row['ID']; ?> />
                                    <button type='submit' class='btn btn-primary shop-item-button'> Add to cart </button>
                                </div>
                            </div>
                        </form>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="menu">
                <h2 class="menu-group-heading">Western Cheese Skillets</h2>
                <div class="menu-group">
                    <?php
                    while ($row = mysqli_fetch_array($res)) {
                        if ($row['type'] == 'Western Cheese Skillets') {
                    ?>
                    <form method="post" action="">
                            <div class="menu-item">
                                <img class="menu-item-image" src="<?= $row['image']; ?>">
                                <div class="menu-item-text">
                                    <h3 class="menu-item-heading">
                                        <span class="shop-item-title"> <?= $row['name']; ?></span>
                                        <span class="shop-item-price"><?= $row['price']; ?>EGP</span>
                                    </h3>
                                    <p class="menu-item-description"><?= $row['ingredients']; ?></p>
                                    <input type='hidden' name='ID' value=<?= $row['ID']; ?> />
                                    <button type='submit' class='btn btn-primary shop-item-button'> Add to cart </button>
                                </div>
                            </div>
                        </form>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="menu">
                <h2 class="menu-group-heading">Loaded Potato Cheese Skillets</h2>
                <div class="menu-group">
                    <?php
                    while ($row = mysqli_fetch_array($re)) {
                        if ($row['type'] == 'Loaded Potato Cheese Skillets') {
                    ?>
                    <form method="post" action="">
                            <div class="menu-item">
                                <img class="menu-item-image" src="<?= $row['image']; ?>">
                                <div class="menu-item-text">
                                    <h3 class="menu-item-heading">
                                        <span class="shop-item-title"> <?= $row['name']; ?></span>
                                        <span class="shop-item-price"><?= $row['price']; ?>EGP</span>
                                    </h3>
                                    <p class="menu-item-description"><?= $row['ingredients']; ?></p>
                                    <input type='hidden' name='ID' value=<?= $row['ID']; ?> />
                                    <button type='submit' class='btn btn-primary shop-item-button'> Add to cart </button>
                                </div>
                            </div>
                        </form>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="menu">
                <h2 class="menu-group-heading">Oriental Cheese Skillets</h2>
                <div class="menu-group">
                    <?php
                    while ($row = mysqli_fetch_array($r)) {
                        if ($row['type'] == 'Oriental Cheese Skillets') {
                    ?>
                    <form method="post" action="">
                            <div class="menu-item">
                                <img class="menu-item-image" src="<?= $row['image']; ?>">
                                <div class="menu-item-text">
                                    <h3 class="menu-item-heading">
                                        <span class="shop-item-title"> <?= $row['name']; ?></span>
                                        <span class="shop-item-price"><?= $row['price']; ?>EGP</span>
                                    </h3>
                                    <p class="menu-item-description"><?= $row['ingredients']; ?></p>
                                    <input type='hidden' name='ID' value=<?= $row['ID']; ?> />
                                    <button type='submit' class='btn btn-primary shop-item-button'> Add to cart </button>
                                </div>
                            </div>
                        </form>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="menu">
                <h2 class="menu-group-heading">Pizza Skillets</h2>
                <div class="menu-group">
                    <?php
                    while ($row = mysqli_fetch_array($e)) {
                        if ($row['type'] == 'Pizza Skillets') {
                    ?>
                    <form method="post" action="">
                            <div class="menu-item">
                                <img class="menu-item-image" src="<?= $row['image']; ?>">
                                <div class="menu-item-text">
                                    <h3 class="menu-item-heading">
                                        <span class="shop-item-title"> <?= $row['name']; ?></span>
                                        <span class="shop-item-price"><?= $row['price']; ?>EGP</span>
                                    </h3>
                                    <p class="menu-item-description"><?= $row['ingredients']; ?></p>
                                    <input type='hidden' name='ID' value=<?= $row['ID']; ?> />
                                    <button type='submit' class='btn btn-primary shop-item-button'> Add to cart </button>
                                </div>
                            </div>
                        </form>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="menu">
                <h2 class="menu-group-heading">Chicken Sandwiches</h2>
                <div class="menu-group">
                    <?php
                    while ($row = mysqli_fetch_array($s)) {
                        if ($row['type'] == 'Chicken Sandwiches') {
                    ?>
                    <form method="post" action="">
                            <div class="menu-item">
                                <img class="menu-item-image" src="<?= $row['image']; ?>">
                                <div class="menu-item-text">
                                    <h3 class="menu-item-heading">
                                        <span class="shop-item-title"> <?= $row['name']; ?></span>
                                        <span class="shop-item-price"><?= $row['price']; ?>EGP</span>
                                    </h3>
                                    <p class="menu-item-description"><?= $row['ingredients']; ?></p>
                                    <input type='hidden' name='ID' value=<?= $row['ID']; ?> />
                                    <button type='submit' class='btn btn-primary shop-item-button'> Add to cart </button>
                                </div>
                            </div>
                        </form>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="menu">
                <h2 class="menu-group-heading">Kids Meals</h2>
                <div class="menu-group">
                    <?php
                    while ($row = mysqli_fetch_array($u)) {
                        if ($row['type'] == 'Kids Meals') {
                    ?>
                    <form method="post" action="">
                            <div class="menu-item">
                                <img class="menu-item-image" src="<?= $row['image']; ?>">
                                <div class="menu-item-text">
                                    <h3 class="menu-item-heading">
                                        <span class="shop-item-title"> <?= $row['name']; ?></span>
                                        <span class="shop-item-price"><?= $row['price']; ?>EGP</span>
                                    </h3>
                                    <p class="menu-item-description"><?= $row['ingredients']; ?></p>
                                    <input type='hidden' name='ID' value=<?= $row['ID']; ?> />
                                    <button type='submit' class='btn btn-primary shop-item-button'> Add to cart </button>
                                </div>
                            </div>
                        </form>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
</form>
<?php include "footer.php";?>
    </body>

</html>