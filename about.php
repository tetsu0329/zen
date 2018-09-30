<?php
include_once 'header.php';
include 'includes/dbh.inc.php';
 ?>
 <section class="service" style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(image/spa2.jpg);">
   <?php
   $text="SELECT * FROM about";
   $res=mysqli_query($conn,$text);

   while($row=mysqli_fetch_array($res)){
     ?>
          <style media="screen">
            section.service{
              background-size: contain;

            }
            p{
              position: relative;
              top: 26%;
              left: 50%;
              transform: translate(-50%,-50%);
              line-height: 20px;
              letter-spacing:10px;
              color: #fff;
              font-size: 12px;
              font-weight: 400;
             font-family: 'Playfair Display', serif;
             text-align: left;
             padding: 0px;
             padding-left: 40px;
             padding-right: 50px;


            }
            h2{
              position: relative;
              top: 24%;
              left: 50%;
              transform: translate(-50%,-50%);
              color: #fff;
              text-align: center;
              padding-bottom: 10px;

            }

          </style>

         <p><?php echo $row["about_text"]; ?></p>

     <?php
   }

    ?>

 </section>
 <section>

 </section>
