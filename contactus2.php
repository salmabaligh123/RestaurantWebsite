<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="shortcut icon" href="logo4.jpeg" />

<!-- styling start-->
<style>
.form  b{
    font-size: 4rem;
    color:white;
    line-height: 2;
    padding:1rem 0;
    padding-left: 6rem;
    margin-left: 40rem
    

}
.form input{
    color: black;
    padding-left: 6rem;
    border: 16px black;
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    margin-left: 45rem;
}
.form input:focus{
    background-color: rgba(206, 203, 192, 0.526);
    border: 3px solid rgba(246, 200, 84, 0.759);
    
}
.form textarea{
  color: black;
    width: 25%;
    padding: 12px 20px;
    margin: 3px 0;
    box-sizing: border-box;
    margin-left: 45rem;
}
.form textarea:focus {
    background-color: rgba(206, 203, 192, 0.526);
    border: 3px solid rgba(246, 200, 84, 0.759);
  }
.form .names{
    border: 16px ;
}


body{
    background-image: url("contactback7.jfif");
    background-repeat: no-repeat;
    background-size: cover;
}


.form  .sub  #submit{
  display:inline-block;
  font-size: 16px;
  color: black;
  padding: 14px 16px;
  box-shadow: black;
  border: 2rem;
  background: rgba(246, 200, 84, 0.759);
  margin-left: 8rem;
  margin-bottom: 3rem;
  margin-left: 45rem;
    
    
 
    
 }
 
 .form .sub #submit:hover{
    color:var(--main-color);
    background: black;
 }














 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
   --main-color:rgba(246, 200, 84, 0.759);
   --black:#222;
   --white:#fff;
   --light-black:#777;
   --light-white:#fff9;
   --dark-bg:rgba(0,0,0,.7);
   --light-bg:#eee;
   --border:.1rem solid var(--black);
   --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
   --text-shadow:0 1.5rem 3rem rgba(0,0,0,.3);
}

/*****************************************************/
/* Navbar container */
.navbar {
   overflow: hidden;
   
   
   font-family: Arial;
 }
 
 /* Links inside the navbar */
 .navbar a {
   float: left;
   font-size: 16px;
   color: white;
   text-align: center;
   padding: 14px 16px;
   text-decoration: none;
 }
 
 /* The dropdown container */
 .dropdown {
   float: left;
   overflow: hidden;
 }
 
 /* Dropdown button */
 .dropdown .dropbtn {
   font-size: 16px;
   border: none;
   outline: none;
   color: white;
   padding: 14px 16px;
   background-color: inherit;
   font-family: inherit; /* Important for vertical align on mobile phones */
   margin: 0; /* Important for vertical align on mobile phones */
 }
 
 /* Add a red background color to navbar links on hover */
 .navbar a:hover{
    color:black;
 }
 .dropdown:hover .dropbtn {
   background-color:black;
 }
 
 /* Dropdown content (hidden by default) */
 .dropdown-content {
   display: none;
   position: absolute;
   background-color: white;
   min-width: 160px;
   box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
   z-index: 1;
 }
 
 /* Links inside the dropdown */
 .dropdown-content a {
   float: none;
   color: black;
   padding: 12px 16px;
   text-decoration: none;
   display: block;
   text-align: left;
 }
 
 /* Add a grey background color to dropdown links on hover */
 .navbar .dropdown-content a:hover {
  color:black;
   
   
 }
 
 /* Show the dropdown menu on hover */
 .dropdown:hover .dropdown-content {

   display:block;
 }
/*****************************************************/

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   text-transform: capitalize;
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
}

html::-webkit-scrollbar{
   width: 1rem;
}

html::-webkit-scrollbar-track{
   background-color: var(--white);
}

html::-webkit-scrollbar-thumb{
   background-color: var(--main-color);
}

section{
   padding:5rem 10%;
}

@keyframes fadeIn {
   0%{
      transform: scale(0);
      opacity: 0;
   }
}

.heading{
   background-size: cover !important;
   background-position: center !important;
   padding-top: 10rem;
   padding-bottom:15rem;
   display: flex;
   align-items: center;
   justify-content: center;
}

.heading h1{
   font-size: 10rem;
   text-transform: uppercase;
   color:var(--white);
   text-shadow: var(--text-shadow);
}

.btn{
   display: inline-block;
   background: var(--black);
   margin-top: 1rem;
   color:var(--white);
   font-size: 1.7rem;
   padding:1rem 3rem;
   cursor: pointer;
}

.btn:hover{
   background: var(--main-color);
}

.heading-title{
   text-align: center;
   margin-bottom: 3rem;
   font-size: 6rem;
   text-transform: uppercase;
   color:var(--black);
}

.header{
   position:sticky;
   top:0; left:0; right:0;
   z-index: 1000;
   background-color: var(--white);
   display: flex;
   padding-top: 2rem;
   padding-bottom: 2rem;
   box-shadow: var(--box-shadow);
   align-items: center;
   justify-content: space-between;
}

.header .logo{
   font-size: 2.5rem;
   color:var(--black);
}

.header .navbar a{
   font-size: 2rem;
   margin-left: 2rem;
   color:var(--black);
}

.header .navbar a:hover{
   color:var(--main-color);
}


.header .dropdown .content{
    display: none;
color:white;
    position:absolute;
    background-color: black;
    /*min-width: 10px;*/
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.header .dropdown .content a{
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display:block;

}
.dropdown .content a:hover{
    background-color: rgba(246, 200, 84, 0.759); 
}
.dropdown:hover .content{
   display:block;
  /* position:absolute;*/
}
.dropdown:hover .dropbutton{
    background-color:white;
    color:rgba(19, 16, 9, 0.759) 
}
.navbar .menudrop{
   display: none;
}

#menu-btn{
   font-size: 2.5rem;
   cursor: pointer;
   color:var(--black);
   display: none;
}




/***************************************************************************/
/***************************************************************************/
.footer{
    background: url(footerbackcopy.jpg) no-repeat;
    background-size: cover;
    background-position: center;
 }
 
 .footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap: 3rem;
 }
 
 .footer .box-container .box h3{
    color:var(--white);
    font-size: 2.5rem;
    padding-bottom: 2rem;
 }
 
 .footer .box-container .box a{
    color:var(--light-white);
    font-size: 1.5rem;
    padding-bottom: 1.5rem;
    display: block;
 }
 
 .footer .box-container .box a i{
    color:var(--main-color);
    padding-right: .5rem;
    transition: .2s linear;
 }
 
 .footer .box-container .box a:hover i{
    padding-right: 2rem;
 }
 
 .footer .credit{
    text-align: center;
    padding-top: 3rem;
    margin-top: 3rem;
    border-top: .1rem solid var(--light-white);
    font-size: 2rem;
    color:var(--white);
 }
 
 .footer .credit span{
    color:var(--main-color);
 }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 /* media queries  */
 
 @media (max-width:1200px){
 
    section{
       padding:3rem 5%;
    }
 
 }
 
 @media (max-width:991px){
 
    html{
       font-size: 55%;
    }
 
    section{
       padding:3rem 2rem;
    }
 
    .home .slide .content h3{
       font-size: 10vw;
    }
 
 }
 
 @media (max-width:768px){
 
    .heading h1{
       font-size: 4rem;
    }
 
    #menu-btn{
       display: inline-block;
       transition: .2s linear;
    }
 
    #menu-btn.fa-times{
       transform: rotate(180deg);
    }
 
    .header .navbar{
       position: absolute;
       top:99%; left:0; right:0;
       background-color: var(--white);
       border-top: var(--border);
       padding:2rem;
       transition: .2s linear;
       clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }
 
    .header .navbar.active{
       clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    }
 
    .header .navbar a{
       display: block;
       margin:2rem;
       text-align: center;
    }
 
 }
 
 @media (max-width:450px){
 
    html{
       font-size: 50%;
    }
 
    .heading-title{
       font-size: 3.5rem;
    }
 
 }
</style>


<!-- styling end-->

    <!-- swiper css link  -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="contactus.css" />
  </head>
  <body>
    <section class="header">
      <a href="home.html" class="logo">Cairo GRND</a>
      <nav class="navbar">
        <a href="file:///C:/Users/USER/Desktop/home.html">home</a>
        <a href="about.html">about</a>
        <a href="book.php">Account</a>
        <a href="contactus.html">Contact Us</a>
        <div class="dropdown">
          <a href="menu.html" class="dropbutton">Menu</a>
          <div class="dropdown-content">
            <a href="mainmenu.php" class="butt1">Main Menu</a><br />
            <a href="breakfast.php" class="butt2">BreakFast Menu</a>
            <a href="desserts.php" class="butt1">Desserts Menu</a>
            <a href="beverages.php" class="butt2">Beverages Menu</a>
            <a href="compose.php" class="butt1">Compose a Sandwich</a>
          </div>
        </div>
      </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <div class="form">
      <form name="formm" action="savecontactus2.php" method="POST">
        <div class="names">
          <b>Name:</b> <br />
          <input
            type="text"
            id="contactname"
            name="username"
            placeholder="Enter your name here"
          />
        </div>
        <br /><br />
        <div class="email">
          <b>Email:</b> <br />
          <input
            type="text"
            id="contactemail"
            name="email"
            placeholder="Enter your Email Here"
          />
        </div>
        <br /><br />
        <div class="contact">
          <b>Your Message:</b> <br />
          <textarea
            aria-label="Comments"
            name="msg"
            placeholder="Write Here"
            rows="7"
            cols="50"
            id="contactus"
            dir="auto"
            aria-required="true"
            required="required"
          ></textarea>
        </div>

        <br /><br /><br /><br /><br />
        <div class="sub">
          <input type="submit" name="submit" id="submit" value="Submit">
        </div>
      </form>
    </div>
    
    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>quick links</h3>
          <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
          <a href="about.html"> <i class="fas fa-angle-right"></i> about</a>
          <a href="Menu.php"> <i class="fas fa-angle-right"></i> Menu</a>
          <a href="Account.php"> <i class="fas fa-angle-right"></i> Account</a>
        </div>

        <div class="box">
          <h3>Contact Us</h3>
          <a href="https://www.instagram.com/?hl=en">
            <i class="fas fa-angle-right"></i>instagram</a
          >
          <a href="https://www.facebook.com/">
            <i class="fas fa-angle-right"></i>Facebook</a
          >
          <a href="https://twitter.com/?lang=en">
            <i class="fas fa-angle-right"></i> Twitter</a
          >
          <a href="#"> <i class="fas fa-phone"></i> 01234567890 </a>
          <a href="#">
            <i class="fas fa-map"></i> 5th Settlement ,Cairo, Egypt, 11841
          </a>
        </div>
      </div>

      <div class="credit">
        created by
        <span
          >Eslam Khaled/Hana Alaa/jasmine Hegazy/Julia Magdy/Salma Baligh</span
        >
        | all rights reserved!
      </div>
    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="script.js"></script>
  </body>
</html>
