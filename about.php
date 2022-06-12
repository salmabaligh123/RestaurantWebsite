<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cairogrnd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM images";
$logo = mysqli_query($conn, $query);
$back = mysqli_query($conn, $query);
$about = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

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
   <link rel="stylesheet" href="aboutstyle.css">

</head>

<body>

   <?php include "header2.php"; ?>
   <title>About Us</title>
   <?php
   while ($row = mysqli_fetch_array($back)) {
      if ($row['image'] == 'Pictures/aboutus.jpeg') {
   ?>
         <div class="heading" style="background:url(<?= $row['image']; ?>) no-repeat">

      <?php
      }
   }
      ?>

      <h1>About us</h1>
         </div>

         <!-- about section starts  -->

         <section class="about">

            <div class="content">
               <h3> Our Wrap Up </h3>
               <p>Cairo GRND Restaurant is one of the biggest restaurants in Cairo. It has been operating in Cairo
                  since 1910. At this time, the customers were few and can be served while enjoying their stay in
                  the restaurant. Now, the number of customers has increased and the types of the customers
                  have become different. For example, now some customers are staying in the restaurant and
                  others ask for take away. The restaurant needs to make a website to automate the work. The
                  web site has to facilitate the workflow for both the employees and the customers. The target is
                  to let the customer have better customer experience and make it easy for the customer to make
                  orders. On the other hand, the employees have to make fewer steps to complete each of the
                  orders so that they can serve more customers in less time. Quality is also a main objective.</p>

            </div>

         </section>

         <!-- about section ends -->
         <?php include "footer.php"; ?>

         <!-- swiper js link  -->
         <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

         <!-- custom js file link  -->
         <script src="script.js"></script>

</body>

</html>