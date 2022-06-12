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

if(isset($_POST['save'])){
	$checkbox = $_POST['check'];
	for($i=0;$i<count($checkbox);$i++){
    $del_name = $checkbox[$i]; 
    $sql="DELETE FROM menu WHERE name='".$del_name."'";
	mysqli_query($conn,$sql);
}
}
?>

<html>
<head>
    <title>Delete Item </title>
</head>
<body>
<form method="post" action="">
<table class="table table-bordered">
<thead>
<tr>
	<th>Image</th>
	<th> Type </th>
	<th> Name </th>
	<th> Ingredients </th>
	<th> Price </th>
    <th> Delete </th>
</tr>
</thead>

<?php
while($row = mysqli_fetch_array($result)) 
{
?>

<tr>
<td><?= $row['image']; ?></td>
	<td><?= $row['type']; ?></td>
	<td><?= $row['name']; ?></td>
	<td><?=  $row['ingredients']; ?></td>
	<td><?= $row['price']; ?></td>
    <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["name"]; ?>"></td>
	 
</tr>

<?php
}
?>
</table>
<p><button type="submit" class="btn btn-success" name="save">Delete Item</button></p>
</form>
</body>
</html>