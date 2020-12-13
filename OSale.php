<!DOCTYPE html>
<html>

<head>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <title> Offer-Sale page </title>
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
                    <font size=4> Offer</font>
                </h3>
                <hr width="60%" align=middle style=" ">
                <ul>
                    <li>
                        <a href="ONew.php" style="color: black">New</a>
                    </li>
                        
                    <li>
                        <a href="OSale.php" style="color: black">Sale</a>
                    </li>

                </ul>
            </div>
            
        <div class="ProductContain">
               <b><h3 align="middle">OFFER > SALE</h3></b>
                   <div class="productdetail">
                  <figure>
                   <img src="image/OriginSale.jpg" alt="Origins"/>
                   <br/>
                     <figcaption align="middle"><b>ORIGINS</b><br/>Ginger Greats<br/><del>&euro;75.00</del><br/>    <b>&euro;60.00</b><br/>
                        <?php
                         echo '<br /><span class="button disp_item" id="60">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>   
                
                <div class="productdetail">
                  <figure>
                   <img src="image/ConsonantSale.jpg" alt="Consonant"/>
                   <br/>
                     <figcaption align="middle"><b>CONSONANT</b><br/>Foaming Face Wash<br/><del>&euro;22.00</del><br/>    <b>&euro;10.00</b>
                        <?php
                         echo '<br /><span class="button disp_item" id="28">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>
                 
                       
                <div class="productdetail">
                  <figure>
                   <img src="image//CartierSale.jpg" alt="Cartier"/>
                   <br/>
                     <figcaption align="middle"><b>CARTIER</b><br/>Declaration<br/><del>&euro;129.00</del><br/> <b>&euro;77.00</b>
                        <?php
                         echo '<br /><span class="button disp_item" id="29">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>
                   
                
                 <div class="productdetail">
                  <figure>
                   <img src="image/UD.jpg" alt="Urban Decay"/>
                   <br/>
                     <figcaption align="middle"><b>URBAN DECAY</b><br/>Vice Lipstick Vintage<br/><del>&euro;21.00</del><br/> <b>&euro;14.00</b>
                        <?php
                         echo '<br /><span class="button disp_item" id="30">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>
                
               <div class="productdetail">
                  <figure>
                   <img src="image//RENSale.jpg" alt="Ren"/>
                   <br/>
                     <figcaption align="middle"><b>REN</b><br/>Pollution Proof Kit<br/><del>&euro;37.00</del><br/>  <b>&euro;33.00</b><br/>
                        <?php
                         echo '<br /><span class="button disp_item" id="31">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>
                
                 <div class="productdetail">
                  <figure>
                  <img src="image/GlamGlowSale.jpg" alt="Glamglow"/>
                   <br/>
                     <figcaption align="middle"><b>GLAMGLOW</b><br/>Poutmud Lip Balm<br/><del>&euro;24.00</del><br/>  <b>&euro;12.00</b><br/>
                        <?php
                         echo '<br /><span class="button disp_item" id="32">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>
                
                
                  <div class="productdetail">
                  <figure>
                  <img src="image/YSLSale.jpg" alt="YSL"/>
                   <br/>
                    <figcaption align="middle"><b>YVES SAINT LAURENT</b><br/>Volupte Tint-In-Oil<br/><del>&euro;36.00</del><br/>  <b>&euro;27.00</b><br/>
                        <?php
                         echo '<br /><span class="button disp_item" id="33">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>
                
                 <div class="productdetail">
                  <figure>
                   <img src="image/Cieta.jpg" alt="Cieta"/>
                   <br/>
                     <figcaption align="middle"><b>CIETA LONDON</b><br/>Chloe Morello Beauty<br/><del>&euro;59.00</del><br/>  <b>&euro;45.00</b><br/>
                        <?php
                         echo '<br /><span class="button disp_item" id="34">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>
                
                   
                 <div class="productdetail">
                  <figure>
                     <img src="image/KatVonDConcealersale.jpg" alt="KatVonDConcealer"/>
                   <br/>
                     <figcaption align="middle"><b>KAT VON D</b><br/>Lock-It Concealer<br/><del>&euro;31.00</del><br/> <b> &euro;19.00</b><br/>
                        <?php
                         echo '<br /><span class="button disp_item" id="51">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>
                   
                  <div class="productdetail">
                  <figure>
                     <img src="image/katvonDSa.jpg" alt="KatVonD"/>
                   <br/>
                     <figcaption align="middle"><b>KAT VON D</b><br/>Lock-It Color Primer<br/>
                         <del>&euro;33.00</del><br/>     <b>&euro;18.00</b><br/>
                        <?php
                         echo '<br /><span class="button disp_item" id="0">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>
                
                
               <div class="productdetail">
                  <figure>
                     <img src="image/SephoraSale.jpg" alt="Sephora"/>
                   <br/>
                      <figcaption align="middle"><b>SEPHORA COLLECTION</b><br/>Micellar Cleasing Water<br/><del>&euro;10.00</del><br/>   <b>&euro;6.00</b><br/>
                        <?php
                         echo '<br /><span class="button disp_item" id="1">Add to cart</span>';
                    ?>
                   </figcaption>
                   </figure>
                </div>
                
                <div class="productdetail">
                  <figure>
                     <img src="image/cliniqueSale.jpg" alt="Clinique"/>
                   <br/>
                      <figcaption align="middle"><b>CLINIQUE</b><br/>Merry & Brightening Set<br/><del>&euro;39.00</del>      <b>&euro;29.00</b><br/>
                        <?php
                         echo '<br /><span class="button disp_item" id="2">Add to cart</span>';
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