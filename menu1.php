<style>
    a{
        text-decoration: none;
        color: rgb(245, 244, 244);
        background-color:transparent; 
      border:grey;
      color:grey;
      padding: 15px 32px;
      text-align: left;
      text-decoration: none;
      display:table-header-group;
      font-size: 16px;
      float: right;
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        
    }
    a:hover{
        background-color: goldenrod;
        color:white;
    }
    nav ul{
    display: inline-block;
    list-style-type: none;

    

}
nav ul li{
    display: inline-block;
    margin-right: 0px;
    color: aqua;
    
}
a{
    text-decoration: none;
    color: rgb(245, 244, 244);
    background-color:transparent; 
  border:grey;
  color:grey;
  padding: 15px 32px;
  text-align: left;
  text-decoration: none;
  display:table-header-group;
  font-size: 16px;
  float: right;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    
}

a:hover{
    background-color: goldenrod;
    color:white;
}
.header{
    background: #000; 
}

.header .row{
    margin-top: 70px;
}
.container{
    max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}

.row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;   
}
img {
  border-radius: 50%;
  margin-left: 0; 
}
    </style>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cairogrnd";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $query = "SELECT * FROM compose";
    $result = mysqli_query($conn,$query);

    ?>
   
   <!--class="shop-item-image"-->
<html>
    <head>
        <link rel="stylesheet" href="style.css" />
        <script src="store.js" async></script>
    </head>
    <body>
        <div class="header">
            <div class="container">
        <div class="navbar">
                  
            <nav>
                <ul id="menu-items">
                    <li><img src="cairoGrind.jpg" length="100px" width="100px"></img></li>
                    <li><a href="">Home</a></li>
                    <li><a href="index2.html">Menu</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="register.html">Account</a></li>
                </ul>
            </nav>
            </div>
            </div>
        </div>
        <header class="main-header">
        </header>
        <section class="container content-section">
            <h2 class="section-header">Breakfast</h2>
            <div class="shop-items">
            <?php

while($row = mysqli_fetch_array($result)) 
{
 if( $row['type']== 'Bread' )  { 
?>

                <div class="shop-item">
                    <span class="shop-item-title"><?= $row['name']; ?></span><br>
                    <div class="shop-item-details">
                        <span class="shop-item-price"><?= $row['price']; ?></span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <?php
 }
}
?>
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
    </body>
</html>