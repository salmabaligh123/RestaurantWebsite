<style>
	table,
	th,
	td {
		border: 1px solid black;
	}
</style>
<?php
include "Menu.php";
session_start();

$conn = new mysqli("localhost", "root", "", "cairogrnd");
$query = "SELECT * FROM menu";
$result = mysqli_query($conn, $query);
?>

<html>

<head>
	<title>View All Items </title>
</head>

<body>
	<form method="post" action="">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Image</th>
					<th> Type</th>
					<th> Name</th>
					<th>Ingredients</th>
					<th>Price</th>

				</tr>
			</thead>
			<?php
			while ($row = mysqli_fetch_array($result)) {
			?>

				<tr>
				<td><?= $row['image']; ?></td>
					<td><?= $row['type']; ?></td>
					<td><?= $row['name']; ?></td>
					<td><?= $row['ingredients']; ?></td>
					<td><?= $row['price']; ?></td>
				</tr>

			<?php
			}
			?>
		</table>
	</form>
</body>

</html>