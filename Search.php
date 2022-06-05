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

if (isset($_POST['save'])) {
    $sql = "SELECT * from menu WHERE name='" . $_POST['name'] . "'";
    $result = mysqli_query($conn, $sql);

    echo "<table >

    <tr>
       <th>Image</th>
        <th>Type</th>
        <th>Name</th>
        <th>Ingredients</th>
        <th>Price</th>
    </tr>";

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
}
?>
<html>

<head>
    <title>Search Item </title>
</head>

<body>
    <form method="post" action="">
        Item Name:
        <input type="text" name="name">

        <p><button type="submit" class="btn btn-success" name="save">Search</button></p>
</body>

</html>