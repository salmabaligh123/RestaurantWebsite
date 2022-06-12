<?php
$conn = new mysqli("localhost","root","","cairogrnd");

    if(!empty($_POST['type'])&&!empty($_POST['name'])&&!empty($_POST['ingredients'])&&!empty($_POST['price'])&&!empty($_POST['image']))
    {
        $type=$_POST['type'];
        $name=$_POST['name'];
        $ingredients=$_POST['ingredients'];
        $price=$_POST['price'];
        $image=$_POST['image'];
        $query="INSERT INTO menu(type,name,ingredients,price) values('$type','$name','$ingredients','$price','$image')";
        $run=$conn->query($query);
    }

?>
<?php include "menu.php";?>
<html>
    <head>
    <title>Add Item </title>
</head>
<body>
<form action="" method="post">
Image:<br>
  <input type="file" name="type"><br> 
Type:<br>
  <input type="text" name="type"><br> 
  Name:<br>
  <input type="text" name="name"> <br> 
  Ingredients:<br>
  <input type="text" name="ingredients"><br>
  Price:<br>
  <input type="text" name="price"><br>
  <input type="submit" value="Submit" name="Submit">
 
</form>
</body>
</html>

