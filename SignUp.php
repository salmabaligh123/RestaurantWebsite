<?php
$conn = new mysqli("localhost","root","","cairogrnd");

if ($conn->connect_error) die ("Fatal connection error");
else echo "Connected to database"."<br>";


    if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['username'])&&!empty($_POST['loginPassword'])&&!empty($_POST['nationalid'])&&!empty($_POST['pnumber']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['loginPassword'];
        $id=$_POST['nationalid'];
        $number=$_POST['pnumber'];
        $query="INSERT INTO people(name,email,username,password,id,number) values('$name',' $email','$username','$password','$id','$number')";
        $run=$conn->query($query);
        if($run)
            echo "Form Submitted Successfully";
        else
            echo "Not Submitted";
    }
    else
    {
        echo "All Fields required";
    }
//}
?>