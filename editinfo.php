<html lang="en">

<head>
  <script>
    function check() {

    }
  </script>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "cairogrnd";
  session_start();
  $user = $_SESSION['Username'];
  $pass = $_SESSION['Pass'];

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  if (isset($_POST['submit'])) {
    $after = mysqli_query($conn, "UPDATE people set name='" . $_POST['name'] . "',email='" . $_POST['email'] . "',username='" . $_POST['username'] . "',number='" . $_POST['number'] . "' WHERE username='$user'");
    if ($after) {
      header("Location:../Project/accinfo.php");
      //$message = "Record Modified Successfully";
    }
    //  $sql="UPDATE people set name='" . $_POST['name'] . "',email='" . $_POST['email'] . "',username='" . $_POST['username'] . "',number='" . $_POST['number'] . "' WHERE username='" . $_GET['username']"'";
    //mysqli_query($conn,$sql);
  }
  $result = mysqli_query($conn, "SELECT * FROM people WHERE username='$user'");
  $rows = $result->num_rows;

  $row = mysqli_fetch_assoc($result);
  ?>


  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
  <link href="images/favicon.png" rel="icon">
  <title>Edit Profile -CairoGrnd</title>
  <meta name="description" content="Edit Profile-CairoGrnd">
  <!-- Web Fonts
    ========================= -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" type="text/css">


  <!-- Stylesheet
    ========================= -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="enhanced.css">
  <!-- Colors Css -->
  <link id="color-switcher" type="text/css" rel="stylesheet" href="#">
</head>

<body>
  <div id="main-wrapper" class="oxyy-login-register">
    <div class="container-fluid px-0">
      <div class="row no-gutters min-vh-100">
        <!-- Register Form
          ========================= -->
        <div class="col-md-6 d-flex flex-column align-items-center order-2 order-md-1">
          <div class="container pt-5">
            <div class="row">
              <div class="col-11 col-md-10 mx-auto">

              </div>
            </div>
          </div>
          <div class="container my-auto py-5">
            <div class="row">
              <div class="col-11 col-md-10 col-lg-9 col-xl-8 mx-auto">

                <form name="editForm" method="POST" action="">
                  <div class="form-group font-weight-300">

                    <label>Name</label>
                    <input type="text" class="form-control bg-light" name="name" value="<?php echo $row['name'] ?>">
                  </div>
                  <div class="form-group font-weight-300">
                    <label>Email Address</label>
                    <input type="email" class="form-control bg-light" name="email" value="<?php echo $row['email'] ?>">
                  </div>

                  <div class="form-group font-weight-300">
                    <label>Phone Number</label>
                    <input class="form-control bg-light" name="number" value="<?php echo $row['number'] ?>">
                  </div>
                  <div class="form-group font-weight-300">
                    <label>Username</label>
                    <input class="form-control bg-light" name="username" value="<?php echo $row['username'] ?>">
                  </div>

                  <input type="submit" class="btn btn-dark btn-block shadow-none font-weight-400 my-4" name="submit" value="Submit">
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Register Form End -->


        <!-- Welcome Text
          ========================= -->
        <div class="col-md-6 bg-dark order-1 order-md-2">
          <div class="container h-100 d-flex flex-column">
            <div class="row no-gutters">
            </div>
            <div class="row no-gutters my-auto">
              <div class="col-11 col-md-10 mx-auto">
                <h1 class="text-13 font-weight-400 mb-4 text-light">EDIT PROFILE</h1>
                <p style="color: #cecece;"> </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Welcome Text End -->
      </div>
    </div>
  </div>


  <!-- Script -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script> -->
  <!-- Style Switcher -->
  <!-- <script src="js/switcher.min.js"></script>  -->
  <!-- <script src="js/theme.js"></script> -->

</body>

</html>