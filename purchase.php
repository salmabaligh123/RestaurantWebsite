<style>

table.table-bordered {
  border: 1px solid black;
}
th, td {
  padding: 17px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
td {
  text-align: center;
}
div.cart{
  box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
  padding:2mm;
  margin: 0 auto;
  width: 90mm;
  background: #FFF;
}

</style>

<?php

session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="cancel"){
  unset($_SESSION["shopping_cart"]);
}


?>
<center>
<html>
<head>
<title> RECEIPT </title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
<script>
var time2=getTime();
</script>
</head>
<body>
<div style="width:700px; margin:50 auto;">



<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));

}

?>

<div class="cart">
<h2>RECEIPT</h2>   
The order will be delivered to : <br><?php echo $_POST["Address"]; ?>
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_Price = 0;
?>	
<table class="table">
<table class="table table-bordered">
<thead>
<tr>

    
    <th>Name</th>
    <th> Item Total </th>
   
  
     
</tr>
</thead>
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><?php echo $product["name"]; ?><br/></td>
<form method='post' action=''>
<input type='hidden' name='ID' value="<?php echo $product["ID"]; ?>" />
</form>
</td>
<td><?php echo "$".$product["Price"]*$product["quantity"]; ?></td>
<form method='post' action=''>
<input type='hidden' name='ID' value="<?php echo $product["ID"]; ?>" />
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
Thank you for your purchase!		
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
<table>
<h4>You can edit/cancel the order in 5 minutes</h4>
 
<button id="btn" class="button" onclick="window.location.href='cart.php'">  Edit  </button>
<script>
const timeout = setTimeout(myTime, 30000);
function myTime() {
  document.getElementById("btn").innerHTML ='<h4 class="b"> Can`t edit </h4>'
  <?php
  if (isset($_POST['action']) && $_POST['action']=="cancel"){
  unset($_SESSION["shopping_cart"]);
}
?>
  location.href = "compose.php"
}
</script>
<tr>
<form method='post' action=''>
<input type='hidden' name='action'  value="cancel" />
<button type='submit' onclick="window.location.href='cart.php'" class='cancel'> Cancel </button>
</form>
<form  action='compose.php' method='post'>
<button class="btn btn-primary btn-purchase" onclick= type="submit"> Done </button>

</form>
</p>

<br /><br />

</div>
</body>

</html>
</center>
