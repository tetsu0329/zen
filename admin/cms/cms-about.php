

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
     <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
     <script src="../jquery/jquery-3.3.1.min.js"></script>
     <script src="../jquery/general.js">

     </script>
   </head>
   <body  onload="enableEditMode();">
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
           <h1>CONTENT MANANGEMENT | ABOUT</h1>
           <div id="box-manage">
               <div class="box-top">
                 <h1>ABOUT</h1>

               </div>
               <div class="box-panel">
                 <?php
                    $rs=mysqli_query($conn,"SELECT * FROM about");
                    $row=mysqli_fetch_array($rs)
                    ?>
                 <form class="" action="cms-about.php" method="post">

                        <textarea name="textAbout" rows="8" cols="500" id="editor" value="">


                               <?php echo $row['about_text']; ?>


                        </textarea>

                   <br>
                   <input type="submit" name="save" value="SAVE">
                 </form>

                  <?php
                    if (isset($_POST['save'])) {
                      $sql="UPDATE about SET about_text='$_POST[textAbout]'";
                      if(mysqli_query($conn,$sql)){
                        echo "<script>alert('Update successfully!')</script>";
                        ?>
                          <script type="text/javascript">
                            window.location="cms-about.php";

                          </script>
                        <?php
                      }

                    }

                   ?>

                 <script type="text/javascript">
                    ClassicEditor
                      .create(document.querySelector('#editor'))
                      .catch(error=>{
                        console.error(error);
                      });
                 </script>
       </div>
       </div>
     </div>
   </body>
 </html>
