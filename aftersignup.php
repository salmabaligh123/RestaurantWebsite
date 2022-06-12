 <html lang="en">
 <head>
   <script>
     function tomenu() {
       <?php
        $conn = new mysqli("localhost", "root", "", "cairogrnd");

        if ($conn->connect_error) die("Fatal connection error");
        $query = "SELECT username from people WHERE username='" . $_POST['username'] . "'";
        $run = $conn->query($query);
        $rows = $run->num_rows;
        if ($rows != 0) //law el username mawgood already
        {
          echo "username already";
          return false;
        }
        ?>
       window.location.href = "Project/signin.php"; //MENUUUUUUUUUUU FROM JASMINE
     }
   </script>

   <?php
    $conn = new mysqli("localhost", "root", "", "cairogrnd");
    if ($_POST['loginPassword'] != $_POST['confirmPassword']) {
      header("Location:../Project/SignUp.php?error=Passwords dont Match -Please Try Again");
    }
    $name = $_POST['name'];
    $mail = filter_var ($_POST['email'],FILTER_SANITIZE_EMAIL);
    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)==false){
      header("Location:../Project/SignUp.php?error2=Email is Invalid!");
    }
 
    $name = $_POST['name'];
    $username = $_POST['username'];
    $id = $_POST['nationalid'];
    $number = $_POST['pnumber'];
    $pass = $_POST['loginPassword'];

    $img_name = $_FILES['image']['name'];
    $img_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];

    if ($error === 0) {
      if ($img_size > 125000) {
        $em = "Sorry, your file is too large.";
      } else {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png", "webp");

        if (in_array($img_ex_lc, $allowed_exs)) {
          $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
          $img_upload_path = 'uploads/' . $new_img_name;
          move_uploaded_file($tmp_name, $img_upload_path);
        } else {
          $em = "You can't upload files of this type";
          header("Location: Project/SignUp.php?error=$em");
        }
      }
    } else {
      $em = "unknown error occurred!";
      header("Location: Project/SignUp.php?error=$em");
    }

    $qur = "INSERT INTO `waiting` (`name`, `email`, `id`, `phone`, `username`,`password`,`image`) VALUES ('$name',' $mail','$id','$number','$username','$pass','$new_img_name')";
    $res = $conn->query($qur);
    ?>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
   <link href="images/favicon.png" rel="icon">
   <title>Register Form</title>
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
                 <h3 class="font-weight-300 text-9 mb-5">Your Request is pending</h3>
                 <label for="file">Please wait</label>
                 <progress id="file" value="32" max="100"> 32% </progress>
                 <input type="submit" class="btn btn-dark btn-block shadow-none font-weight-400 my-4" name="submit" value="Head to Menu">
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
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script> -->
   <!-- Style Switcher -->
   <!-- <script src="js/switcher.min.js"></script>  -->
   <!-- <script src="js/theme.js"></script> -->

 </body>

 </html>