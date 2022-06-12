<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cairogrnd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM images";
$logo = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cairo GRND Restaurant</title>
   <?php
   while ($row = mysqli_fetch_array($logo)) {
      if ($row['image'] == 'Pictures/logo4.jpg') {
   ?>
         <link rel="shortcut icon" href=<?= $row['image']; ?>>
   <?php
      }
   }
   ?>
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
</head>

<body>

<?php include "header2.php";?>
<title>Home</title>

   <!-- home section starts  -->

   <section class="home">

      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(Pictures/pizzaback.jpg) no-repeat">
               <div class="content">
                  <span>Where you find your favourite cuisnes</span>
                  <h3>You can now Order from home</h3>
                  <a href="breakfast.php" class="btn"> Order Now</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(Pictures/breakfast.jpg) no-repeat">
               <div class="content">
                  <span>Where you find your favourite cuisnes</span>
                  <h3>discover Our Branches</h3>
                  <a href="branches.php" class="btn">See More</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(Pictures/peopleback.jpg) no-repeat">
               <div class="content">
                  <span>Where you find your favourite cuisnes</span>
                  <h3>See What our Clients have said</h3>
                  <a href="index.php" class="btn">Restaurant Reviews</a>
               </div>
            </div>

         </div>

         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>

      </div>

   </section>

   <!-- home section ends -->

   <!-- home about section starts  -->

   <section class="home-about">

      <div class="image">
         <img src="Pictures/aboutus.jpeg" alt="">
      </div>

      <div class="content">
         <h3>About us</h3>
         <p>Cairo GRND Restaurant is one of the biggest restaurants in Cairo. It has been operating in Cairo
            since 1910. At this time, the customers were few and can be served while enjoying their stay in
            the restaurant.</p>
         <a href="about.php" class="btn">Read more</a>
      </div>

   </section>

   <!-- home about section ends -->

   <!-- footer section starts  -->
   <?php include "footer.php";?>

      <!-- footer section ends -->
      <!-- swiper js link  -->
      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

      <!-- custom js file link  -->
      <script src="script.js"></script>

</body>

</html>