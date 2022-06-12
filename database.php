<?php
$conn=mysqli_connect("localhost","root","","cairogrnd");
if($conn->connect_error)
	die("not connected");
$userf=$_POST['user'];
$passf=$_POST['pass']; //Bageb username w pass mn el form
$sql="SELECT * from people WHERE username='".$_POST['user']."' and password= '".$_POST['pass']."'";//Law user
$result=mysqli_query($conn,$sql);
$rows=$result->num_rows; 
$row=mysqli_fetch_array($result);  
$roles=$row['role'];
if($roles=='admin')
	{
		echo "admin";
	}
	elseif ($roles=='cashier')
	{
		?>
		<script>
		window.location.href="menu.php"; //cashier page
		</script>
		<?php
	}
	elseif($roles=='customer')
	{
		?>
		<script>
		window.location.href="breakfast.php"; //Customer page'Menu'
		</script>
		<?php
	}


$conn->close();
?>