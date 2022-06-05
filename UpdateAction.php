<?php
 include "Menu.php";
 
 session_start();
 
 $conn = new mysqli("localhost","root","","cairogrnd");
if(isset($_POST['submit'])) {
    $sql="UPDATE menu SET name='" . $_POST['name'] . "', ingredients='" . $_POST['ingredients'] . "',price='" . $_POST['price'] . "' WHERE type='" .  $_GET['type'] . "'";
    mysqli_query($conn,$sql);
$message = "Record Modified Successfully";
}
$query ="SELECT * FROM menu WHERE type='" . $_GET['type'] . "'";
$result = mysqli_query($conn,$query);
$row= mysqli_fetch_array($result);
?>

<html>
<head>
<title>Update Item Info</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
</div>

Name: <br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
 
Ingredients:<br>
<input type="text" name="ingredients" class="txtField" value="<?php echo $row['ingredients']; ?>">
<br>

Price: <br>
<input type="text" name="price"  value="<?php echo $row['price']; ?>">
<br>

<input type="submit" name="submit" value="Submit" class="buttom">
</form>
</body>
</html>