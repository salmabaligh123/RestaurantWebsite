<style>
  table,
  th,
  td {
    border: 1px solid black;
  }

  <?php session_start(); ?>
</style>

<meta charset="UTF-8">
<?php include "header2.php" ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon.png" rel="icon">
<title>Account Info -CairoGrnd</title>
<meta name="description" content="Register Form-CairoGrnd">
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
                <h3 class="font-weight-300 text-9 mb-5">Account Information</h3>
                <?php
                $user = $_SESSION['Username'];
                $pass = $_SESSION['Pass'];
                echo '<h2>Welcome Back Mr/Mrs ' . $_SESSION['Username'] . '!</h2>';
                ?>

                <html>
                <form id="qualitycontrolform" method="post" action="">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Number</th>
                        <th>Role</th>
                      </tr>
                    </thead>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "cairogrnd");
                    if ($conn->connect_error)
                      die("not connected");
                    $sql = "SELECT * from people WHERE username='" . $_SESSION['Username'] . "' and password= '" . $_SESSION['Pass'] . "'"; //Law user
                    $result = mysqli_query($conn, $sql);
                    $rows = $result->num_rows;
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                      <tr>
                        
                      <td><img src="<?php echo "uploads/".$row['image']; ?>" weight=75px height=75px></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['number']; ?></td>
                        <td><?php echo $row['role']; ?></td>
                      </tr>
                    <?php
                      $i++;
                    }
                    ?>
                    </tr>
                  </table>
                </form>
                Click here to <a href="editinfo.php">Edit Profile</a><br>
                Click here to <a href="signin.php" name="tologout">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<?php include "footer.php" ?>

</html>