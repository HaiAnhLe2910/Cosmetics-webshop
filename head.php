<div class="header">
        <ul>
            <li>
                <a href="cart.php">Bag</a>
            </li>
            <li>
                <a href="MyAccount.php">
                    <?php 
                        if (isset($_SESSION['EMAIL'])) {
                            echo "My Account";
  }
                    else{echo "Log In/Sign Up";}
                    ?>
                </a>
            </li>

        </ul>
    </div>

    <div class="heading">
        <h1>
            <a href="index.php">
                <font size="+5">
                    HEIDIBASKET
                </font>
            </a>
        </h1>
        <div class="searchbar">
            <form action="Search.php" method="post">
            <input type="text" name="hd" placeholder="Search">
            <button type="submit">Search</button>
            </form>
        </div>
    </div>



    <div class="navbar">

        <div class="grid-container-hp">

            <div class="grid-item-nav"><a href="about.php"> ABOUT </a></div>
            <div class="grid-item-nav">
                <div class="dropdown">
                    <span><a href="BSMakeUp.php">BEST SELLERS</a></span>
                    <div class="dropdown-content">
                        <a id="1st" href="BSMakeUp.php">Make Up</a>
                        <a id="2nd" href="BSCare.php">Care</a>
                    </div>
                </div>
            </div>
            <div class="grid-item-nav">
                <div class="dropdown">
                    <span><a href="ProductPage.php"> PRODUCTS</a> </span>
                    <div class="dropdown-content">
                        <a href="ProductPage.php">Make Up</a>
                        <a href="PCare.php">Care</a>
                    </div>
                </div>
            </div>
            <div class="grid-item-nav">
                <div class="dropdown">
                    <span><a href="ONew.php">OFFERS</a></span>
                    <div class="dropdown-content">
                        <a href="ONew.php">New</a>
                        <a href="OSale.php">Sale</a>
                    </div>
                </div>
            </div>
            <div class="grid-item-nav"><a href="service.php"> SERVICES</a></div>

        </div>


    </div>