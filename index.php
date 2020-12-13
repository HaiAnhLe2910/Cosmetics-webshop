<!DOCTYPE html>
<html> 
<head>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <style>
       
       
    </style>
    <title> Home page </title>
    <link rel="stylesheet" type="text/css" href="css1.css">
    
</head>
    
<body>

<?php
    include ("Server.php");
    include("head.php");
    include("cart_func.php");
    ?>

    <div class="hpnew">
        <div class="slide slide-right">
        <img src="image/n.png" width="1000">
        <div class="btnl" title="Make up"><a href="ProductPage.php"></a></div>
        <div class="btnr" title="Care"><a href="PCare.php"></a></div>
        </div>
        <div class="slide slide-right">
            <img src="image/BEST-KOREAN-ESSENCE-1.jpg" width="1000" height="537">
        </div>
        
        <div class="slide slide-right">
            <img src="image/simplify-your-beauty-routine.jpeg" width="1000" height="537">
        </div>
    </div>
    <div class="hpoffer">
        <h3> <b><font size="+3">OFFER</font></b></h3>
        <button class="button-slide display-left" onclick="plusDivs(-1)">
            &#10094;</button>
        <button class="button-slide display-right" onclick="plusDivs(1)">
            &#10095;
        </button>
    <div class="grid-container-hp" >
        
        <div class="grid-item-o">
            <img src="image/o5.png" width="240" height="360">
            <br/>
            <b>IN-NUDE-ENDO</b><br/>
            Highlighter Palette<br>
            $18.00<br/>
            <?php
                         echo '<br /><span class="button-buy disp_item" id="46">Add to cart</span>';
                    ?>
        </div>
        <div class="grid-item-o">
            <img src="image/o1.png" width="240" height="360">
            <br/>
            <b>DEW DROP</b><br/>
            Loose Highlighter<br>
            <del>$7.00</del>&emsp;$5.00<br/>
            <?php
                         echo '<br /><span class="button-buy disp_item" id="47">Add to cart</span>';
                    ?>
        </div>       
        <div class="grid-item-o">
            <img src="image/o5.png" width="240" height="360">
            <br/>
            <b>IN-NUDE-ENDO-1</b><br/>
            Highlighter Palette<br>
            $18.00<br/>
            <?php
                         echo '<br /><span class="button-buy disp_item" id="46">Add to cart</span>';
                    ?>
        </div>
        <div class="grid-item-o">
            <img src="image/o2.png" width="240" height="360">
            <br/>
            <b>AURA VOIR</b><br/>
            Loose Highlighter<br>
            <del>$7.00</del>&emsp;$5.00<br/>
            <?php
                         echo '<br /><span class="button-buy disp_item" id="48">Add to cart</span>';
                    ?>
        </div>  
        <div class="grid-item-o">
            <img src="image/o5.png" width="240" height="360">
            <br/>
            <b>IN-NUDE-ENDO-2</b><br/>
            Highlighter Palette<br>
            $18.00<br/>
            <?php
                         echo '<br /><span class="button-buy disp_item" id="46">Add to cart</span>';
                    ?>
        </div>
        <div class="grid-item-o">
            <img src="image/o3.png" width="240" height="360">
            <br/>
            <b>GIVE IT TO ME STRAIGHT</b><br/>
            Pressed Powder Shadow Palette<br>
            $16.00<br/>
            <?php
                         echo '<br /><span class="button-buy disp_item" id="49">Add to cart</span>';
                    ?>
        </div>        
        <div class="grid-item-o">
            <img src="image/o5.png" width="240" height="360">
            <br/>
            <b>IN-NUDE-ENDO-3</b><br/>
            Highlighter Palette<br>
            $18.00<br/>
            <?php
                         echo '<br /><span class="button-buy disp_item" id="46">Add to cart</span>';
                    ?>
        </div>
        <div class="grid-item-o"> 
            <img src="image/o4.png" width="240" height="360">
            <br/>
            <b>FRICK N' FRACK</b><br/>
            Ultra Satin Lip<br>
            $6.50<br/>
            <?php
                         echo '<br /><span class="button-buy disp_item" id="50">Add to cart</span>';
                    ?>
        </div>
        <div class="grid-item-o">
            <img src="image/o5.png" width="240" height="360">
            <br/>
            <b>IN-NUDE-ENDO-4</b><br/>
            Highlighter Palette<br>
            $18.00<br/>
            <?php
                         echo '<br /><span class="button-buy disp_item" id="46">Add to cart</span>';
                    ?>
        </div>
        
        </div>
        
        
    
    </div>
    <div class="hpbest">
        <h3 align = "middle">
            <b><font size="+3">BEST SELLERS</font></b>
        </h3>
        
    <div class="grid-container">
        <div class="grid-item-b">
            <img src="image/b1.png" width="350" height="350">
        </div>
        <div class="grid-item-b">
            <img src="image/b2.png" width="500" height="350">
        </div>
        <div class="grid-item-b">
            <img src="image/b3.png" width="350" height="350">
        </div>
    </div>
        
    </div>
    
    
    
    
    
    
<!--
    <div class="end">
        
         
          
        <table >
            
            <tr>
                <td align="left" >
                    <font color="white" size="+1">
                        Sign up for our newsletter
                    </font>
                </td>
                
                <td><a href="about.html">About us</a></td>
                
                <td><a href="MyAccount.html">My account</a></td>
                
                <td align="left">
                    <font color="white" size="+1">Follow us</font>
                </td>
            </tr>
            <tr>
                <td align="left">
                    <input type="text" name = "email" placeholder="Email">
                </td>
                
                <td><a href="service.html#contact">Contact us</a></td>
                
                <td>
                    <a href="service.html#ship">Shipping info</a>
                </td>
                
                <td align="left">
                    <font color="white" size="+1">
                        facebook _ twitter_ logo
                    </font>
                </td>
            </tr>
            <tr>
                <td align="left">
                    <font color="white" size="+1"></font>
                </td>
                <td><a href="service.html#FAQ">FAQ</a></td>
                <td><a href="service.html">Services</a></td>
            </tr>
        </table>
        <br/>
        <br/>
        <br/>
    <font color="white" size="+1">
        Copyright &copy;2018 Heidi Basket inc.All right reserved.
    </font>
    </div>
-->
    
    
    
    <script type="text/javascript" src="home.js"></script>
<body/> 
<?php
    include("footer.php");
    ?>
<html/>
<?php include("newsalert.php");?>