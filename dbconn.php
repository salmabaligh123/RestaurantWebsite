<?php
$conn = new mysqli("localhost", "root", "", "cairogrnd");
session_start();
$usr = $_SESSION['uss'];
if ($conn->connect_error) die("Fatal connection error");
else {

  $result = mysqli_query($conn, "SELECT * FROM waiting WHERE username='$usr'");
  $rows = $result->num_rows;
  $row = mysqli_fetch_array($result);
  $r = "customer";
  $Sname = $row['name'];
  $Semail = $row['email'];
  $Sid = $row['id'];
  $Sphone = $row['phone'];
  $Susername = $row['username'];
  $Spassword = $row['password'];
  $image = $row['image'];
  $quu = "INSERT INTO `people` (`name`, `email`, `username`, `password`, `id`, `number`, `image`,`role`) VALUES ('$Sname', '$Semail', '$Susername', '$Spassword', '$Sid', '$Sphone','$image', '$r')";
  $run = $conn->query($quu);
  //remove from waiting since already added to people
  $after = mysqli_query($conn, "DELETE FROM waiting WHERE username='$usr'");  if ($after) {
?>
    <script>
      window.location.href = "qualityctrl.php";
    </script>
<?php
  }
}
?>