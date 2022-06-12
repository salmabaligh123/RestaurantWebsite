<?php
$conn = new mysqli("localhost","root","","cairogrnd");

if ($conn->connect_error) die ("Fatal connection error");
else {
        $after = mysqli_query($conn,"DELETE FROM waiting WHERE id='" . $_GET['id'] . "'");
        if($after){
            ?>
            <script>
            window.location.href="qualityctrl.php";
            </script>
            <?php
        }
}
?>