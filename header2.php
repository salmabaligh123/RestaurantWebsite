<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cairogrnd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query2 = "SELECT * FROM images";
$logo = mysqli_query($conn, $query2);
?>
<html>

<head>
   <link rel="stylesheet" href="allstyles.css" />
   <link rel="stylesheet" href="stylesheet.css" />
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <?php
   while ($row = mysqli_fetch_array($logo)) {
      if ($row['image'] == 'Pictures/logo4.jpg') {
   ?>
         <link rel="shortcut icon" href=<?= $row['image']; ?>>
   <?php
      }
   }
   ?>

   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link rel="stylesheet" href="1.css">
   <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
   <script>
      function getResult() {
         jQuery.ajax({
            url: "backend-search.php",
            data: 'term=' + $("#term").val(),
            type: "POST",
            success: function(data2) {
               $("#result").html(data2);
            }
         });
      }
   </script>

</head>
<!-- header section starts  -->

<section class="header">
   <a href="home.php" class="logo">Cairo GRND</a>
   <nav class="navbar">
      <div class="dropdown">
         <input name="term" type="text" id="term" onkeyup="getResult()" placeholder="Search Item..." />
         <div class="dropdown-content">
            <div id="result"></div>
         </div>
      </div>

      <a href="home.php">Home</a>
      <a href="about.php">About Us</a>
      <a href="accinfo.php">Account</a>
      <a href="contactus.php">Contact Us</a>
      <div class="dropdown">
         <a href="menu.php" class="dropbutton">Menu</a>
         <div class="dropdown-content">
            <a href="mainmenu.php" class="butt1">Main Menu</a><br>
            <a href="breakfast.php" class="butt2">BreakFast Menu</a>
            <a href="desserts.php" class="butt1">Desserts Menu</a>
            <a href="beverages.php" class="butt2">Beverages Menu</a>
            <a href="compose.php" class="butt1">Compose a Sandwich</a>
         </div>
      </div>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->