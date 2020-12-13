<?php
include ("Server.php");
if (!isset($_SESSION['EMAIL'])) {
  	$_SESSION['msg'] = "You have to log in";
  	header('location: LogInSuccess.php');
  }
?>
<!DOCTYPE html>
<html> 
<head>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <style>
       
       
    </style>
    <title> About Heidi Basket </title>
    <link rel="stylesheet" type="text/css" href="css1.css">

</head>
    
<body>

<?php
    include("head.php");
    include("cart_func.php");
    ?>   
  <hr>
    <div class="heading2nd">
        <h2>MY CART</h2>
    </div>
    
<div class="big">
    <div id="cart" class="block3 left border" >
        <?php
            $cart_total = 0;
            if($_SESSION['cart'] != '') {
                
                
            foreach($_SESSION['cart'] as $key => $value)
            {
                $cart_total = $cart_total + $value['Price'];
                $ID = $value['ID'];
                $name = $value['Name'];
                $price = $value['Price'];
                $image = $value['Image'];
                
                echo <<<DISP
                <div class="cartitem ">
            <img src="$image" width="100" height="100" align="left">
            <br/>
        <font align="right" size="+1">
            &emsp;&emsp;Name: $name<br/><br/>
            &emsp;&emsp;Price:&euro;$price<br/><br/>       
        </font>
        </div><hr><br>
DISP;
            }
                
            }
              
        echo '<br /><span class="button1" id="clearcart">Clear Cart</span>';
        ?>
   
    </div>
    <div id="child2" class="block4 right border" >
            Order summary<br/>
        <hr><br/>
            <?php
            echo "Cart total: &euro;".$cart_total; 
            ?>
            <br/><br/>
            Tax: <br/><br/>
            Shipment fee: <br/><br/>
        <hr><br/>
        Total:<?php
            echo "Cart total: &euro;".$cart_total; 
            ?> <br/><br/>
        
        
    </div>
</div> 
    
    
    <?php
    include("footer.php");
    ?>
        
        
    <script type="text/javascript" src="home.js"></script>
        

    </body>
</html>
<?php include("newsalert.php");?>