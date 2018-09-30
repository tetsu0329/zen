<?php
include '../../includes/dbh.inc.php'

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale:1.0, user-scale">
    <title>Zen Asia | Administrator</title>
    <link rel="stylesheet" href="../style/adminstyle.css">
    <link rel="stylesheet" href="../style/flaticon/flaticon.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../jquery/general.js">

    </script>
  </head>
  <body>
    <div id="header">
      <div class="logo">
          <a href="../dashboard.php"><img src="../../image/zenlogo1.png" alt=""></a>
      </div>
      <ul>
      </ul>
    </div>
    <a href="#" class="mobile">MENU</a>

    <div class="container">
      <div class="sidebar">
          <ul id="nav">
            <li><a href="../dashboard.php" class="selected">Dashboard</a></li>
            <li><a href="">Inquiry</a></li>
            <li><a href="">Reservation</a></li>
            <li><a href="">Content Management System</a>
                <ul>
                  <li><a href="cms-home.php">Home</a></li>
                  <li><a href="">Services</a></li>
                  <li><a href="">Gallery</a></li>
                  <li><a href="cms-about.php">About Us</a></li>
                  <li><a href="">Contact</a></li>
                  <li><a href="">Testimonials</a></li>
                </ul>
            </li>
            <li><a href="">File Maintenance</a>
                <ul>
                  <li><a href="">Services</a>
                    <ul>
                      <li><a href="../services/service-category.php">Category</a></li>
                      <li><a href="">Services</a></li>
                    </ul>
                  </li>
                  <li><a href="">Therapists</a></li>
                  <li><a href="">Clients</a></li>
                </ul>
            </li>
            <li><a href="">Accounts</a>
              <ul>
                <li><a href="">Admin</a></li>
                <li><a href="">Customer</a></li>
              </ul>
            </li>
            <li><a href="">Audit Trail</a></li>
          </ul>
      </div>
      <div class="content">
          <h1>CONTENT MANANGEMENT | HOME</h1>
          <div id="box-manage">
              <div class="box-top">HOME UPDATE</div>
              <div class="box-panel">
                <?php

                  $cmsHome="SELECT * FROM cms";
                  $res=mysqli_query($conn,$cmsHome);

                  echo "<table border='1' width='100%'>";
                  echo "<tr>";
                  echo "<th height='50px'>"; echo "Image"; echo "</th>";

                  echo "<th>"; echo "Description"; echo "</th>";
                  echo "<th>"; echo "Action"; echo "</th>";
                  echo "</tr>";
                  while ($row=mysqli_fetch_array($res)) {
                    echo "<tr>";
                    echo "<td align='center'>"; ?><img src="../../image/<?php echo $row["home_img"]; ?>" height="100px" width="150" style="padding:10px;"><?php echo "</td>";

                    echo "<td align='center'>";echo $row["home_text"]; echo "</td>";
                    echo "<td align='center'>";?><a href="cms-home.update.php?id=<?php echo $row['cms_id'];?>"><i class="far fa-edit" style="color:#3498db"></i></a><?php echo "</td>";
                    echo "</tr>";
                  }
                  echo "</table>";

                ?>





          </div>
      </div>
      </div>
    </div>
  </body>
</html>
