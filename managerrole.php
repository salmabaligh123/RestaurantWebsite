<?php
$conn = new mysqli("localhost","root","","cairogrnd");
$d="quality control";
   $after = mysqli_query($conn,"UPDATE people SET role='$d' WHERE username='" . $_GET['username'] . "'");
   if($after){
        header("Location:../Project/updateroles1.php");
    }
                   
?>