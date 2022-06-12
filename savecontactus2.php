<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "cairogrnd";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
 }
if(isset($_POST['submit']))
{
if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['msg']))

 {
     $usr=$_POST['username'];
     $ems=$_POST['email'];
     $mss=$_POST['msg'];
    $qu= "INSERT INTO `contact`(`username`, `email`, `msg`) VALUES ('$usr','$ems','$mss')";
    $res=$conn->query($qu);
    header("Location:../Project/contactus.php");
    
 }
}
?>