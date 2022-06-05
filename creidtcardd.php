<?php
$server="localhost";
$username="root";
$password="";
$dbname="cairogrnd";
$conn = mysqli_connect($server,$username,$password,$dbname);
if($conn){
    echo "database connected";
}
else{
    echo "database connection failed";
}
    $cardnumber=$_POST['cardnumber'];
    $cardholder=$_POST['cardholder'];
    $expmm=$_POST['expm'];
    $expyy=$_POST['expy'];
    $cvv=$_POST['cvv'];
   // if(!empty($_POST['cardnumber']) && !empty($_POST['cardholder']) && !empty($_POST['expmm']) && !empty($_POST['expyy']) && !empty($_POST['cvv'])){
$query = "INSERT INTO creidtcard(cardnumber,cardholder,expmm,expyy,cvv) VALUES('$cardnumber' ,'$cardholder' ,'$expmm' ,'$expyy' , '$cvv')";
$run=mysqli_query($conn,$query);
if($run){
    echo "data submited succesfully";
}
else
{
    echo "data not submitted ";
}
/*}
else{
echo "all fields required";
}
*/


?>