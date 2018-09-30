<?php
include 'includes/dbh.inc.php';
include_once 'header.php';
 ?>

      <section class="sec1">
          <?php
          $bg="SELECT * FROM cms";
          $res=mysqli_query($conn,$bg);

          while ($row=mysqli_fetch_array($res)) {
            ?>
              <style>
                .sec1{
                  background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('image/<?php echo $row["home_img"]; ?>');
                  text-transform: uppercase;
                }
              </style>
              <h1><?php echo $row["home_text"] ?></h1>
            <?php
          }

           ?>

      </section>
      <section class="about" style="background:url(image/zenstone.jpg) 50% 50% no-repeat;">
          <h1>Welcome to Zen Asia Spa</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </section>
      <section class="sec2" style="">
      </section>
      <section class="sec3">
              <h1>SERVICES</h1>
                <?php
                  $ser="SELECT * FROM service_category LIMIT 5 ";
                  $result=mysqli_query($conn,$ser);

                  while ($row=mysqli_fetch_array($result)) {
                      echo "<a href='service.php'><img id=img-circle src='image/".$row['category_img']."'></a>";
                      ?>
                        <style media="screen">
                          #img-circle{
                            width:150px;
                            height: 150px;
                            margin: 50px;
                            border: 1px solid #000;
                            border-radius: 10px;

                          }
                          #img-circle:hover{
                            transition: 300ms ease-in-out;
                            border-radius: 50%;
                          }
                          .sec3 h1{
                            text-align: center;
                            font-size: 40px;
                            padding-top: 20px;
                          }
                          .sec3{
                            width: 100%;
                            height: 50vh;
                            background-color: #b2bec3;
                          }


                        </style>

                      <?php

                  }
                 ?>

      </section>
      <section class="sec4">

      </section>

      <script type="text/javascript">
        $(window).on('scroll',function()
        {
          if ($(window).scrollTop()){
              $('nav').addClass('black');
        }else{
              $('nav').removeClass('black');
            }
        })
      </script>


  </body>
</html>
