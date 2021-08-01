      <!DOCTYPE html>
  <html lang="en">
  <head>
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

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</head>

<?php 

  if(isset($_COOKIE["userType"]) && $_COOKIE["userType"] == "user"){
      header("Location: index.php");
  }


  $notValidData = false;
  if(isset($_GET["validData"])){
      $_GET["validData"] == false;
      $notValidData = true;
  }

?>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <?php 
          if($notValidData){ ?>
            <div class="alert alert-danger">
              Invalid username or password
            </div>
        <?php } ?>

      <img style="width:250px; height: 250px;" src="https://cdn4.iconfinder.com/data/icons/gray-user-management/512/login-512.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="login.php" method="POST">
      
        
      <div class="search-box">
      <input type="text" id="login" class="fadeIn second" name="loginUsername" placeholder="Login username" required="required" autocomplete="off">
      <input type="password" id="password" class="fadeIn third" name="loginPassword" placeholder="password" required="required" autocomplete="off">
      <div class="result"></div>
      </div>
      <input type="submit" class="fadeIn fourth" value="Log In">

    </form>

    <a href="index.php" class="btn" style="background-color: #000; margin-bottom: 15px; margin-top: -15px;color:white;" >View as visitor</a>

    <div id="formFooter">
      <a class="underlineHover" href="signupForm.php">Sign Up</a>
    </div>

  </div>
</div>