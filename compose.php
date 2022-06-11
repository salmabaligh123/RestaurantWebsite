<style>
  
  @import url('https://fonts.googleapis.com/css?family=Raleway:300,400,700');
@import url("https://fonts.googleapis.com/css?family=Metal+Mania");

    .container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 1.5em;
}

.menu {
  font-family: "Inter", sans-serif;
  font-size: 14px;
}

.menu-group-heading {
  margin: 0;
  padding-bottom: 1em;
  border-bottom: 2px solid #ccc;
}

.menu-group {
  display: grid;
  grid-template-columns: 1fr;
  gap: 1.5em;
  padding: 1.5em 0;
}

.menu-item {
  display: flex;
}

.menu-item-image {
  width: 80px;
  height: 80px;
  flex-shrink: 0;
  object-fit: cover;
  margin-right: 1.5em;
}

.menu-item-text {
  flex-grow: 1;
}

.menu-item-heading {
  display: flex;
  justify-content: space-between;
  margin: 0;
}

.menu-item-name {
  margin-right: 1.5em;
}

.menu-item-description {
  line-height: 1.6;
}

@media screen and (min-width: 992px) {
  .menu {
    font-size: 16px;
  }

  .menu-group {
    grid-template-columns: repeat(2, 1fr);
  }

  .menu-item-image {
    width: 125px;
    height: 125px;
  }
}


.section-header {
    font-family: "Metal Mania";
    font-weight: normal;
    color: #333;
    text-align: center;
    font-size: 2.5em;
}

    </style>*/
<?php
// Create connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sandwich";
$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM compose";
$result = mysqli_query($conn,$query);
include "pre.php";
?>
<html>
<!DOCTYPE html>
<html lang="en">
<form method="post" action="">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" />
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
<?php
include "header.php"
?>
  
</head>
<body>



<a href="cart.php">
          <span class="glyphicon glyphicon-shopping-cart"></span>
         <span><?php echo $cart_count; ?></span></a>

<div class="container">
    <div class="menu">
      <h2 class="menu-group-heading">
      Bread
      </h2>

       <div class="menu-group">

<?php
$result=mysqli_query($conn,"SELECT * from `compose`");
 while($row = mysqli_fetch_assoc($result)) 
 {
  if( $row['type']== 'Bread' )  { 
 ?>
 <form method="post" action="">
        <div class="menu-item">
          <img class="menu-item-image" src="<?= $row['photo']; ?>" >
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="shop-item-title"> <?= $row['name']; ?></span>
              <span class="shop-item-price"><?= $row['Price']; ?> </span>
             
            </h3>
            <input type='hidden' name='ID' value=<?= $row['ID']; ?> />               
                     <button type='submit' class='btn btn-primary shop-item-button'> Add to cart </button></div>
        </div>
        
        </form>
       <?php
     }
      }
       ?>
       </div>
       <h2 class="menu-group-heading">
      Chicken
      </h2>

       <div class="menu-group">

<?php
$result=mysqli_query($conn,"SELECT * from `compose`");
 while($row = mysqli_fetch_assoc($result)) 
 {
  if( $row['type']== 'Chicken' )  { 
 ?>
 <form method="post" action="">
        <div class="menu-item">
          <img class="menu-item-image" src="<?= $row['photo']; ?>" >
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="shop-item-title"> <?= $row['name']; ?></span>
              <span class="shop-item-price"><?= $row['Price']; ?></span>
             
            </h3>
            <input type='hidden' name='ID' value=<?= $row['ID']; ?> />               
                     <button type='submit' class='btn btn-primary shop-item-button'> Add to cart </button></div>
        </div>
        
        </form>
       <?php
     }
      }
       ?>
       </div>
       <h2 class="menu-group-heading">
      Meat
      </h2>

       <div class="menu-group">

<?php
$result=mysqli_query($conn,"SELECT * from `compose`");
 while($row = mysqli_fetch_assoc($result)) 
 {
  if( $row['type']== 'Meat' )  { 
 ?>
 <form method="post" action="">
        <div class="menu-item">
          <img class="menu-item-image" src="<?= $row['photo']; ?>" >
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="shop-item-title"> <?= $row['name']; ?></span>
              <span class="shop-item-price"><?= $row['Price']; ?></span>
             
            </h3>
            <input type='hidden' name='ID' value=<?= $row['ID']; ?> />               
                     <button type='submit' class='btn btn-primary shop-item-button'> Add to cart </button></div>
        </div>
        
        </form>
       <?php
     }
      }
       ?>
       </div>
       <h2 class="menu-group-heading">
      Fish
      </h2>

       <div class="menu-group">

<?php
$result=mysqli_query($conn,"SELECT * from `compose`");
 while($row = mysqli_fetch_assoc($result)) 
 {
  if( $row['type']== 'Fish' )  { 
 ?>
 <form method="post" action="">
        <div class="menu-item">
          <img class="menu-item-image" src="<?= $row['photo']; ?>" >
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="shop-item-title"> <?= $row['name']; ?></span>
              <span class="shop-item-price"><?= $row['Price']; ?></span>
             
            </h3>
            <input type='hidden' name='ID' value=<?= $row['ID']; ?> />               
                     <button type='submit' class='btn btn-primary shop-item-button'> Add to cart </button></div>
        </div>
        
        </form>
       <?php
     }
      }
       ?>
       </div>
       <h2 class="menu-group-heading">
      Cheese
      </h2>

       <div class="menu-group">

<?php
$result=mysqli_query($conn,"SELECT * from `compose`");
 while($row = mysqli_fetch_assoc($result)) 
 {
  if( $row['type']== 'Cheese ' )  { 
 ?>
 <form method="post" action="">
        <div class="menu-item">
          <img class="menu-item-image" src="<?= $row['photo']; ?>" >
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="shop-item-title"> <?= $row['name']; ?></span>
              <span class="shop-item-price"><?= $row['Price']; ?></span>
             
            </h3>
            <input type='hidden' name='ID' value=<?= $row['ID']; ?> />               
                     <button type='submit' class='btn btn-primary shop-item-button'> Add to cart </button></div>
        </div>
        
        </form>
       <?php
     }
      }
       ?>
       </div>
       <h2 class="menu-group-heading">
      Veggies
      </h2>

       <div class="menu-group">

<?php
$result=mysqli_query($conn,"SELECT * from `compose`");
 while($row = mysqli_fetch_assoc($result)) 
 {
  if( $row['type']== 'Veggies ' )  { 
 ?>
 <form method="post" action="">
        <div class="menu-item">
          <img class="menu-item-image" src="<?= $row['photo']; ?>" >
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="shop-item-title"> <?= $row['name']; ?></span>
              <span class="shop-item-price"><?= $row['Price']; ?></span>
             
            </h3>
            <input type='hidden' name='ID' value=<?= $row['ID']; ?> />               
                     <button type='submit' class='btn btn-primary shop-item-button'> Add to cart </button></div>
        </div>
        
        </form>
       <?php
     }
      }
       ?>
       </div>
       <h2 class="menu-group-heading">
      Sauces 
      </h2>

       <div class="menu-group">

<?php
$result=mysqli_query($conn,"SELECT * from `compose`");
 while($row = mysqli_fetch_assoc($result)) 
 {
  if( $row['type']== 'Sauces ' )  { 
 ?>
 <form method="post" action="">
        <div class="menu-item">
          <img class="menu-item-image" src="<?= $row['photo']; ?>" >
          <div class="menu-item-text">
            <h3 class="menu-item-heading">
              <span class="shop-item-title"> <?= $row['name']; ?></span>
              <span class="shop-item-price"><?= $row['Price']; ?></span>
             
            </h3>
            <input type='hidden' name='ID' value=<?= $row['ID']; ?> />               
                     <button type='submit' class='btn btn-primary shop-item-button'> Add to cart </button></div>
        </div>
        
        </form>
       <?php
     }
      }
       ?>
       </div>
</body>
</html>
</html>