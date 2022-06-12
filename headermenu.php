<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cairogrnd";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
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

<head>
    <link rel="stylesheet" href="allstyles.css" />
    <link rel="stylesheet" href="stylesheet.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="1.css">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>


    <section class="header">
        <a href="home.php" class="logo">Cairo GRND</a>
        <nav class="navbar">
            <a href="enable.php">Enable/Disable Cashiers</a>
            <a href="updateroles1.php">Promote Cashiers</a>
            <a href="qualityctrl.php">Accept/Reject Customers</a>
        </nav>

    </section>

</head>
<!-- header section starts  -->