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
                  <li><a href="../cms/cms-home.php">Home</a></li>
                  <li><a href="">Services</a></li>
                  <li><a href="">Gallery</a></li>
                  <li><a href="../cms/cms-about.php">About Us</a></li>
                  <li><a href="">Contact</a></li>
                  <li><a href="">Testimonials</a></li>
                </ul>
            </li>
            <li><a href="">File Maintenance</a>
                <ul>
                  <li><a href="">Services</a>
                    <ul>
                      <li><a href="service-category.php">Category</a></li>
                      <li><a href="service.php">Services</a></li>
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
          <h1>SERVICE CATEGORY</h1>
          <div id="box-manage">
              <div class="box-top">Category</div>
              <div class="box-panel">
                <?php
                  $stlist="SELECT * FROM service_category";
                  $res=mysqli_query($conn,$stlist);

                  echo "<table border='1' width='100%'>";
                  echo "<tr>";
                  echo "<th height='50px'>"; echo "Image"; echo "</th>";
                  echo "<th>"; echo "Name"; echo "</th>";
                  echo "<th>"; echo "Description"; echo "</th>";


                  echo "</tr>";
                  while ($row=mysqli_fetch_array($res)) {
                    echo "<tr>";
                    echo "<td align='center'>"; ?><img src="../../image/<?php echo $row['category_img']; ?>" height="100px" width="150" style="padding:10px;"><?php echo "</td>";
                    echo "<td align='center'>";echo $row['category_name']; echo "</td>";
                    echo "<td width='50%' align='center'>";echo $row["category_desc"]; echo "</td>";
                    echo "<td align='center'>";?><a href="category-delete.php?id=<?php echo $row['category_id'];?>"><i class="fas fa-trash-alt" style="color:#3498db; width:50px; height:30px;" ></i></a><?php echo "</td>";
                    echo "<td align='center'>";?><a href="update.php?id=<?php echo $row['category_id'];?>"><i class="far fa-edit" style="color:#3498db; width:50px; height:30px;"></i></a><?php echo "</td>";
                    echo "</tr>";
                  }
                  echo "</table>";

                ?>
                  <button type="button" name="New" style="width:100px; padding:10px; margin:30px;"><a href="category.php">New</a></button>
              </div>
      </div>



      </div>
    </div>
  </body>
</html>












 <?php
 /*
     if (isset($_POST['add'])) {

       $categName = $_POST['categName'];
       $categDescrip = $_POST['categDescription'];

       $check="SELECT * FROM servicetype WHERE typeName='$categName'";
       $rs = mysqli_query($conn,$check);
       $data = mysqli_fetch_array($rs,MYSQLI_NUM);
       if ($data[0] > 1) {
       echo "<script type='text/javascript'> alert('Service Type Already in Exists')</script>";
       }
       else{
         $sql = "INSERT INTO servicetype VALUES('','$categName','$categDescrip')";
         if(mysqli_query($conn,$sql))
              {
               echo '<script>alert("New Service Type Added") </script>' ;
              }else {
                echo '<script>alert("Sorry ! Check The System") </script>' ;
              }
       }
       }
       */
   ?>
