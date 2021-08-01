<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Capture - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
      div#colorlib-main {
        background: white;
      }
    </style>
  </head>
  <body>
    <?php
        include("../connection.php");
        $userLoggedIn = false;
    ?>

    <div id="colorlib-page">
      <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
      <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
      <h1 id="colorlib-logo"><a href="index.html"><span class="flaticon-camera"></span>Capture</a></h1>
      <?php 
        include("NavBar.php");

        if(!$userLoggedIn){
          header("Location: loginForm.php");
        }
      ?>
    </aside>
      <div id="colorlib-main">
        <section class="ftco-section bg-light ftco-bread">
        <div class="container">
          <div class="row no-gutters slider-text align-items-center">
            <div class="col-md-12 ftco-animate">
        <?php if(isset($_GET["addition"])){
            if($_GET["addition"] == 'true'){ ?>
          <div class="alert alert-success">
            <strong>Image added Successfully!</strong>
          </div>
        <?php }elseif($_GET["addition"] == 'false'){ ?>
          <div class="alert alert-danger">
            <strong>Error adding image!</strong>
          </div>
        <?php } }?>
        <a href="addImageForm.php" class="btn btn-primary btn-lg">Add New</a><br/><br/>
        <table class="list" cellpadding="5" cellspacing="2" border="2">
          <tr>
            <th>Image</th>
            <th>File Name</th>
          </tr>
          <?php

            $q = $db->query("SELECT 
              file_name
              FROM
              images
              ");

            if($q === false)
            { 
              die($db->error);
            }

            while ($row = $q->fetch_assoc()) { ?>
              <tr>
                <td><img height="250px" width="250px" src="<?= "../images/".$row['file_name']?>"</td>
                <td><?= $row['file_name']?></td>
                <td><a class="btn btn-danger" href="deleteImage.php?file_name=<?= $row['file_name']?>">Delete</a></td>
              </tr>
          <?php } ?>
        </table>
        </div>
          </div>
        </div>
      </section> 
      
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container px-md-5">
            <div class="row">
              <div class="col-md-12">
                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
              </div>
            </div>
        </div>
    </footer>
</div>

    </div>
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/jquery.timepicker.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>