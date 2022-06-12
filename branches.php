<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cairogrnd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM images";
$logo = mysqli_query($conn, $query);
$footer = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Branches</title>

    <link rel="shortcut icon" href="logo4.jpeg">

    <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="branches.css">
</head>
<?php include "header2.php";?>
<title>Branches </title>

    <!--    trial     -->

    <div class="branchess">
        <h3>Zamalek</h3>
        <p>
            53 Abou El Feda, Mohammed Mazhar, Zamalek, Giza Governorate 4271185
        </p>
        <a href="https://www.google.com/maps/dir/30.0417024,31.4671104/biota/@30.0294933,31.204181,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x145841e0ea5033bd:0x4976405499c3186d!2m2!1d31.2223358!2d30.0729635" class="btn">Get Location</a>
        <h3>Alexandria</h3>
        <p>
            4 Al Manteka Al Shamalea, Mustafa Kamel WA Bolkli, Sidi Gaber, Alexandria Governorate 5434033
        </p>
        <a href="https://www.google.com/maps/dir/30.0417024,31.4671104/%D8%A8%D9%84%D8%A8%D8%B9+%D8%B3%D9%8A%D8%AF%D9%89+%D8%AC%D8%A7%D8%A8%D8%B1%E2%80%AD%E2%80%AD/@30.5967961,29.5075915,8z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x14f5c5dfa99e7383:0x69357fa0a9834306!2m2!1d29.9421547!2d31.2265102">Get Location</a>


        <h3>Tagamo3</h3>
        <p>
            New Cairo 1, Cairo Governorate 4740012
        </p>
        <a href="https://www.google.com/maps/dir//gatz/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x145823183764cbfd:0x195ae7032bcc66c5?sa=X&ved=2ahUKEwjbtMLh44z4AhUSDewKHeFtAtwQ9Rd6BAhaEAQ">Get Location</a>

        <h3>Marassi</h3>
        <p>XQ74+5J4, Alexandria - Marsa Matrouh Rd, El Alamein, Matrouh Governorate 5065501</p>
        <a href="https://www.google.com/search?q=marassi&ei=TaaXYr3fIoL3kgWzxpPoCg&ved=2ahUKEwiKlJH254z4AhURuKQKHaV9BMUQvS56BAgQEAE&uact=5&oq=marassi&gs_lcp=Cgdnd3Mtd2l6EAMyCwguEIAEEMcBEK8BMgsIABCABBCxAxCDATIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMggIABCABBDJAzILCC4QgAQQxwEQrwEyBQgAEIAEOg4IABCPARDqAhCMAxDlAjoKCAAQsQMQgwEQQzoLCC4QgAQQxwEQowI6CwguEIAEELEDENQCOgUILhCABDoICAAQsQMQgwE6CAguELEDEIMBOgQIABBDOgUIABCxAzoICC4QgAQQsQM6CwguEMcBEK8BEJECOgUIABCRAjoFCC4QsQM6EQguEIAEELEDEMcBENEDENQCOgsILhCABBCxAxCDAToKCC4QsQMQgwEQQ0oECEEYAEoECEYYAFCyBlixDWD6D2gBcAF4AIABsAGIAcYIkgEDMC43mAEAoAEBsAECwAEB&sclient=gws-wiz&tbs=lf:1,lf_ui:2&tbm=lcl&rflfq=1&num=10&rldimm=1668312205682782715&lqi=CgdtYXJhc3NpSLjM5KzUlYCACFoTEAAYACIHbWFyYXNzaSoECAIQAJIBDHJlc29ydF9ob3RlbJoBI0NoWkRTVWhOTUc5blMwVkpRMEZuU1VSVmFuQnVVVVZSRUFF&sa=X&rlst=f#rlfi=hd:;si:1668312205682782715,l,CgdtYXJhc3NpSLjM5KzUlYCACFoTEAAYACIHbWFyYXNzaSoECAIQAJIBDHJlc29ydF9ob3RlbJoBI0NoWkRTVWhOTUc5blMwVkpRMEZuU1VSVmFuQnVVVVZSRUFF;mv:[[31.5284288,51.9611538],[26.0096092,27.4136439]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3,lf:1">Get Location</a>

    </div>


    <?php include "footer.php";?>

        <!-- swiper js link  -->
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

        <!-- custom js file link  -->
        <script src="script.js"></script>
</body>

</html>