    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
<!------ Include the above in your HEAD tag ---------->
<?php 

  $notValidData = false;
  if(isset($_GET["validData"])){
      $_GET["validData"] == false;
      $notValidData = true;
  }

  if(isset($_COOKIE["userType"]) && $_COOKIE["userType"] == "user"){
    header("Location: index.php");
  }

?>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img style="width:250px; height: 250px;" src="https://cdn4.iconfinder.com/data/icons/gray-user-management/512/login-512.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="signup.php" method="POST">
      <?php 
          if($notValidData){ ?>
            <div class="alert alert-warning">
              username already exists!
            </div>
        <?php } ?>

      <input type="text" id="signup" class="fadeIn second" name="signupUsername" placeholder="Signup username" required="required">
      <input type="text" id="password" class="fadeIn third" name="signupPassword" placeholder="password" required="required">
      <input type="submit" class="fadeIn fourth" value="Sign Up">
    </form>

    <div id="formFooter">
      <a class="underlineHover" href="loginForm.php">Back to login</a>
    </div>

  </div>
</div>