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
    <h3>Your Search Result</h3>
    <?php
    $search = mysqli_real_escape_string($dbp,$_POST['hd']);
    $search_query="SELECT * FROM `Best Sellers` WHERE Name Like '%$search%'";
    $search_res= mysqli_query($dbp,$search_query);
    $search_item = mysqli_fetch_all($search_res);
     
        foreach($search_item as $item)
    {
        $ID=$item[0];
        $name=$item[1];
        $price=$item[2];
        $src=$item[3];
        echo <<<DISP
        <div class="productdetail">
                  <figure>
                     <img src="$src" />
                   <br/>
                      <figcaption align="middle"><b>$name</b><br/><br/><b>&euro;$price</b><br/>
                        <?php
                         echo '<br /><span class="button disp_item" id="$ID">Add to cart</span>
                    
                   </figcaption>
                   </figure>
                </div>
                
DISP;
    }
    ?>
    
    
    <?php
    include("footer.php");
    ?>
    <html/>
        <?php include("newsalert.php");?>