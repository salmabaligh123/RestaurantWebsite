<style>
table {
  border: 1px solid black;
}
th, td {
  padding: 17px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
th.h{
  padding: 17px;
  text-align: left;
}


</style>
<?php

session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
	foreach($_SESSION["shopping_cart"] as $key=>$value){
	  if($value['ID'] === $_POST["ID"]){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		  break; 
	  }
	}
}
if (isset($_POST['action']) && $_POST['action']=="cancel"){
  unset($_SESSION["shopping_cart"]);

}
if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['ID'] === $_POST["ID"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>
<html>
<head>
<title> Shopping Cart </title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
<script>
var time1=getTime();
</script>
</head>
<body>
<div style="width:700px; margin:50 auto;">

<h2>Cart</h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<!--<div class="cart_div">
<a href="cart.php">
          <span class="glyphicon glyphicon-shopping-cart"></span>
         <span><?php echo $cart_count; ?></span></a>
<a href="cart.php">
<img src="cart-icon.png" /> Cart
<span><?php echo $cart_count; ?></span></a>
</div>-->
<?php
}

?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_Price = 0;
?>	
<table class="table">
<table class="table table-bordered">
<thead>
<tr>

    <th>Item</th>
    <th>Name</th>
	<th>Quantity</th>
    <th>Price</th>
    <th> Item Total </th>
	<th> Remove </th>
   
  
     
</tr>
</thead>

<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["photo"]; ?>' width="100" height="100" /></td>
<td><?php echo $product["name"]; ?><br />
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='ID' value="<?php echo $product["ID"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "$".$product["Price"]; ?></td>
<td><?php echo "$".$product["Price"]*$product["quantity"]; ?></td>
<form method='post' action=''>
<input type='hidden' name='ID' value="<?php echo $product["ID"]; ?>" />
<input type='hidden' name='action'  value="remove" />
<td><button type='submit' class='remove'> Remove Item </button></td>

</form>
</tr>
<?php
$total_Price += ($product["Price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "$".$total_Price; ?></strong>

</td>
</tr>
</tbody>
</table>	
  <?php
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
<form method='post' action=''>
<input type='hidden' name='action'  value="cancel" />
<button type='submit' class='cancel'> cancel </button>
</form>
<form  action="compose.php" method='post'>
<button class="btn btn-primary btn-purchase"  type="submit">Continue shopping </button>
</form>
<h4> Choose your payment method </h4>
<button class="btn btn-primary btn-purchase"  onclick="window.location.href='cash.html'" type="submit"> cash </button>
<button class="btn btn-primary btn-purchase" onclick="window.location.href='visa.html'" type="submit"> visa </button>



<br /><br />

</div>
</body>
</html>
