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

          <?php
              if (isset($_SESSION['u_id'])) {
                echo '  <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="service.php">Services</a></li>
                    <li><a href="">Gallery</a></li>
                    <li><a href="">Appointment</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="includes/logout.inc.php">Log out</a></li>
                  </ul>';
              }else
              {
                echo '  <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="service.php">Services</a></li>
                    <li><a href="">Gallery</a></li>
                    <li><a href="">Appointment</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="login.php">Log In</a></li>
                  </ul>';
              }


            ?>

      </nav>
