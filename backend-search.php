<?php
session_start();

$conn = new mysqli("localhost", "root", "", "cairogrnd");
$query = "SELECT * FROM menu";
$result = mysqli_query($conn, $query);
//$sql = "SELECT * from menu WHERE id='" . $_POST['id'] . "'";
$sql = "Select menu.type, menu.name, menu.price, menu.image from menu" ;// Escape user inputs for security
$term =  $_POST['term'];
  echo"<table border=1 width=100%>
            <tr><th>type</th><th>name</th><th>price</th><th>image</th></tr>";
if(!empty($term)){
    // Attempt select query execution
    $sql = $sql . " WHERE name LIKE '%" . $term . "%' or type LIKE '%" . $term . "%' ";
}
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "<tr><td>". $row['type'] ."</td><td>".$row["name"]."</td><td>".$row["price"]."$ </td><td><img src =".$row["image"]." height=50px,width=50px></img></td></tr>";
            }
            
        } else{
            echo "<tr><td colspan=4>No matches found</td></tr>";
        }
    } else{
        echo "<tr><td colspan=4>ERROR: Could not able to execute $sql. " . mysqli_error($conn)."</td></tr>";
    }

 echo"</table>";
// close connection
mysqli_close($conn);
?>