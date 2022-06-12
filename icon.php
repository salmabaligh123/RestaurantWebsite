<?php

$conn = new mysqli("localhost", "root", "", "cairogrnd");
$query = "SELECT * FROM images";
$logo = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($logo)) {
   if ($row['image'] == 'Pictures/logo4.jpg') {
?>
      <link rel="shortcut icon" href=<?= $row['image']; ?>>
<?php
   }
}
?>