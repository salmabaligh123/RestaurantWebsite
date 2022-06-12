<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cairogrnd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM images";
$footer = mysqli_query($conn, $query);
?>
<!-- footer section starts  -->
<?php
while ($row = mysqli_fetch_array($footer)) {
    if ($row['image'] == 'Pictures/aboutback2.jpeg') {
?>
        <div class="heading" style="background:url(<?= $row['image']; ?>) no-repeat">

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
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
                <a href="breakfast.php"> <i class="fas fa-angle-right"></i> Menu</a>
                <a href="accinfo.php"> <i class="fas fa-angle-right"></i> Account</a>
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
        <div class="credit"> created by <span>Eslam Khaled/Hana Alaa/jasmine Hegazy/Julia Magdy/Salma Baligh</span> | all rights reserved! </div>

    </section>

    <!-- footer section ends -->