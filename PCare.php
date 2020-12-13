<!DOCTYPE html>
<html>

<head>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <title> Product-Care page </title>
    <link rel="stylesheet" type="text/css" href="css1.css">
    <link rel="stylesheet" type="text/css" href="Pro-Best-Offer.CSS">

</head>

<body>


  <?php
    include ("Server.php");
    include("head.php");
    include("cart_func.php");
    ?>
    <hr> 
    
        
    <div>
        <div class="Product" style="=width: 1300px;align-content: middle">

            <div class="ProductBar">


                <h3 align="middle">
                    <font size=4> Products</font>
                </h3>
                <hr width="70%" align=middle style="padding-left: 20px ">
                <ul>
                    <li>
                        <a href="ProductPage.php" style="color: black">Makeup</a>
                    </li>
                        
                    <li>
                        <a href="PCare.php" style="color: black">Care</a>
                    </li>

                </ul>
            </div>
            
        <div class="ProductContain">
               <b><h3 align="middle">PRODUCTS > CARE</h3></b>

                   <div class="productdetail">
                  <figure>
                   <img src="image/c1.jpg" alt="Laneige"/>
                   <br/>
                   <figcaption align="middle"><b>LANEIGE</b><br/>Lip Sleeping Mask<br/><b>&euro;24.00</b><br/> 
                        <?php
                         echo '<br /><span class="button disp_item" id="35">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>   
                
                <div class="productdetail">
                  <figure>
                   <img src="image/c2.jpg" alt="Caudalie"/>
                   <br/>
                   <figcaption align="middle"><b>CAUDALIE</b><br/>Vinoperfect Radiance Serum<br/><b>&euro;89.00</b><br/> 
                        <?php
                         echo '<br /><span class="button disp_item" id="52">Add to cart</span>';
                    ?> 
                   </figcaption>
                   </figure>
                </div>      
                       
                <div class="productdetail">
                  <figure>
                   <img src="image/c3.jpg" alt="Joise Maran"/>
                   <br/>
                   <figcaption align="middle"><b>JOISE MARAN</b><br/>100 percent Pure Argan Oil<br/><b>&euro;60.00</b><br/> 
                        <?php
                         echo '<br /><span class="button disp_item" id="36">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>      
                
                 <div class="productdetail">
                  <figure>
                   <img src="image/DrunkSerum.jpg" alt="Drunk Elephant"/>
                   <br/>
                   <figcaption align="middle"><b>DRUNK ELEPHANT</b><br/>C-Firma Day Serum<br/>  <b>&euro;100.00</b><br/> 
                        <?php
                         echo '<br /><span class="button disp_item" id="14">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>
                
                <div class="productdetail">
                  <figure>
                   <img src="image/Tarte.jpg" alt="Tarte"/>
                   <br/>
                   <figcaption align="middle"><b>TARTE</b><br/>Pamper & Prep<br/><b>&euro;20.00</b><br/> 
                        <?php
                         echo '<br /><span class="button disp_item" id="3">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>
                
                 <div class="productdetail">
                  <figure>
                   <img src="image/tatchaWaterCream.jpg" alt="Tatcha"/>
                   <br/>
                   <figcaption align="middle"><b>TATCHA</b><br/>The Water Cream<br/><b>&euro;82.00</b><br/>
                        <?php
                         echo '<br /><span class="button disp_item" id="16">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>
                
                  <div class="productdetail">
                  <figure>
                       <img src="image/TheOrdinary.jpg" alt="Ordinary"/>
                    <figcaption align="middle"><b>THE ORDINARY</b><br/>Buffet<br/><b>&euro;14.80</b><br/>
                        <?php
                         echo '<br /><span class="button disp_item" id="17">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>
                
                 <div class="productdetail">
                  <figure>
                   <img src="image/Shiseido.jpg" alt="Shiseido"/>
                   <br/>
                    <figcaption align="middle"><b>SHISEIDO</b><br/>Lunar New Year Ultimune<br/><b>&euro;155.00</b><br/>
                        <?php
                         echo '<br /><span class="button disp_item" id="8">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>
                
                   
                 <div class="productdetail">
                  <figure>
                   <img src="image/Artist.jpg" alt="Artist"/>
                   <br/>
                    <figcaption align="middle"><b>ARTIST COUTURE</b><br/>Diamond Glow Powder<br/><del>&euro;40.00</del>      <b>&euro;35.00</b><br/>
                        <?php
                         echo '<br /><span class="button disp_item" id="9">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>
 
                   
                 <div class="productdetail">
                  <figure>
                   <img src="image/BeautyBlender.jpg" alt="BeautyBlender"/>
                   <br/>
                   <figcaption align="middle"><b>BEAUTY BLENDER</b><br/>Beauty Blush Cheeky<br/><b>&euro;22.00</b><br/>
                        <?php
                         echo '<br /><span class="button disp_item" id="10">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>
                
                <div class="productdetail">
                  <figure>
                   <img src="image/FreshHydration.jpg" alt="Fresh"/>
                   <br/>
                    <figcaption align="middle"><b>FRESH</b><br/>Rose Hydration Hotshots<br/><b>&euro;66.00</b><br/>
                        <?php
                         echo '<br /><span class="button disp_item" id="18">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>
                
                <div class="productdetail">
                  <figure>
                   <img src="image/orreee.jpg" alt="Olehenriksen"/>
                   <br/>
                    <figcaption align="middle"><b>OLEHENRIKSEN</b><br/>Truth Serum<br/><b>&euro;60.00</b><br/>
                        <?php
                         echo '<br /><span class="button disp_item" id="19">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>
 
 
                   
                    
                       
                     
                       

            
            
            
            
            </div>
        
            
           
            </div>
            
        
        <?php
    include("footer.php");
    ?>
    <html/>
        <?php include("newsalert.php");?>