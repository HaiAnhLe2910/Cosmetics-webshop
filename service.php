<!DOCTYPE html>
<html> 
<head>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <style>
       
       
    </style>
    <title> Services </title>
    <link rel="stylesheet" type="text/css" href="css1.css">
</head>
    
<body>

<?php
    include ("Server.php");
    include("head.php");
    include("cart_func.php");
    ?>
    <hr>
    <div class="heading2nd">
        
        <h2>SERVICES</h2>
    </div>
    
<div class="big">
    <div id="child1" class="block1" >        
        <font>
           <b>Services</b>  <BR/>
            <hr width="70%">
            <a href="#contact"> Contact Us</a>
            <a href="#FAQ">FAQ</a> 
            <a href="#ship">Shipping</a>
        </font>
    </div>
    <div id="child2" class="block2 left" >
        
        <H3 id="contact"><font size="+2">Contact us</font></H3>
        <br/>
        
        <style type="text/css">
            label{
                width:100px !important;
                padding: 4px 5px;
                float: left;
            }
            input{
                width:160px !important;
                float: left;
            }
        </style>
        
        If you have any questions, feel free to contact us<br/>
        <form action="ContactForm.php" method="post">
        <label for ="e">Email: </label>
        <input  class="tb" type="email" name="e" value="">
        <div style="clear:both"></div>
        <label for ="f">Full name: </label>
        <input class="tb" type="text" name="n" value="">
        <div style="clear:both"></div>
        <label for ="a">Address: </label>
        <input class="tb" type="text" name ="a" value="">
        <div style="clear:both"></div>
        <label for ="c">Content: </label>
        <input class="tb" type="text" name ="a" value="">
        <br/>
        <div style="clear:both"></div>
        <input type="submit" value="Submit">
        <div style="clear:both"></div>
        <hr> 
        </form>      
    
        <H3 id="FAQ"><font size="+2">FAQ</font></H3>
        <br/>
        
        <font align="right">
            Q:What if the product of my choice is not in stock?<br/><br/>
            A:Items that are not in stock can not be ordered at that time, unless it is marked as a presale item. These can be ordered in advance. Unfortunately, we do not know when articles are available again when they are reordered. We apologize for the inconvenience. <br/><br/>
            Q: How do I return an item?<br/><br/>
            A: You can't.<br/><br/>
            Q:Why is my order still being processed?<br/>
            A:Your order can still be marked as "in process" or there may have been a deviation in our inventory, causing the shipment to be delayed. Occasionally it can happen that it takes two days before an order is processed. <br/><br/><br/>
            <hr>       
        </font>
        
        <H3 id="ship"><font size="+2">Shipping info</font></H3>
        <br/>
        <font align="right">
            <b>To the Netherlands</b><br/><br/>
            The Products will be shipped via PostNL, which is bound by the following delivery term: <br/>
- Standard delivery: 2 to 4 working days. <br/>
- Sundays and holidays are not included as working days. <br/><br/>

The order is in any case fulfilled within a period of thirty (30) days from the day following that on which the consumer has submitted the order, subject to full payment of the price. <br/><br/>
            
            <b>International</b><br/><br/>
            <b>To the Netherlands</b><br/><br/>
            The Products will be shipped via UPS, which is bound by the following delivery term: <br/>
- Standard delivery: 2 to 4 working days. <br/>
- Sundays and holidays are not included as working days. <br/><br/>

The order is in any case fulfilled within a period of thirty (30) days from the day following that on which the consumer has submitted the order, subject to full payment of the price. <br/><br/>
            
                   
        </font>
        
        
        
        
        
    </div>
</div> 
    
    
<body/> 
<?php
    include("footer.php");
    ?>
<html/>
<?php include("newsalert.php");?>