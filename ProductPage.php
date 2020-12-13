<!DOCTYPE html>
<html>
<head>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>    
    <title> Product-MakeUp page </title>
    <link rel="stylesheet" type="text/css" href="css1.css">
    <link rel="stylesheet" type="text/css" href="Pro-Best-Offer.CSS">
    <style text="text/css">
        .Page, .Page
        {
            display: none;
        }
        .Show
        {
         display: block;   
        }
    </style>

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
                <b><h3 align="middle">PRODUCTS > MAKEUP</h3></b>
                
            <div class="Page Show">                
                <div class="productdetail">
                    <figure>
                        <img src="image/Katvond.jpg" alt="Kat Von D" />
                        <br/>
                        <figcaption align="middle"><b>KAT VON D</b><br/>Studded Kiss Creme Lipstick<br/><b>&euro;23.00</b><br/>
                            <?php
                         echo '<br /><span class="button disp_item" id="53">Add to cart</span>';
                    ?>
                        </figcaption>
                    </figure>
                </div>
                <div class="productdetail">
                    <figure>
                        <img src="image/BiteBeauty.jpg" alt="Bite beauty" />
                        <br/>
                        <figcaption align="middle"><b>BITE BEAUTY</b><br/>High Pigment Pencil<br/><b>&euro;17.00</b><br/>
                            <?php
                         echo '<br /><span class="button disp_item" id="37">Add to cart</span>';
                    ?>
                        </figcaption>
                    </figure>
                </div>
                <div class="productdetail">
                    <figure>
                        <img src="image/CHLOE.jpg" alt="CHOLE" />
                        <br/>
                        <figcaption align="middle"><b>CHOLE</b><br/>Roses De Chloe<br/><b>&euro;57.00</b><br/>
                            <?php
                         echo '<br /><span class="button disp_item" id="22">Add to cart</span>';
                    ?>
                        </figcaption>
                    </figure>
                </div>
                <div class="productdetail">
                    <figure>
                        <img src="image/WanderBeauty.jpg" alt="Wander Beauty" />
                        <br/>
                        <figcaption align="middle"><b>WANDER BEAUTY</b><br/>Wanderout Dual Lipsticks<br/>
                            <del>&euro;36.00</del>   <b>&euro;29.00</b><br/>
                            <?php
                         echo '<br /><span class="button disp_item" id="23">Add to cart</span>';
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
                            <del>&euro;50.00</del>   <b>&euro;44.00</b><br/>
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
                
        <div class="Page">        
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
            <div class="productdetail">
                    <figure>
                        <img src="image/UDPage2ProductMU.jpg" alt="Urban Decay" />
                        <br/>
                        <figcaption align="middle"><b>URBAN DECAY</b><br/>Backtalk Eye & Face Palette<br/><b>&euro;59.00</b><br/>
                            <?php
                         echo '<br /><span class="button disp_item" id="38">Add to cart</span>';
                    ?>
                        </figcaption>
                    </figure>
                </div>
                <div class="productdetail">
                    <figure>
                        <img src="image/Natasha.jpg" alt="Natasha Denova" />
                        <br/>
                        <figcaption align="middle"><b>NATASHA DENOVA</b><br/>Tropic Eyeshadow Palette<br/><b>&euro;162.00</b><br/>
                            <?php
                         echo '<br /><span class="button disp_item" id="39">Add to cart</span>';
                    ?>
                        </figcaption>
                    </figure>
                </div>
                <div class="productdetail">
                    <figure>
                        <img src="image/BenefitPage2MK.jpg" alt="Benefit cosmetic" />
                        <br/>
                        <figcaption align="middle"><b>BENEFIT COSMETICS</b><br/>Blush Bar Cheek Palette<br/><b>&euro;78.00</b><br/>
                            <?php
                         echo '<br /><span class="button disp_item" id="40">Add to cart</span>';
                    ?>
                        </figcaption>
                    </figure>
                </div>
                <div class="productdetail">
                    <figure>
                        <img src="image/toofacedPage2MK.jpg" alt="Too Faced" />
                        <br/>
                        <figcaption align="middle"><b>TOO FACED</b><br/>Festival Eye Shadow Palette<br/>
                             <b>&euro;52.00</b><br/>
                            <?php
                         echo '<br /><span class="button disp_item" id="41">Add to cart</span>';
                    ?>
                        </figcaption>
                    </figure>
                </div>

                <div class="productdetail">
                    <figure>
                        <img src="image/CoverFX.jpg" alt="Cover Fx" />
                        <br/>
                        <figcaption align="middle"><b>COVER FX</b><br/>Power Play Foundation<br/><b>&euro;52.00</b><br/>
                            <?php
                         echo '<br /><span class="button disp_item" id="42">Add to cart</span>';
                    ?>
                        </figcaption>
                    </figure>
                </div>


                <div class="productdetail">
                    <figure>
                        <img src="image/BeccaMKPage2.jpg" alt="Becca" />
                        <br/>
                        <figcaption align="middle"><b>BECCA</b><br/>Ocean Jewels Highlighter<br/><b>&euro;55.00</b><br/>
                            <?php
                         echo '<br /><span class="button disp_item" id="43">Add to cart</span>';
                    ?>
                        </figcaption>
                    </figure>
                </div>

                <div class="productdetail">
                    <figure>
                        <img src="image/TFPage2.jpg" alt="Tom Ford" />
                        <br/>
                        <figcaption align="middle"><b>TOM FORD</b><br/>Ultra Shine Lip Color<br/>
                              <b>&euro;70.00</b><br/>
                            <?php
                         echo '<br /><span class="button disp_item" id="44">Add to cart</span>';
                    ?>
                        </figcaption>
                    </figure>
                </div>

                <div class="productdetail">
                    <figure>
                        <img src="image/LauraP2.jpg" alt="Laura Mercier" />
                        <br/>
                        <figcaption align="middle"><b>LAURA MERCIER</b><br/>Flawless Fusion Concealer <br/>
                        <b>&euro;36.00</b><br/>
                            <?php
                         echo '<br /><span class="button disp_item" id="45">Add to cart</span>';
                    ?>
                        </figcaption>
                    </figure>
                </div>

            </div>
               <div class="pagination">
                      <a href="#">&laquo;</a>
                      <span onclick="pageHandler(0)"><a class="paginations active">1</a></span>
                      <span onclick="pageHandler(1)"><a class="paginations">2</a></span>
                      <a href="#">&raquo;</a>
              </div>
  
        </div>    
 
    </div>
</div>
    
    <?php
    include("footer.php");
    ?>
    <html/>
    
    <script>
        var a = document.getElementsByClassName("Page");
        var b = document.getElementsByClassName("paginations");

        function pageHandler(n)
        {
            for(i = 0;i<2;i++)
                {
                    a[i].classList.remove("Show");
                    b[i].classList.remove("active");
                    
                }
            a[n].classList.add("Show");
            b[n].classList.add("active");
        }
    </script>
    <?php include("newsalert.php");?>