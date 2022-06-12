<style>
  table,
  th,
  td {
    border: 1px solid black;
  }
</style>
<script>
  function accept() {
    window.location.href = "dbconn.php";
  }
</script>
<?php include "headermenu.php" ?>
<meta charset="UTF-8">
<a(); ?>
  <title>Quality Control</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
  <link href="images/favicon.png" rel="icon">
  <title>Quality Control Form -CairoGrnd</title>
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
                  <h2 class="font-weight-300 text-9 mb-5">New Users Waiting for Acceptance</h2>
                  <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "cairogrnd";
                  session_start();
                  // Create connection
                  $conn = new mysqli($servername, $username, $password, $dbname);
                  $query = "SELECT * FROM waiting";
                  $result = mysqli_query($conn, $query);
                  $logo = mysqli_query($conn, $query2);

                  while ($row = mysqli_fetch_array($logo)) {
                    if ($row['image'] == 'Pictures/logo4.jpg') {
                  ?>
                      <link rel="shortcut icon" href=<?= $row['image']; ?>>
                  <?php
                    }
                  }

                  ?>
                  <html>
                  <form id="qualitycontrolform" method="post" action="dbconn.php">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>National ID</th>
                          <th>Phone</th>
                          <th>Username</th>
                        </tr>
                      </thead>

                      <?php
                      while ($row = mysqli_fetch_array($result)) {
                        $_SESSION['uss'] = $row['username'];
                      ?>
                        <tr>
                          <td><?= $row['name']; ?></td>
                          <td><?= $row['email']; ?></td>
                          <td><?= $row['id']; ?></td>
                          <td><?= $row['phone']; ?></td>
                          <td><?= $row['username']; ?></td>
                          <td><a href="dbconn.php?id=<?php echo $row["id"]; ?>">Accept</a></td>
                          <td><a href="reject.php?id=<?php echo $row["id"]; ?>">Reject</a></td>

                        <?php
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
    <?php include "footer.php"; ?>
  </body>

  </html>