<?php
$conn = new mysqli("localhost", "root", "", "cairogrnd");
$query = "SELECT * FROM menu";
$result = mysqli_query($conn, $query);

if(!empty ($_POST['name']))
{
    $id=$_POST['name'];
	$query="SELECT * FROM menu WHERE name	= '$name'";
	$result= mysqli_query ($con, $query);
	$user_count=mysqli_num_rows($result);
	if($user_count>0)
	{
		echo "<div class='name-taken'> Name taken try agian try another one. </div>";
	}
	else
	{
		echo "<div class='name-ok'> Name OK.</div>";
	}
}
?>