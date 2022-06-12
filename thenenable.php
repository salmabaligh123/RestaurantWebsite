<?php
$conn = new mysqli("localhost","root","","cairogrnd");
$ee="enable";
   $after = mysqli_query($conn,"UPDATE people SET enable='$ee' WHERE username='" . $_GET['username'] . "'");
   if($after){
        header("Location:../Project/enable.php");
    }

?>