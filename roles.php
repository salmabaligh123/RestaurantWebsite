<?php       
$conn=mysqli_connect("localhost","root","","cairogrnd");
session_start();
if($conn->connect_error)
	die("not connected");
    $sql="SELECT * from people WHERE username='".$_POST['user']."' and password= '".$_POST['pass']."'";//Law user
    $result=mysqli_query($conn,$sql);
    $rows=$result->num_rows; 
    $row=mysqli_fetch_array($result); 
    if($rows==0)
{	
   header("Location:../signin.php?error=Username or Password doesn't Match!"); //notfound
}
else{
  $roles=$row['role'];
  if($roles=='quality control')
      {
          $_SESSION["Username"]=$_POST['user'];
          $_SESSION["Pass"]=$_POST['pass'];
        header("Location:../Project/admin1.php");  //QUALITY CONTROL
       
      }
      elseif ($roles=='cashier'&&$row['enable']=="enable")
      {
        $_SESSION["Username"]=$_POST['user'];
        $_SESSION["Pass"]=$_POST['pass'];
       header("Location:../Project/mainmenu.php");  //CASHEIR VIEW
        
      }
      elseif ($roles=='cashier'&&$row['enable']=="disable")
      {
        header("Location:../Project/signin.php?error1=Disabled"); 
      }
      elseif($roles=='customer')
      {

    $_SESSION["Username"]=$_POST['user'];
     $_SESSION["Pass"]=$_POST['pass'];
        header("Location:../Project/home.php");//MAIN PAGE
      }
    }
?>
