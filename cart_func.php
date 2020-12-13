<?php
    session_start();
    include("products.php");
    
    $action = (isset($_GET['action'])) ? $_GET['action']: ""; 
    switch($action)
    {
        case "additem":
           
            $itemid = (isset($_GET['itemid'])) ? $_GET['itemid']: "";
            if($itemid != "")
            {
                if($_SESSION['cart'] == "")
                {
                    $_SESSION['cart'] = array($products[$itemid]);
                } else {
                    array_push($_SESSION['cart'], $products[$itemid]);
                }
            }
            break;
        case "clearcart":
            $_SESSION['cart'] = "";
            break;
    }
    
    echo <<<DISP
    <html>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <meta http-equiv="X-UA-Compatible" content="IE=9" />
        <head>

            <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"> </script>
            <script type="text/javascript" language="javascript">
                $(function() {
                    $('.button1').mouseover(function() {
                        $(this).animate({opacity:1},200);
                    })
                    $('.disp_item').click(function() {
                        var itemid = $(this).attr("id");
                        var location = "cart.php?action=additem&itemid="+itemid;
                        window.location.href = location;
                    });
                    
                    $('#clearcart').click(function() {
                        window.location.href= "cart.php?action=clearcart";
                    });
                });
            </script>

        </head>
        <body>
DISP;
    
    ?>