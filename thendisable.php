<?php
$conn = new mysqli("localhost","root","","cairogrnd");
$d="disable";
   $after = mysqli_query($conn,"UPDATE people SET enable='$d' WHERE username='" . $_GET['username'] . "'");
   if($after){
        header("Location:../Project/enable.php");
    }

?>