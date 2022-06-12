<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cairogrnd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM compose";
$result = mysqli_query($conn, $query);
$query2 = "SELECT * FROM images";
$logo = mysqli_query($conn, $query2);
include "pre.php";
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

    <?php include "header.php"; ?>
    <title>Breakfast Menu</title>
    <div class="container">
        <div class="menu">
            <h2 class="menu-group-heading">Omelettes</h2>
            <div class="menu-group">
                <?php
                $result = mysqli_query($conn, "SELECT * from `compose`");
                while ($row = mysqli_fetch_array($result)) {
                    if ($row['type'] == 'Omelettes') {
                ?>
                        <form method="post" action="">
                            <div class="menu-item">
                                <img class="menu-item-image" src='<?= $row['image']; ?>'>
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
            <h2 class="menu-group-heading"> Morning Sandwiches</h2>
            <div class="menu-group">
                <?php
                $result = mysqli_query($conn, "SELECT * from `compose`");
                while ($row = mysqli_fetch_array($result)) {
                    if ($row['type'] == 'Morning Sandwiches') {
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
            <h2 class="menu-group-heading"> Benedicts and Sunny Side Ups </h2>
            <div class="menu-group">
                <?php
                $result = mysqli_query($conn, "SELECT * from `compose`");
                while ($row = mysqli_fetch_array($result)) {
                    if ($row['type'] == 'Benedicts and Sunny Side Ups') {
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
            <h2 class="menu-group-heading"> Scrambled Eggs </h2>
            <div class="menu-group">
                <?php
                $result = mysqli_query($conn, "SELECT * from `compose`");
                while ($row = mysqli_fetch_array($result)) {
                    if ($row['type'] == 'Scrambled Eggs') {
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
            <h2 class="menu-group-heading">Gourmet Salads</h2>
            <div class="menu-group">
                <?php
                $result = mysqli_query($conn, "SELECT * from `compose`");
                while ($row = mysqli_fetch_array($result)) {
                    if ($row['type'] == 'Gourmet Salads') {
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
            <h2 class="menu-group-heading"> Pancakes and French Toast </h2>
            <div class="menu-group">
                <?php
                $result = mysqli_query($conn, "SELECT * from `compose`");
                while ($row = mysqli_fetch_array($result)) {
                    if ($row['type'] == 'Pancakes and French Toast') {
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
<?php include "footer.php"; ?>
</body>

</html>