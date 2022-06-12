<style>
  table,
  th,
  td {
    border: 1px solid black;
  }
</style>
<?php include "headermenu.php" ?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon.png" rel="icon">
<title>Enable -CairoGrnd</title>
<meta name="description" content="Enable-CairoGrnd">
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
                <h3 class="font-weight-300 text-9 mb-5">Update Cashiers' Roles</h3>
                <?php

                session_start();
                $conn = new mysqli("localhost", "root", "", "cairogrnd");
                $query = "SELECT name,email,username,role,enable FROM people WHERE role='cashier'";
                //$query="SELECT name,email,username,role,enable FROM people WHERE role='cashier' OR role='Manager'";
                $result = mysqli_query($conn, $query);
                ?>
                <html>
                <form id="qualitycontrolform" method="post" action="">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>To Quality Ctrl</th>
                      </tr>
                    </thead>
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                      <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['role']; ?></td>
                        <td><a href="managerrole.php?username=<?php echo $row['username']; ?>">Promote</a></td>
                      </tr>
                    <?php
                      $i++;
                    }
                    ?>

                    </tr>
                  </table>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<?php include "footer.php"; ?>
</html>