<?php
    include("header-footer.php");
  ?>

<div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Shop
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
    <?php 
    
     include("includes/sidebar.php");
    
    ?>
               
             </div><!-- col-md-3 Finish -->
           
                 <div class="col-md-9"><!-- col-md-9 Begin -->
                     <div id="productMain" class="row"><!-- row Begin -->
                         <div class="col-sm-6"><!-- col-sm-6 Begin -->
                             <div id="mainImage"><!-- mainImage-3 Begin -->
                                 <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Begin -->
                                     <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                                         <li data-target="#myCarousel" data-slide-to="0"  class="active"></li>
                                         <li data-target="#myCarousel" data-slide="1"></li>
                                         <li data-target="#myCarousel" data-slide="2"></li>
                                     </ol><!-- carousel-indicators Finish -->

                                        <div class="carousel-inner">
                                            <div class="item active">
                                              <center><img class="img-responsive" src="admin_area/product_images/electronic/product01.png" alt="product01a"></center>
                                            </div>
                                            <div class="item">
                                                <center><img class="img-responsive" src="admin_area/product_images/electronic/product01b.png" alt="product01b"></center>
                                            </div>
                                            <div class="item">
                                                <center><img class="img-responsive" src="admin_area/product_images/electronic/product01c.png" alt="product01c"></center>
                                            </div>
                                        </div>
                                        <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Finish -->
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Previous</span>
                                        </a><!-- left carousel-control Finish -->

                                        <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel-control Begin -->
                                             <span class="glyphicon glyphicon-chevron-right"></span>
                                            <span class="sr-only">Previous</span>
                                         </a><!-- right carousel-control Finish -->

                                 </div><!-- carousel slide Finish -->
                             </div><!-- mainImage Finish -->
                         </div><!-- col-sm-6 Finish -->

                             <div class="col-sm-6"><!-- col-sm-6 Begin -->
                                 <div class="box"><!-- box Begin -->
                                     <h1 class="text-center">Macbook Pro</h1>

                                    <form action="details.php" class="form-horizontal" method="post"><!-- form-horizontal Begin -->
                                        <div class="form-group"><!-- form-group Begin -->
                                           <label for="" class="col-md-5 control-label">Products Memory</label>

                                            <div class="col-md-7"><!-- col-sm-7 Begin -->
                                                <select name="product_memory" id="" class="form-control"><!-- select Begin -->

                                                    <option>Select a Memory</option>
                                                    <option>8gb</option>
                                                    <option>16gb</option>
                                                    <option>32gb</option>
                                                    <option>64gb</option>
                                                </select><!--  select Finish -->
                                            </div><!--  col-md-7 Finish -->

                                        </div><!-- form group Finish -->
                                         
                                        <div class="form-group" ><!--  form-group Begin -->
                                            <label class="col-md-5 control-label">Product Storage</label>

                                             <div class="col-md-7"><!--  col-md-7 Begin -->

                                             <select name="product_storage" class="form-control"><!--  form-control Begin -->
                                                    <option>Select a Storage</option>
                                                    <option>256gb</option>
                                                    <option>512gb</option>
                                                    <option>1tb</option>

                                             </select><!--  form-control Finish -->

                                             </div><!--  col-md-7 Finish -->
                                        
                                        </div><!--  form-group Finish -->

                                         <p class="price">$3000</p>

                                         <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to Cart</button></p>


                                    </form><!--  form-horizontal Finish -->


                                 </div><!-- box Finish -->

                                <div class="row" id="thumbs"><!-- row Begin -->

                                        <div class="col-xs-4"><!-- col-xs-4 Begin -->
                                          <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb"><!-- thumb Begin -->
                                              <img src="admin_area/product_images/electronic/product01a.png" alt="Laptop1" class="img-responsive">
                                            </a><!-- thumb Finish -->
                                        </div><!-- col-xs-4Finish -->
                                        <div class="col-xs-4"><!-- col-xs-4 Begin -->
                                          <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb"><!-- thumb Begin -->
                                              <img src="admin_area/product_images/electronic/product01b.png" alt="Laptop2" class="img-responsive">
                                            </a><!-- thumb Finish -->
                                        </div><!-- col-xs-4Finish -->
                                        <div class="col-xs-4"><!-- col-xs-4 Begin -->
                                          <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb"><!-- thumb Begin -->
                                              <img src="admin_area/product_images/electronic/product01c.png" alt="Laptop3" class="img-responsive">
                                            </a><!-- thumb Finish -->
                                        </div><!-- col-xs-4Finish -->

                                 </div><!-- row Finish -->

                             </div><!-- col-sm-6 Finish -->
                     </div><!-- row Finish -->

                     <div class="box" id="details"><!-- box Begin -->
                       <p>
                           <h4>Product Details</h4>
                        </p>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                            dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>

                            <h4>Keyboard Language</h4>

                            <ul>
                                <li>backlit magic keyboard us english</li>
                                <li>backlit magic keyboard french</li>
                                <li>backlit magic keyboard german</li>
                            </ul>

                            <hr>

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


                 </div>  <!-- col-md-9 Finish -->    
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->

   
   <?php
    
    include("includes/footer.php");
    
  
  ?>


       <script src="js/jquery-331.min.js"></script>
       <script src="js/bootstrap-337.min.js"></script>
   