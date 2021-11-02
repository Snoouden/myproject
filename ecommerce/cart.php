<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Djole Store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">  
 </head>
 <body>

    <div id="top"><!-- Top Begin -->
    
        <div class="container"><!-- container Begin -->

            <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
        
                      <a href="#" class="btn btn-success btn-sm">Welcome</a>
                      <a href="checkout.php">4 Item In Your Cart Shoopping | Cart Total price $300 </a>

            </div><!-- col-md-6 offer Finish --> 
               <div class="col-md-6"><!-- col-md-6 Begin -->
                     <ul class="menu"><!-- cmeni Begin -->
                             <li> 
                                    <a href="customer_register.php">Register</a>
                             </li>
                             <li>
                                    <a href="customer/my_account.php">My Account</a>
                             </li>
                             <li>
                                    <a href="cart.php">Go To Cart</a>
                             </li>
                             <li>
                                    <a href="checkout.php">Login</a>
                             </li>

                        </ul><!-- cmeni Finish -->
                 </div><!-- col-md-6 Finish --> 

        </div><!-- container Finish --> 
    </div><!-- Top Finish -->

    <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
    
         <div class="container"><!-- container Begin -->
         
             <div class="navbar-header"><!-- navbar-header Begin -->

                 <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->

                 <img src="images/e-commerce-logo.png" alt="Djole-Store Logo" class="hidden-xs">
                 <img src="images/e-commerce-logo-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs">

                </a><!-- navbar-brand home Finish -->
   
                 <buton class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                     <span class="sr-only">Toggle Navigation</span>

                     <i class="fa fa-align-justify"></i>

                </buton>

                 <buton class="navbar-toggle" data-toggle="collapse" data-target="#search">

                     <span class="sr-only">Toggle Search</span>

                     <i class="fa fa-search"></i>

                 </buton>

             </div><!-- navbar-header Finish -->
       
            <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->

                 <div class="padding-nav"><!-- padding-nav Begin -->
                  
                     <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->

                        <li>
                             <a href="index.php">Home</a>
                        </li> 
                        <li >
                             <a href="shop.php">Shop</a>
                        </li>
                        <li>
                             <a href="customer/my_account.php">My Account</a>
                        </li>
                        <li class="active">
                             <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                             <a href="contact.php">Contact Us</a>
                        </li>
            
                    </ul><!-- nav navbar-nav left Finish -->


                </div><!-- padding-nav Finish -->

                <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->


                 <i class="fa fa-shopping-cart"></i>

                 <span>4 Items In Your Cart</span>

                </a><!-- btn navbar-btn btn-primary  Finish -->

                <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begins -->

                 <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begins -->

                       <span class="sr-only">Toggle Search</span>

                       <i class="fa fa-search"></i>

                 </button><!-- btn btn-primary navbar-btn Finish-->

                </div><!-- navbar-collapse collapse right Finish -->

                <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin-->

                  <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->

                     <div class="input-group"><!-- input-group Begin -->

                        <input type="text" class="form-control" placeholder="Search" name="user_query" required>  

                        <span class="input-group-btn"><!-- input-group-btn Begin -->

                         <button type="submit" name="search" value="search" class="btn btn-primary"><!-- btn btn-primary Begin -->

                               <i class="fa fa-search"></i>

                         </button><!-- btn btn-primary Finish -->

                        </span><!-- input-group-btn Finish -->

                     </div><!-- input-group Finish -->

                  </form><!-- navbar-form Finish -->

                </div><!-- collapse clearfix Finish -->

            </div><!-- navbar-collapse collapse Finish -->

        </div><!-- container Finish -->

    </div><!-- navbar navbar-default Finish -->

    <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Cart
                   </li>
               </ul><!-- breadcrumb Finish -->
               
            </div><!-- col-md-12 Finish -->

            <div id="cart" class="col-md-9"><!-- col-md-12 Begin -->

                <div class="box"><!-- box Begin -->

                    <form action="cart.php" method="post" enctype="multipar/form-data"><!-- form Begin -->
                
                        <h1>Shopping Cart</h1>  
                        <p class="text-muted">You currently have 3 item(s) in your cart</p>
                        <div class="table-responsive"><!-- table-responsive Begin -->

                            <table class="table"><!-- table Begin -->

                                <thead><!-- thead Begin -->

                                    <tr><!-- tr Begin -->

                                        <th colspan="2">Product</th>
                                        <th>Product Memory</th>
                                        <th>Unit Price</th>
                                        <th>Product Storage</th>
                                        <th colspan="1">Delete</th>
                                        <th colspan="2">Sub-Total</th>

                                    </tr><!-- trFinish -->

                                </thead><!-- thead Finish -->

                                <tbody><!-- tbody Begin -->

                                    <tr><!-- tr Begin -->

                                        <td>

                                          <img class="img-responsive" src="admin_area/product_images/electronic/product01.png" alt="product01">

                                        </td>

                                        <td>

                                        <a href="#">Macbook Pro</a>
                                        </td>
                                        <td>

                                            16gb

                                        </td>
                                        <td>

                                            $3000

                                        </td>

                                        <td>

                                            512gb

                                        </td>

                                        <td>

                                            <input type="checkbox" name="remove[]">


                                        </td>

                                        <td>


                                            $3000

                                        </td>

                                    </tr><!-- trFinish -->

                                </tbody><!-- tbody Finish -->

                                <tbody><!-- tbody Begin -->

                                    <tr><!-- tr Begin -->

                                        <td>

                                          <img class="img-responsive" src="admin_area/product_images/mobile/product07.png" alt="product07">

                                        </td>

                                        <td>

                                        <a href="#">Samsung Galaxy s7</a>
                                        </td>
                                        <td>

                                            16gb

                                        </td>
                                        <td>

                                            $430

                                        </td>

                                        <td>

                                            256gb

                                        </td>

                                        <td>

                                            <input type="checkbox" name="remove[]">


                                        </td>

                                        <td>


                                            $430

                                        </td>

                                    </tr><!-- trFinish -->

                                </tbody><!-- tbody Finish -->

                                <tbody><!-- tbody Begin -->

                                    <tr><!-- tr Begin -->

                                        <td>

                                          <img class="img-responsive" src="admin_area/product_images/electronic/product03.png" alt="product03">

                                        </td>

                                        <td>

                                        <a href="#">Macbook Air</a>
                                        </td>
                                        <td>

                                            8gb

                                        </td>
                                        <td>

                                            $1300

                                        </td>

                                        <td>

                                            256gb

                                        </td>

                                        <td>

                                            <input type="checkbox" name="remove[]">


                                        </td>

                                        <td>


                                            $1300

                                        </td>

                                    </tr><!-- trFinish -->

                                </tbody><!-- tbody Finish -->

                                <tfoot><!-- tfoot Begin -->

                                    <tr><!-- tr Begin -->

                                        <th colspan="5">Total</th>
                                        <th colspan="2">$4730</th>

                                    </tr><!-- tr Finish -->

                                </tfoot><!-- tfoot Finish -->

                            </table><!-- table Finish -->


                        </div><!-- table-responsiveFinish -->  
                        
                        <div class="box-footer"><!-- box-footer Begin -->
                           
                           <div class="pull-left"><!-- pull-left Begin -->
                               
                               <a href="index.php" class="btn btn-default"><!-- btn btn-default Begin -->
                                   
                                   <i class="fa fa-chevron-left"></i> Continue Shopping
                                   
                               </a><!-- btn btn-default Finish -->
                               
                           </div><!-- pull-left Finish -->

                           <div class="pull-right"><!-- pull-right Begin -->
                               
                                <button type="submit" name="update" value="Update Cart" class="btn btn-default"><!-- btn btn-default Begin -->
                                   
                                   <i class="fa fa-refresh"></i> Update Cart
                                   
                                </button><!-- btn btn-default Finish -->

                                <a href="checkout.php" class="btn btn-primary">


                                    Proceed Checkout <i class="fa fa-chevron-right"></i>

                                </a>
                               
                           </div><!-- pull-right Finish -->

                        </div><!-- box-footer Finish -->
                
                    </form><!-- form Finish -->

                </div><!-- box Finish -->

                <div id="row same-heigh-row"><!-- same-heigh-row Begin -->
                         <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                                <div class="box same-height headline"><!-- box same-height headline Begin -->
                                 <h3 class="text-center">Product You Maybe Like</h3>
                             </div><!-- box same-height headline Finish -->
                         </div><!-- col-md-3 col-sm-6 Finish -->

                            <div class="col-md-3 col-sm-6 center-responsive"><!-- col md-3 col-sm-6 center-responsive Begin -->
                                <div class="product same-height"><!-- product same-height Begin -->
                                    <a href="details.php">
                                        <img class="img-responsive" src="admin_area/product_images/electronic/product02.png" alt="product02">
                                    </a>
                                    <div class="text"><!-- text Begin -->
                                        <h3><a href="details.php">Headphones</a></h3>

                                        <p class="price">$300</p>

                                    </div><!-- text Finish -->
                                </div><!-- product same-height Finish -->
                            </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                            <div class="col-md-3 col-sm-6 center-responsive"><!-- col md-3 col-sm-6 center-responsive Begin -->
                                <div class="product same-height"><!-- product same-height Begin -->
                                    <a href="details.php">
                                        <img class="img-responsive" src="admin_area/product_images/mobile/product04.png" alt="product05">
                                    </a>
                                    <div class="text"><!-- text Begin -->
                                        <h3><a href="details.php">Sony Tablet</a></h3>

                                        <p class="price">$200</p>

                                    </div><!-- text Finish -->
                                </div><!-- product same-height Finish -->
                            </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                            <div class="col-md-3 col-sm-6 center-responsive"><!-- col md-3 col-sm-6 center-responsive Begin -->
                                <div class="product same-height"><!-- product same-height Begin -->
                                    <a href="details.php">
                                        <img class="img-responsive" src="admin_area/product_images/mobile/product07.png" alt="product09">
                                    </a>
                                    <div class="text"><!-- text Begin -->
                                        <h3><a href="details.php">Samsung S7</a></h3>

                                        <p class="price">$430</p>

                                    </div><!-- text Finish -->
                                </div><!-- product same-height Finish -->
                            </div><!-- col md-3 col-sm-6 center-responsive Finish -->

                        </div><!-- same-heigh-row Finish -->

            </div><!-- col-md-12 Finish -->

            <div class="col-md-3"><!-- col-md-3 Begin -->

                <div id="order-summary" class="box"><!-- box Begin -->

                    <div class="box-header"><!-- box-header Begin -->

                        <h3>Order Summary</h3>

                    </div><!-- box-header Finish -->
                    
                    <p class="text-muted"><!-- text-muted Begin -->

                            Shipping and additional costs are calculated based on value you have entered

                    </p><!-- text-muted Finish -->

                    <div class="table-responsive"><!-- table-responsive Begin -->

                        <table class="table"><!-- table Begin -->

                            <tbody><!-- tbody Begin -->

                                <tr><!-- tr Begin -->

                                  <td> Order Sub-Total </td>
                                  <th> $4730 </th>

                                </tr><!-- tr Finish -->

                                <tr><!-- tr Begin -->

                                    <td> Shipping and Handling </td>
                                    <th> $50 </th>

                                </tr><!-- tr Finish -->

                                <tr><!-- tr Begin -->

                                    <td>Tax</td>
                                    <th>$20</th>

                                </tr><!-- tr Finish -->
                                
                                <tr class="total"><!-- tr Begin -->

                                    <td>Total</td>
                                    <td>$4800</td>

                                </tr><!-- tr Finish -->

                            </tbody><!-- tbody Finish -->

                        </table><!-- table Finish -->

                    </div><!-- table-responsive Finish -->

                </div><!-- box Finish -->               

            </div><!-- col-md-3 Finish -->
    
        </div><!-- container Finish -->
   </div><!-- #content Finish -->

    <?php
    
    include("includes/footer.php");
    
  
    ?>


         <script src="js/jquery-331.min.js"></script>
         <script src="js/bootstrap-337.min.js"></script>
 </body>
</html>


