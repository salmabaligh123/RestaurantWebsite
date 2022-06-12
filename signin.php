<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
  <link href="images/favicon.png" rel="icon">
  <title>SignIn Form-CairoGrnd</title>
  <meta name="description" content="Login and Register Form Html Template">
  <meta name="author" content="harnishdesign.net">

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
        <!-- SignIn Form
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
                <h3 class="font-weight-300 text-9 mb-5">Sign In</h3><!-- new alert here in form -->
                <form name="registerForm" method="POST" action="roles.php">
                  <?php
                  if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                      Username or Password incorrect—Try again!
                    </div>
                  <?php  } elseif (isset($_GET['error1'])) { ?>
                    <div class="alert alert-danger" role="alert">
                      Sorry you are Disabled—Return to Manager!
                    </div>
                  <?php  }
                   elseif (isset($_GET['error2'])) { ?>
                    <div class="alert alert-danger" role="alert">
                      Your Email in Invalid!
                    </div>
                  <?php  } ?>

                  <div class="form-group font-weight-300">
                    <label>Username</label>
                    <input class="form-control bg-light" name="user" required="" placeholder="Enter Your Username">
                  </div>
                  <div class="form-group font-weight-300">
                    <label>Password</label>
                    <input type="password" class="form-control bg-light" name="pass" required="" placeholder="Enter Password">
                  </div>
                  <button id="btn" class="btn btn-dark btn-block shadow-none font-weight-400 my-4" type="submit" value="submit">Sign In</button>
                  <p class="text-right text-2 text-muted font-weight-300">Not a member?<a class="btn-link font-weight-300" href="signup.html">Sign Up Now </a> </p>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- SignIn Form End -->

        <!-- Welcome Text
          ========================= -->
        <div class="col-md-6 bg-dark order-1 order-md-2">
          <div class="container h-100 d-flex flex-column">
            <div class="row no-gutters">
            </div>
            <div class="row no-gutters my-auto">
              <div class="col-11 col-md-10 mx-auto">
                <h1 class="text-13 font-weight-400 mb-4 text-light">CAIRO GRND RESTAURANT</h1>
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