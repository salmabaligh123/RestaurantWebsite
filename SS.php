<style>
table, th, td {
  border: 1px solid black;
}
</style>
<script>
function showCustomer(str) {
  var xhttp;
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getcustomer.php?q="+str, true);
  xhttp.send();
}
</script>
<?php
$mysqli = new mysqli("localhost", "root", "", "cairogrnd");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT * FROM menu";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['name']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($type, $name, $ingredients, $price);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>Type</th>";
echo "<td>" . $type . "</td>";
echo "<th>Name</th>";
echo "<td>" . $name . "</td>";
echo "<th>Ingredients</th>";
echo "<td>" . $ingredients . "</td>";
echo "<th>Price</th>";
echo "<td>" . $price . "</td>";
echo "</tr>";
echo "</table>";
?>