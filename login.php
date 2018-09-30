<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zen Asia Wellness Spa</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  </head>
  <body>
      <nav>
          <div class="logo">
            <a href="home.php"><img src="image/zenlogo1.png" alt=""></a>
          </div>
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a href="">Gallery</a></li>
            <li><a href="">Appointment</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Testimonials</a></li>
            <li><a href="login.php">Log In</a></li>
          </ul>
      </nav>

 <section class="service" style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(image/spa1.jpg);">



       <div id="login-box">
         <div class="left-box">
             <h1>Log In</h1>
              <form class="login" action="includes/login.inc.php" method="post">
                <input type="text" name="uid"  placeholder="Username/Email">
                <input type="password" name="pwd" placeholder="Password">
                <input type="submit" name="submit" value="Log In">
              </form>

         </div>
         <div class="right-box">
             <h1>Sign Up</h1>
             <form class="login" action="includes/signup.inc.php" method="post">
               <input type="text" name="first" value="" placeholder="First Name">
               <input type="text" name="last" value="" placeholder="Last Name">
               <input type="text" name="email" value="" placeholder="Email">
               <input type="text" name="uid" value="" placeholder="Username">
               <input type="password" name="pwd" value="" placeholder="Password">
               <input type="password" name="confirm_pwd" value="" placeholder="Confirm Password">
               <input type="submit" name="submit" value="Sign Up">

             </form>

         </div>
         <div class="or">OR</div>
       </div>


 </section>

</body>
</html>
