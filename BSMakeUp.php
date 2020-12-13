<!DOCTYPE html>
<html>

<head>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <title> BestSellers-MakeUp page </title>
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
                    <font size=4> Bestsellers</font>
                </h3>
                <hr width="70%" align=middle style="padding-left: 20px ">
                <ul>
                    <li>
                        <a href="BSMakeUp.php" style="color: black">Makeup</a>
                    </li>
                    <li>
                        <a href="BSCare.php" style="color: black">Care</a>
                    </li>

                </ul>
            </div>

            
            <div class="ProductContain">
              <b><h3 align="middle">BEST SELLERS > MAKEUP</h3></b>
                <div class="productdetail">
                  <figure name="Kat">
                     <img src="image/KatVonDConcealersale.jpg" alt="KatVonDConcealer"/>
                   <br/>
                     <figcaption align="middle" >
                         <b>KAT VON D</b><br/>
                         Lock-It Concealer<br/>
                         <del>&euro;31.00</del><br/> 
                         <b> &euro;19.00</b><br/>
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

                <div class="productdetail">
                    <figure>
                        <img src="image/Tarte.jpg" alt="TARTE" />
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
                        <img src="image/TooFaced.jpg" alt="Too Faced" />
                        <br/>
                        <figcaption align="middle"><b>TOO FACED</b><br/>Crystal Lip Topper<br/><b>&euro;24.00</b><br/>
                            <?php
                         echo '<br /><span class="button disp_item" id="4">Add to cart</span>';
                    ?>
                        </figcaption>
                    </figure>
                </div>

                <div class="productdetail">
                    <figure>
                        <img src="image/Guerlain.jpg" alt="GUERLAIN" />
                        <br/>
                        <figcaption align="middle"><b>GUERLAIN</b><br/>KissKiss LoveLove Lipstick<br/>
                            <del>&euro;50.00</del><b>&euro;44.00</b><br/>
                            <?php
                         echo '<br /><span class="button disp_item" id="5">Add to cart</span>';
                    ?>
                        </figcaption>
                    </figure>
                </div>

                <div class="productdetail">
                    <figure>
                        <img src="image/Benefit.jpg" alt="BENEFIT" />
                        <br/>
                        <figcaption align="middle"><b>BENEFIT COSMETICS</b><br/>BADgal BANG! Mascara <br/><del>&euro;40.00</del>
                            <b>&euro;32.00</b><br/>
                            <?php
                         echo '<br /><span class="button disp_item" id="6">Add to cart</span>';
                    ?>
                        </figcaption>
                    </figure>
                </div>

                <div class="productdetail">
                    <figure>
                        <img src="image/Stella.jpg" alt="STELLA" />
                        <br/>
                        <figcaption align="middle"><b>STELLA MCCARTNEY</b><br/>Stella Peony<br/>
                            <b>&euro;85.00</b><br/>
                            <?php
                         echo '<br /><span class="button disp_item" id="7">Add to cart</span>';
                    ?>
                        </figcaption>
                    </figure>
                </div>

                <div class="productdetail">
                    <figure>
                        <img src="image/Shiseido.jpg" alt="Shideido" />
                        <br/>
                        <figcaption align="middle"><b>SHIDEIDO</b><br/>Lunar New Year Ultimune <br/> <b>&euro;155.00</b><br/>
                            <?php
                         echo '<br /><span class="button disp_item" id="8">Add to cart</span>';
                    ?>
                        </figcaption>
                    </figure>
                </div>

                <div class="productdetail">
                    <figure>
                        <img src="image/Artist.jpg" alt="ARTIST" />
                        <br/>
                        <figcaption align="middle"><b>ARTIST COUTURE</b><br/>Diamond Glow Powder <br/><del>&euro;40.00</del>
                            <b>&euro;35.00</b><br/>
                            <?php
                         echo '<br /><span class="button disp_item" id="9">Add to cart</span>';
                    ?>
                        </figcaption>
                    </figure>
                </div>

                <div class="productdetail">
                    <figure>
                        <img src="image/BeautyBlender.jpg" alt="Beauty Blender" />
                        <br/>
                        <figcaption align="middle"><b>BEAUTY BLENDER</b><br/>Beauty Blush Cheeky<br/> <b>&euro;22.00</b><br/>
                            <?php
                         echo '<br /><span class="button disp_item" id="10">Add to cart</span>';
                    ?>
                        </figcaption>
                    </figure>
                </div>
            </div>



        </div>
    </div>
    <?php
    include("footer.php");
    ?>
    <html/>
    <?php include("newsalert.php");?>