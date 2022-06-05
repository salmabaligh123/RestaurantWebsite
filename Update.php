<style>
table, th, td {
  border: 1px solid black;
}
</style>

<?php
 include "Menu.php";
 session_start();
 $conn = new mysqli("localhost","root","","cairogrnd");
 $query = "SELECT * FROM menu";
 $result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Item </title>
</head>
<body>
<table>
<tr>
  <th>Image</th>
<th>Type</th>
<th>Name</th>
<th>Ingredients</th>
<th>Price</th>
<th>Update</th>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row['image']; ?></td>
<td><?php echo $row['type']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['ingredients']; ?></td>
<td><?php echo $row['price']; ?></td>
<td><a href="UpdateAction.php? type=<?php echo $row['type']; ?>">Update</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>