<?php 

  session_start(); 

  if (!isset($_SESSION['EMAIL'])) {
  	$_SESSION['msg'] = "You must register first";
  	header('location: MyAccount.php');
  }

  if (isset($_GET['logout'])) {
  	
  	unset($_SESSION['EMAIL']);
  	header("location: MyAccount.php");
  }
?>
<!DOCTYPE html>
<html>

<head>
  <title>LogInSuccess</title>
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <title> BestSellers-Care page </title>
  <link rel="stylesheet" type="text/css" href="css1.css">
  <link rel="stylesheet" type="text/css" href="Pro-Best-Offer.CSS">
</head>

<body>
  <?php
    include("head.php");
    include("cart_func.php");
?>
    <div class="header">
      <h2>Hello</h2>
    </div>
    <style type="Text/css">
      .container {
         width: 100%; padding-right: 15px; padding-left: 15px; margin: 20px; margin-right: auto; margin-left: auto; border: 1px solid black; } @media (min-width:
      576px) { .container { max-width: 540px; } } @media (min-width: 768px) { .container { max-width: 720px; } } @media (min-width:
      992px) { .container { max-width: 960px; } } @media (min-width: 1200px) { .container { max-width: 1140px; } }
      .d-flex{
        display: flex;
      }
      .justify-content-center {
        -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important;
      }
    </style>
    <div class="container">
      <!-- notification message -->
      <div class="d-flex justify-content-center">
      <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success">
        <h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
        </h3>
      </div>
      <?php endif ?>

      <!-- logged in user information -->
      <?php  if (isset($_SESSION['EMAIL'])) : ?>
      <p>Welcome
        <strong>
          <?php echo $_SESSION['EMAIL']; ?>
        </strong> to our site.</p>
      </div>
     
      <div class="d-flex justify-content-center">
      <button style="heigh: 30px; margin: 0 10px 30px 10px;">
        <a href="LogInSuccess.php?logout='1'" style="color:red">Logout</a>
      </button>
      </div>

      <?php endif ?>
    </div>
</body>

</html>
<?php
    include ("footer.php");
    include ("newsalert.php");
?>