<html lang="en">

<head>
  <script>
    function check() {
      let p1 = document.forms["registerForm"]["loginPassword"].value;
      let p2 = document.forms["registerForm"]["confirmPassword"].value;
      let name = document.forms["registerForm"]["name"].value;
      let email = document.forms["registerForm"]["email"].value;
      let username = document.forms["registerForm"]["username"].value;
      let nationalid = document.forms["registerForm"]["nationalid"].value;
      let pnum = document.forms["registerForm"]["pnumber"].value;
      <?php
      session_start();
      echo $name;
      $_SESSION['Sname'] = $name;
      //$_SESSION['Semail'] = $email;
      $email = filter_var($_SESSION['Semail'], FILTER_SANITIZE_EMAIL);
      $_SESSION['Susername'] = $username;
      $_SESSION['Sid'] = $nationalid;
      $_SESSION['Sphone'] = $pnum;
      $_SESSION['Spass'] = $p1;
      ?>
      if (p1 !== p2) {
        alert("Oops!! Entered passwords do not match");
        document.forms["registerForm"]["loginPassword"].value = "";
        document.forms["registerForm"]["confirmPassword"].value = "";
        return false;
      }
      if (p1 == "" || p2 == "" || name == "" || email == "" || username == "" || nationalid == "" || pnum == "") {
        alert("Please fill in all required data");
        return false;
      }
      return true;
      window.location.href = "Project/signin.php";

    }
  </script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
  <link href="images/favicon.png" rel="icon">
  <title>Register Form </title>
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
                <h3 class="font-weight-300 text-9 mb-5">Sign Up</h3>
                <?php if (isset($_GET['error'])) { ?>
                  <div class="alert alert-danger" role="alert">
                    Oops!! Entered passwords do not match
                  </div>
                <?php  } elseif (isset($_GET['error2'])) { ?>
                  <div class="alert alert-danger" role="alert">
                    Your Email in Invalid!
                  </div>
                <?php  } ?>

                <form name="registerForm" method="POST" onsubmit="return check()" action="signin.php" enctype="multipart/form-data">
                  <div class="form-group font-weight-300">
                    <label>Name</label>
                    <input type="text" class="form-control bg-light" name="name" placeholder="Enter Your Name">
                  </div>
                  <div class="form-group font-weight-300">
                    <label>Email Address</label>
                    <input type="text" class="form-control bg-light" name="email" placeholder="Enter Your Email">
                  </div>

                  <div class="form-group font-weight-300">
                    <label>National ID Number</label>
                    <input class="form-control bg-light" name="nationalid" placeholder="Enter Your ID Number">
                  </div>
                  <div class="form-group font-weight-300">
                    <label>Photo</label>
                    <input type="file" class="form-control bg-light" name="image" placeholder="Enter Your Photo">
                  </div>
                  <div class="form-group font-weight-300">
                    <label>Phone Number</label>
                    <input class="form-control bg-light" name="pnumber" placeholder="Enter Your Phone Number">
                  </div>
                  <div class="form-group font-weight-300">
                    <label>Username</label>
                    <input class="form-control bg-light" name="username" placeholder="Enter Your Username">
                  </div>
                  <div class="form-group font-weight-300">
                    <label>Password</label>
                    <input type="password" id="pass1" class="form-control bg-light" name="loginPassword" placeholder="Enter Password">
                  </div>
                  <div class="form-group font-weight-300">
                    <label> Confirm Password</label>
                    <input type="password" id="pass2" class="form-control bg-light" name="confirmPassword" placeholder="Re-Enter Password">
                  </div>
                  <input type="checkbox" name="robot" value="robot"> I am not a robot
                  <input type="submit" class="btn btn-dark btn-block shadow-none font-weight-400 my-4" name="submit" value="Sign Up">
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

</body>

</html>