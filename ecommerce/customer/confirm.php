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
                                    <a href="../customer_register.php">Register</a>
                             </li>
                             <li>
                                    <a href="my_account.php">My Account</a>
                             </li>
                             <li>
                                    <a href="../cart.php">Go To Cart</a>
                             </li>
                             <li>
                                    <a href="../checkout.php">Login</a>
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
                             <a href="../index.php">Home</a>
                        </li> 
                        <li>
                             <a href="../shop.php">Shop</a>
                        </li>
                        <li class="active">
                             <a href="my_account.php">My Account</a>
                        </li>
                        <li>
                             <a href="../cart.php">Shopping Cart</a>
                        </li>
                        <li>
                             <a href="../contact.php">Contact Us</a>
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
                       My Account
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->

              <?php 
    
              include("includes/sidebar.php");
    
           ?>
               
             </div><!-- col-md-3 Finish -->

             <div class="col-md-9"><!-- col-md-9 Begin -->

                <div class="box"><!-- box Begin -->

                    <h1 align="center">Please confirm you payment</h1>

                    <form action="confirm.php" method="post" enctype="multipart/form-data"><!-- form Begin -->

                             <div class="form-group"><!-- form-group Begin -->

                                    <label> Invoice No: </label>
                                    <input type="text" class="form-control" name="invoice_no" required>
                            

                            </div><!-- form-group Finish -->
                            
                            <div class="form-group"><!-- form-group Begin -->

                                 <label> Amount Sent: </label>
                                 <input type="text" class="form-control" name="invoice_no" required>


                            </div><!-- form-group Finish -->

                            <div class="form-group"><!-- form-group Begin -->

                                <label> Select Payment Method: </label>
                                <select name="select_payment_mode" class="form-control"><!-- select Begin -->

                                        <option> Select Payment Mode </option>
                                        <option> Back Code </option>
                                        <option> Paypal </option>
                                        <option> Payoner </option>
                                        <option> Western Union</option>

                                 </select><!-- select Finish -->

                             </div><!-- form-group Finish -->

                             <div class="form-group"><!-- form-group Begin -->

                                 <label> Transaction / Reference ID: </label>
                                 <input type="text" class="form-control" name="ref_no" required>


                            </div><!-- form-group Finish -->

                           

                            <div class="form-group"><!-- form-group Begin -->

                                 <label> Paypal / Payoner: </label>
                                 <input type="text" class="form-control" name="code" required>


                            </div><!-- form-group Finish -->

                            <div class="form-group"><!-- form-group Begin -->

                                 <label> Payment Date: </label>
                                 <input type="text" class="form-control" name="date" required>


                            </div><!-- form-group Finish -->

                            <div class="text-center"><!-- text-center Begin -->

                                 <button class="btn btn-primary btn-lg"><!-- btn btn-primary btn-lg Begin -->

                                        <i class="fa fa-user-md"></i> Confirm Payment

                                 </button><!-- btn btn-primary btn-lg Finish -->


                            </div><!-- form-group Finish -->
                
                     </form><!-- form Finish -->

                </div><!-- box Finish -->

             </div><!-- col-md-9 Finish -->

        </div><!-- container Finish -->
    </div><!-- #content Finish -->


   

<?php
    include("includes/footer.php");
?>
   <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>           
            