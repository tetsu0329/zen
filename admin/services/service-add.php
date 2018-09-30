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
    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../jquery/general.js">

    </script>
  </head>
  <body>
    <div id="header">
      <div class="logo">
          <a href="dashboard.php"><img src="../image/zenlogo1.png" alt=""></a>
      </div>
      <ul>
      </ul>
    </div>
    <a href="#" class="mobile">MENU</a>

    <div class="container">
      <div class="sidebar">
          <ul id="nav">
            <li><a href="../admin/dashboard.php" class="selected">Dashboard</a></li>
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
                      <li><a href="../services/service-category.php">Category</a></li>
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
           <form class="" action="service-add.php" method="post">


           <table>
                     <tr>
                       <td>Name</td>
                       <td><input type="text" name="service_name"></td>
                     </tr>
                     <tr>
                         <td>Category</td>
                         <td>
                           <select name="category">
                            <?php
                            $opt="SELECT * FROM service_category";
                            $res=mysqli_query($conn,$opt);
                            //$row=mysqli_fetch_assoc($res);
                            while ($row=mysqli_fetch_array($res)) {
                              ?>
                                <option><?php echo $row['category_name'] ?><?php echo $row['category_id'] ?></option>
                              <?php
                            }
                             ?>

                         </select>
                       </td>
                     </tr>
                     <tr>
                       <td>Price</td>
                       <td><input type="text" name="service_price"></td>
                     </tr>
                     <tr>
                         <td>Service Image</td>
                         <td><input type="file" name="service_img"></td>
                     </tr>
                   <tr>
                     <td>Description</td>
                     <td><textarea cols="40" rows="8" name="service_desc"></textarea></td>
                   </tr>
                   <tr>
                     <td colspan="2" align="center"><input type="submit" name="submit" value="SAVE"></td>
                   </tr>
                   <tr>
                     <td colspan="2" align="center"><a href="service.php">Back</a></td>
                   </tr>

                   </table>


                   <?php
                   if (isset($_POST['submit'])) {

                     $name = $_POST['service_name'];
                     $category=$_POST['category'];
                     $desc = $_POST['service_desc'];
                     $img=$_POST['service_img'];
                     $price=$_POST['service_price'];




                     $check="SELECT * FROM service WHERE service_name='$name'";

                     $rs = mysqli_query($conn,$check);
                     $data = mysqli_fetch_array($rs,MYSQLI_NUM);
                     if ($data[0] > 1) {
                     echo "<script type='text/javascript'> alert('Service Type Already in Exists')</script>";

                     }
                     elseif (empty($name)||empty($img)) {
                         echo "<script type='text/javascript'> alert('Please fill up the form')</script>";
                     }
                     else{

                       $sql = "INSERT INTO service VALUES('','$category','$name','$price','$img','$desc', '$row[category_id]')";
                       if(mysqli_query($conn,$sql))
                            {
                             echo '<script>alert("New Service Type Added") </script>' ;

                             ?>
                             <script type="text/javascript">
                               window.location="service.php";

                             </script>

                             <?php

                            }else {
                              echo '<script>alert("Sorry ! Check The System") </script>' ;
                            }
                     }
                     }

                    ?>
                  </form>



         </div>
 </div>



 </div>
 </div>
 </body>
 </html>
