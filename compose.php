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
$query2 = "SELECT * FROM images";
$logo = mysqli_query($conn, $query2);

while ($row = mysqli_fetch_array($logo)) {
    if ($row['image'] == 'Pictures/logo4.jpg') {
?>
        <link rel="shortcut icon" href=<?= $row['image']; ?>>
<?php
    }
}
include "pre.php";
?>
<html>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php include "header.php" ?>
</head>


<title>Compose A Sandwich Menu</title>
<div class="container">
    <div class="menu">
        <h2 class="menu-group-heading"> Bread</h2>
        <div class="menu-group">
            <?php
            $result = mysqli_query($conn, "SELECT * from `compose`");
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['type'] == 'Bread') {
            ?>
                    <form method="post" action="">
                        <div class="menu-item">
                            <img class="menu-item-image" src='<?= $row['image']; ?>'>
                            <div class="menu-item-text">
                                <h3 class="menu-item-heading">
                                    <span class="shop-item-title"> <?= $row['name']; ?></span>
                                    <span class="shop-item-price"><?= $row['price']; ?>EGP</span>
                                </h3>
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
        <h2 class="menu-group-heading"> Chicken</h2>
        <div class="menu-group">
            <?php
            $resul = mysqli_query($conn, "SELECT * from `compose`");
            while ($row = mysqli_fetch_assoc($resul)) {
                if ($row['type'] == 'Chicken') {
            ?>
                    <form method="post" action="">
                        <div class="menu-item">
                            <img class="menu-item-image" src="<?= $row['image']; ?>">
                            <div class="menu-item-text">
                                <h3 class="menu-item-heading">
                                    <span class="shop-item-title"> <?= $row['name']; ?></span>
                                    <span class="shop-item-price"><?= $row['price']; ?>EGP</span>
                                </h3>
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
        <h2 class="menu-group-heading">Meat</h2>
        <div class="menu-group">
            <?php
            $resu = mysqli_query($conn, "SELECT * from `compose`");
            while ($row = mysqli_fetch_assoc($resu)) {
                if ($row['type'] == 'Meat') {
            ?>
                    <form method="post" action="">
                        <div class="menu-item">
                            <img class="menu-item-image" src="<?= $row['image']; ?>">
                            <div class="menu-item-text">
                                <h3 class="menu-item-heading">
                                    <span class="shop-item-title"><?= $row['name']; ?></span>
                                    <span class="shop-item-price"><?= $row['price']; ?>EGP </span>
                                </h3>
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
        <h2 class="menu-group-heading">Fish</h2>
        <div class="menu-group">
            <?php
            $res = mysqli_query($conn, "SELECT * from `compose`");
            while ($row = mysqli_fetch_assoc($res)) {
                if ($row['type'] == 'Fish') {
            ?>
                    <form method="post" action="">
                        <div class="menu-item">
                            <img class="menu-item-image" src="<?= $row['image']; ?>">
                            <div class="menu-item-text">
                                <h3 class="menu-item-heading">
                                    <span class="shop-item-title"> <?= $row['name']; ?> </span>
                                    <span class="shop-item-price"> <?= $row['price']; ?>EGP </span>
                                </h3>
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
        <h2 class="menu-group-heading">Cheese </h2>
        <div class="menu-group">
            <?php
            $re = mysqli_query($conn, "SELECT * from `compose`");
            while ($row = mysqli_fetch_assoc($re)) {
                if ($row['type'] == 'Cheese') {
            ?>
                    <form method="post" action="">
                        <div class="menu-item">
                            <img class="menu-item-image" src="<?= $row['image']; ?>">
                            <div class="menu-item-text">
                                <h3 class="menu-item-heading">
                                    <span class="shop-item-title"> <?= $row['name']; ?> </span>
                                    <span class="shop-item-price"> <?= $row['price']; ?>EGP </span>
                                </h3>
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
        <h2 class="menu-group-heading"> Veggie </h2>
        <div class="menu-group">
            <?php
            $r = mysqli_query($conn, "SELECT * from `compose`");
            while ($row = mysqli_fetch_assoc($r)) {
                if ($row['type'] == 'Veggies') {
            ?>
                    <form method="post" action="">
                        <div class="menu-item">
                            <img class="menu-item-image" src="<?= $row['image']; ?>">
                            <div class="menu-item-text">
                                <h3 class="menu-item-heading">
                                    <span class="shop-item-title"><?= $row['name']; ?></span>
                                    <span class="shop-item-price"> <?= $row['price']; ?>EGP</span>
                                </h3>
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
        <h2 class="menu-group-heading">Sauces </h2>
        <div class="menu-group">
            <?php
            $l = mysqli_query($conn, "SELECT * from `compose`");
            while ($row = mysqli_fetch_assoc($l)) {
                if ($row['type'] == 'Sauce') {
            ?>
                    <form method="post" action="">
                        <div class="menu-item">
                            <img class="menu-item-image" src="<?= $row['image']; ?>">
                            <div class="menu-item-text">
                                <h3 class="menu-item-heading">
                                    <span class="shop-item-title"><?= $row['name']; ?></span>
                                    <span class="shop-item-price"><?= $row['price']; ?>EGP</span>
                                </h3>
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
<?php include "footer.php"; ?>
</body>

</html>