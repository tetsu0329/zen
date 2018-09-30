<?php
include '../../includes/dbh.inc.php';
$id=$_GET['id'];
$stlist="SELECT * FROM service_category where category_id='$id'";
$res=mysqli_query($conn,$stlist);
$row=mysqli_fetch_assoc($res);
$old_img=$row['category_img'];
$old_name=$row['category_name'];
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


     <!--update image-->


      <div class="content">
          <h1>SERVICE CATEGORY</h1>
          <div id="box-manage">
              <div class="box-top">Update background Image</div>
              <div class="box-panel">
                <form class="" action="" method="post" enctype="multipart/form-data">
                  <table>
                    <tr>

                      <th>Image</th>
                      <td>
                        <img src="../../image/<?php echo $row['category_img'];?>" style="width:80px;height:60px">
                      </br>
                        <input type="file" name="bg"/>
                        <br><br>

                      </td>
                      <br><br>
                      <th>Name</th>
                      <td>
                        <h1><?php echo $row['category_name'];?></h1>
                        <br><br>
                      </br>
                        <input type="text" name="name" value="<?=$row['category_name'];?> ">
                        <br><br>
                        <input type="submit" name="update" value="UPDATE">
                        </td>
                    </tr>

                  </table>
                </form>


                <?php
                   if (isset($_POST['update'])) {
                     $name=$_POST['name'];

                     if (isset($_FILES['bg']['name']) && ($_FILES['bg']['name']!="")){
                         $size=$_FILES['bg']['size'];
                         $temp=$_FILES['bg']['tmp_name'];
                         $type=$_FILES['bg']['type'];
                         $servTName=$_FILES['bg']['name'];

                         move_uploaded_file($temp,"../../image /$servTName");
                       }
                       else{
                         $servTName=$old_img;
                       }

                       $update=mysqli_query($conn,"UPDATE service_category SET category_img='$servTName', category_name='$name' WHERE category_id='$id'");

                       if ($update) {
                         echo '<script>alert("data update successfully")</script>';
                         ?>
                           <script type="text/javascript">
                             window.location="service-category.php";

                           </script>
                         <?php
                       }
                       else{
                         echo "<script>alert('uploading failed')</script>";

                       }

                 }

                 ?>
              </div>
      </div>

<!---
      <div id="box">
          <div class="box-top">Update Text</div>
          <div class="box-panel">
            <form class="" action="" method="post" enctype="multipart/form-data">
              <table>
                <tr>
                  <th>Name</th>
                  <td>
                    <h1><?php echo $row['typeName'];?></h1>
                  </br>
                    <input type="text" name="name" value="<?=$row['typeName'];?> ">
                    <br><br>
                    <input type="submit" name="update_text" value="UPDATE">
                  </td>
                </tr>

              </table>
            </form>
            <?php
               if (isset($_POST['update_text'])) {
                   $txt=$_POST['name'];
                   $update=mysqli_query($conn,"UPDATE servicetype SET typeName='$txt'");
                   if ($update) {
                     echo '<script>alert("data update successfully")</script>';
                     ?>
                       <script type="text/javascript">
                         window.location="service-category.php";

                       </script>
                     <?php
                   }
                   else{
                     echo "<script>alert('uploading failed')</script>";
                   }

               }

             ?>
          </div>
     </div>
   -->
<!---update description
<div id="box">
    <div class="box-top">Update background Image</div>
    <div class="box-panel">
      <form class="" action="" method="post" enctype="multipart/form-data">
        <table>
          <tr>

            <th>Image</th>
            <td>
              <img src="../../image/<?php echo $row['home_img'];?>" style="width:80px;height:60px">
            </br>
              <input type="file" name="bg"/>
              <br><br>
              <input type="submit" name="update" value="UPDATE">
            </td>
          </tr>

        </table>
      </form>
      <?php
        /* if (isset($_POST['update'])) {

           if (isset($_FILES['bg']['name']) && ($_FILES['bg']['name']!="")){
               $size=$_FILES['bg']['size'];
               $temp=$_FILES['bg']['tmp_name'];
               $type=$_FILES['bg']['type'];
               $servTName=$_FILES['bg']['name'];

               unlink("../upload/$old_img");
               move_uploaded_file($temp,"../upload/$servTName");
             }
             else{
               $servTName=$old_img;
             }
             $update=mysqli_query($conn,"UPDATE cms SET home_img='$servTName'");

             if ($update) {
               echo '<script>alert("data update successfully")</script>';
               ?>
                 <script type="text/javascript">
                   window.location="cms-home.php";

                 </script>
               <?php
             }
             else{
               echo "<script>alert('uploading failed')</script>";

             }
         }
         */
       ?>
    </div>
</div>
---->


 </div>
 </div>
 </body>
 </html>
