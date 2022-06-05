<style>
table, th, td {
  border: 1px solid black;
}

</style>
<script> 
 function showHint(str){
      if(str.length==0){
          document.getElementById("txtHint").innerHTML="";
        return; 
    } else{
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200){
                document.getElementById("txtHint").innerHTML=this.responseText;
            }
        };
        xmlhttp.open("GET","gethint.php?q="+str,true);
        xmlhttp.send();
        }
  }
  </script>

<?php
include "Menu.php";
session_start();

$conn = new mysqli("localhost","root","","cairogrnd");
$query = "SELECT * FROM menu";
$result = mysqli_query($conn,$query);


$a = "SELECT * from menu WHERE name='".$_POST['name']."'";
$q = $_REQUEST['q'];

$hint = "";

if ($q !== "") {

$q = strtolower($q);
$len = strlen($q);

foreach ($a as $name) {
	
	if (stristr($q, substr($name, 0, $len))) {
		
		if ($hint == "") {
			$hint = $name;
		}
		else {
		$hint .= ", $name";
		}

	}
}

}

echo $hint === "" ? "no suggestion " : $hint;




if(isset($_POST['save'])){
    $sql="SELECT * from menu WHERE name='".$_POST['name']."'";
    $result = mysqli_query($conn,$sql);

    echo"<table >

    <tr>
        <th> Type</th>
        <th>Name</th>
        <th>Ingredients</th>
        <th>Price</th>
    </tr>";

while($row = mysqli_fetch_array($result)) 
{
    ?>
    <tr>
    <td><?= $row['type']; ?></td>
	<td><?= $row['name']; ?></td>
	<td><?=  $row['ingredients']; ?></td>
	<td><?= $row['price']; ?></td>
    </tr>
    <?php
}
}
?>
<html>
<head>
    <title>Search Item </title>
</head>
<body>
<form method="post" action="">
Item Name:
<input type="text" name="name" onkeyup="showHint(this.value)">
</form>
<p>Suggessions:<span id="txtHint"> </span></p>
</body>
</html>
<p><button type="submit" class="btn btn-success" name="save">Search</button></p>
