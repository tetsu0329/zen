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
                      <li><a href="">Types of Service</a></li>
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

<?php
$id=$_GET['id'];
$res="SELECT * FROM cms where cms_id='$id'";
$select=mysqli_query($conn,$res);
$row=mysqli_fetch_assoc($select);
$old_img=$row['home_img'];
 ?>

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
                   <img src="../../image/<?php echo $row['home_img'];?>" style="width:80px;height:60px">
                 </br>
                   <input type="file" name="bg"/>
                 </td>
               </tr>
               <tr>
                 <td>Description</td>
                 <td><textarea cols="40" rows="8" name="home_text"><?php echo $row['home_text']; ?></textarea></td>
               </tr>
               <tr>
                 <td><input type="submit" name="update" value="UPDATE"></td>
               </tr>

             </table>
           </form>
           <?php
              if (isset($_POST['update'])) {
                $homeText=$_POST['home_text'];
                if (isset($_FILES['bg']['name']) && ($_FILES['bg']['name']!="")){
                    $size=$_FILES['bg']['size'];
                    $temp=$_FILES['bg']['tmp_name'];
                    $type=$_FILES['bg']['type'];
                    $servTName=$_FILES['bg']['name'];

                    unlink("./background/$old_img");
                    move_uploaded_file($temp,"background/$servTName");
                  }
                  else{
                    $servTName=$old_img;
                  }
                  $update=mysqli_query($conn,"UPDATE cms SET home_img='$servTName', home_text='$homeText'");

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

            ?>
         </div>
 </div>





 </div>
</div>
</body>
</html>
