 <?php require 'common.php';
      $someVar=$_SESSION['user_id'];
?>   
<!DOCTYPE html>
<html>
    <head>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="index.css" rel="stylesheet">
    	 <title>Lifestyle Store</title>
    </head>
    <body>
    	  <?php 
       include 'header.php';
        include 'check_if_added.php';
       ?>
      <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                 <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>   
                 <div class="row text-center">
                    <div class="col-mod-3 col-sm-3">
                        <img src="https://static.toiimg.com/photo/54752609/Fujifilm-FinePix-S700-Bridge-Camera.jpg" class="img-thumbnail" alt="Cinque Terre"  style="width:100%">
                        <b style="font-size: 20px;">Cannon EOS</b>
                        <p style="font-size: 15px;">Price Rs:30000.00</p>
                       <?php 
                      
                       if (!isset($_SESSION['email'])) { ?>
                        <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                         <?php } 
                         else { 
                            if (check_if_added_to_cart(1)) 
                                {  ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php ; 
                                }
                            else { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php }

                             } ?>
                      </div>
                    <div class="col-mod-3 col-sm-3">
                        <img src="https://cdn1.smartprix.com/rx-in8tBKT0A-w240-h290/nikon-d3500-dslr-cam.jpg" class="img-thumbnail" alt="Cinque Terre"  style="width:100%;">
                        <b style="font-size: 20px;">Sony DSLR</b>
                        <p style="font-size: 15px;">Price Rs:40000.00</p>
                        <?php
                         if (!isset($_SESSION['email'])) { ?>
                        <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                         <?php } 
                         else { 
                            if (check_if_added_to_cart(2)) 
                                {  ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php ; 
                                }
                            else { ?> <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                        </div>
                    <div class="col-mod-3 col-sm-3">
                        <img src="https://cdn.shopify.com/s/files/1/1034/1611/products/kodak_rodomaticyl_printomatic_instant_print_camera_yellow_1505490352000_1362807_medium.jpg?v=1509672679" class="img-thumbnail" alt="Cinque Terre"  style="width:100%">
                        <b style="font-size: 20px;">Sony DSLR</b>
                        <p style="font-size: 15px;">Price Rs:35000.00</p>
                        <?php
                         if (!isset($_SESSION['email'])) { ?>
                        <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                         <?php } 
                         else { 
                            if (check_if_added_to_cart(3)) 
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php ; 
                                }
                            else { ?> <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>

                    <div class="col-mod-3 col-sm-3">
                        <img src="https://cdn1.smartprix.com/rx-iXSGVUXtU-w240-h290/fujifilm-finepix-s82.jpg" class="img-thumbnail" alt="Cinque Terre"  style="width:100%">
                        <b style="font-size: 20px;">Olympus DSLR</b>
                        <p style="font-size: 15px;">Price Rs:60000.00</p>
                        <?php 
                        if (!isset($_SESSION['email'])) { ?>
                        <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                         <?php } 
                         else { 
                            if (check_if_added_to_cart(4)) 
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a> <?php ; 
                                }
                            else { ?> <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                        
                </div>

                 <div class="row text-center space">
                    <div class="col-mod-3 col-sm-3">
                        <img src="shirt.jpg" class="img-thumbnail" alt="Cinque Terre"  style="width:100%">
                        <b style="font-size: 20px;">H&W </b>
                        <p style="font-size: 15px;">Price Rs:1000.00</p>
                        <?php 
                        if (!isset($_SESSION['email'])) { ?>
                        <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                         <?php } 
                         else { 
                            if (check_if_added_to_cart(5)) 
                                { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php ; 
                                }
                            else { ?> <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                    <div class="col-mod-3 col-sm-3">
                        <img src="shirt1.jpg" class="img-thumbnail" alt="Cinque Terre"  style="width:100%;">
                        <b style="font-size: 20px;">Luis Phil</b>
                        <p style="font-size: 15px;">Price Rs:800.00</p>
                        <?php
                        if (!isset($_SESSION['email'])) { ?>
                        <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                         <?php } 
                         else { 
                            if (check_if_added_to_cart(6)) 
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php ; 
                                }
                            else { ?> <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                    <div class="col-mod-3 col-sm-3">
                        <img src="shirt2.jpg" class="img-thumbnail" alt="Cinque Terre"  style="width:100%">
                        <b style="font-size: 20px;">John Zok</b>
                        <p style="font-size: 15px;">Price Rs:1500.00</p>
                        <?php
                         if (!isset($_SESSION['email'])) { ?>
                        <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                         <?php } 
                         else { 
                            if (check_if_added_to_cart(7)) 
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php ; 
                                }
                            else { ?> <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>

                    <div class="col-mod-3 col-sm-3">
                        <img src="shirt3.jpg" class="img-thumbnail" alt="Cinque Terre"  style="width:100%">
                        <b style="font-size: 20px;">Jhalsani</b>
                        <p style="font-size: 15px;">Price Rs:1300.00</p>
                        <?php 
                        if (!isset($_SESSION['email'])) { ?>
                        <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                         <?php } 
                         else { 
                            if (check_if_added_to_cart(8)) 
                                { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php ; 
                                }
                            else { ?> <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                        
                </div>

                 <div class="row text-center space">
                    <div class="col-mod-3 col-sm-3">
                        <img src="watch.jpg" class="img-thumbnail" alt="Cinque Terre"  style="width:100%">
                        <b style="font-size: 20px;">Titan Model#301</b>
                        <p style="font-size: 15px;">Price Rs:13000.00</p>
                        <?php 
                        if (!isset($_SESSION['email'])) { ?>
                        <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                         <?php } 
                         else { 
                            if (check_if_added_to_cart(9)) 
                                { ?> <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php ; 
                                }
                            else { ?> <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                    <div class="col-mod-3 col-sm-3">
                        <img src="watch3.jpg" class="img-thumbnail" alt="Cinque Terre"  style="width:100%;">
                        <b style="font-size: 20px;">Titan Model #210</b>
                        <p style="font-size: 15px;">Price Rs:1000.00</p>
                        <?php 
                        if (!isset($_SESSION['email'])) { ?>
                        <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                         <?php } 
                         else { 
                            if (check_if_added_to_cart(10)) 
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php ; 
                                }
                            else { ?> <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                    <div class="col-mod-3 col-sm-3">
                        <img src="watch1.jpg" class="img-thumbnail" alt="Cinque Terre"  style="width:100%">
                        <b style="font-size: 20px;">HMT Milan</b>
                        <p style="font-size: 15px;">Price Rs:8000.00</p>
                        <?php
                         if (!isset($_SESSION['email'])) { ?>
                        <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                         <?php } 
                         else { 
                            if (check_if_added_to_cart(11)) 
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php ; 
                                }
                            else { ?> <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>

                    <div class="col-mod-3 col-sm-3 ">
                        <img src="watch2.jpg" class="img-thumbnail" alt="Cinque Terre"  style="width:100%">
                        <b style="font-size: 20px;">Faber Luba #111</b>
                        <p style="font-size: 15px;">Price Rs:18000.00</p>
                        <?php 
                        if (!isset($_SESSION['email'])) { ?>
                        <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                         <?php } 
                         else { 
                            if (check_if_added_to_cart(12)) 
                                { ?><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php ; 
                                }
                            else { ?> <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                        
                </div>
            </div>
        </div>

         <footer>
        <div class="container">
       <center> <p>Copyright© Lifestyle Store.All Rights Reserved | Contact Us: +91 90000 00000</p>
        </div>
      </footer>

    </body>
    </html>
