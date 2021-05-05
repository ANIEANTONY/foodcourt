<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Foody Love</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="shortcut icon" href="<?php echo base_url();?>customer/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo base_url();?>customer/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>customer/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>customer/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>customer/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>customer/css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Disable browser back button start -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            window.history.pushState(null, "", window.location.href);  
            window.onpopstate = function() {
            window.history.pushState(null, "", window.location.href);
        };
    });
    </script>
    <!-- Disable browser back button end -->

</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<?php
                    if($this->session->userdata('userid') == FALSE)
                    {
                    ?>
                    <div class="our-link">
                        <ul>
                            <!-- <li><a href="<?php echo base_url();?>"><i class="fa fa-user"></i> My Account</a></li>                             -->
                            <li><a href="<?php echo base_url('CustomerController/register');?>"><i class="fa fa-user-plus"></i> Register</a></li>
                            <li><a href="<?php echo base_url('CustomerController/login');?>"><i class="fas fa-user-circle"></i> Login</a></li>
                        </ul>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">	
                    <?php
                    if($this->session->userdata('userid') != FALSE)
                    {
                    ?>
                    <div class="our-link float-right">
                        <ul>
                            <li><a href="<?php echo base_url('CustomerController/myAccount');?>"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="<?php echo base_url('CustomerController/logout');?>"><i class="fas fa-user-circle"></i> Logout</a></li>
                        </ul>
                    </div>
                    <?php
                    }
                    ?>				
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="<?php echo base_url();?>index.html"><img src="<?php echo base_url();?>customer/images/foodylovelogo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="<?php echo base_url('CustomerController/');?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>CustomerController/aboutus">About Us</a></li>
                        <li class="dropdown">
                            <a href="" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">MENU</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('customer/Products/');?>">All</a></li>
								<li><a href="<?php echo base_url('customer/Products/categoryProduct/italian');?>">Italian</a></li>
								<li><a href="<?php echo base_url('customer/Products/categoryProduct/southindian');?>">South Indian</a></li> 
                                <li><a href="<?php echo base_url('customer/Products/categoryProduct/northindian');?>">North Indian</a></li>
                                <li><a href="<?php echo base_url('customer/Products/categoryProduct/curry');?>">Curry</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>CustomerController/gallery">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>CustomerController/contactus">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="side-menu">
							<a href="#">
								<i class="fa fa-shopping-bag"></i>
								<span class="badge"><?php echo ($this->cart->total_items() > 0)?$this->cart->total_items().' Items':'Empty'; ?></span>
								<p>My Cart</p>
							</a>
						</li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        
                        <!-- ******************* -->
                        <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){    ?>
                        <li>
                            <a href="<?php echo base_url();?>" class="photo"><img src="<?php echo base_url('product_images/'.$item['image']); ?>" class="cart-thumb" alt="" /></a>
                            <h6><a href="<?php echo base_url();?>"><?php echo $item['name'];?></a></h6>
                            <p>1x - <span class="price"><?php echo '$'.$item["price"].' USD'; ?></span></p>
                        </li>
                        <?php } }?>
                        <!-- ********************* -->
                        
                        <li class="total">
                            <a href="<?php echo base_url('Customer/cart'); ?>" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: <?php echo $this->cart->total();?></span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group " style="width:50%; margin-left:300px;">
                <span class="input-group-addon "><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="<?php echo base_url();?>customer/images/banner-08.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- <div class="input-group">                            
                                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                aria-describedby="search-addon" />
                                <button type="button" class="btn btn-primary">search</button>
                                <input type="submit" name="loc_submit" class="btn btn-primary" value="search">
                            </div> -->
                            
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="<?php echo base_url();?>customer/images/banner-05.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <div class="input-group">

                                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                aria-describedby="search-addon" />
                                <button type="button" class="btn btn-primary">search</button>

                            </div> -->
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="<?php echo base_url();?>customer/images/banner-06.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <div class="input-group">
                                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                aria-describedby="search-addon" />
                                <button type="button" class="btn btn-primary">search</button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">

            <div class="col-md-12">
                <?php echo form_open_multipart('customer/Products/searchProduct'); ?>
                    <div class="input-group" style="width:50%; margin-left:300px;">
                        <input type="search" name="search" class="form-control rounded " placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <!-- <button type="button" class="btn btn-primary">search</button> -->
                        <input type="submit" name="search_submit" class="btn btn-primary" value="search">
                    </div>
                <?php echo form_close(); ?>
            </div>
                
            <a href="<?php echo base_url();?>" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="<?php echo base_url();?>" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="<?php echo base_url();?>customer/images/italian.jpg" alt="" />
                        <a class="btn hvr-hover" href="<?php echo base_url();?>">Italian</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="<?php echo base_url();?>customer/images/north_indian.jpg" alt="" />
                        <a class="btn hvr-hover" href="<?php echo base_url();?>">South Indian</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="<?php echo base_url();?>customer/images/south_indian.jpg" alt="" />
                        <a class="btn hvr-hover" href="<?php echo base_url();?>">North Indian</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->

    <!-- Start Products  -->
    <!--<div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Foody Love</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-featured">Italian</button>
                            <button data-filter=".best-seller">South Indian</button>
                            <button data-filter=".best-seller">North Indian</button>
                            <button data-filter=".best-seller">Curry</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="<?php echo base_url();?>customer/images/img-pro-01.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="<?php echo base_url();?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="<?php echo base_url();?>" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="<?php echo base_url();?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="<?php echo base_url(''); ?>">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $7.79</h5>
                        </div>
                    </div>
                </div>-->
                <!-- Products from database -->
                <!-- <?php if(!empty($products)){ foreach($products as $row){ ?>
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="<?php echo base_url('product_images/'.$row['image']); ?>" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="<?php echo base_url();?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="<?php echo base_url();?>" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="<?php echo base_url();?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="<?php echo base_url('customer/Products/addToCart/'.$row['id']); ?>">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4><?php echo $row["name"]; ?></h4>
                             <p><?php echo $row["description"]; ?><p>
                            <h5> <?php echo $row["price"]; ?></h5>
                        </div>
                    </div>
                </div>
                <?php } }else{ ?>
                <p>Product(s) not found...</p>
                <?php } ?> -->
                <!-- Products from database -->

                <!--<div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">New</p>
                            </div>
                            <img src="<?php echo base_url();?>customer/images/img-pro-02.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="<?php echo base_url();?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="<?php echo base_url();?>" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="<?php echo base_url();?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="<?php echo base_url();?>">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $9.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="<?php echo base_url();?>customer/images/img-pro-03.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="<?php echo base_url();?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="<?php echo base_url();?>" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="<?php echo base_url();?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="<?php echo base_url();?>">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $10.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="<?php echo base_url();?>customer/images/img-pro-04.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="<?php echo base_url();?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="<?php echo base_url();?>" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="<?php echo base_url();?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="<?php echo base_url();?>">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $15.79</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- End Products  -->    

    
    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Business Time</h3>
							<ul class="list-time">
								<li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Newsletter</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Submit</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Social Media</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
						</div>
					</div>
				</div>
				<hr>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Foody Love</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> 							
                        </div>
                    </div>
                   
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4><a  href="<?php echo base_url();?>AdminController/index">Admin Login</a> </h4>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4><a  href="<?php echo base_url();?>SupplierPageController/index">Supplier Login</a></h4>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->
    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2021</p>
            <!-- <p class="footer-company">All Rights Reserved. &copy; 2021 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">html design</a></p>-->
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="<?php echo base_url();?>customer/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>customer/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>customer/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="<?php echo base_url();?>customer/js/jquery.superslides.min.js"></script>
    <script src="<?php echo base_url();?>customer/js/bootstrap-select.js"></script>
    <script src="<?php echo base_url();?>customer/js/inewsticker.js"></script>
    <script src="<?php echo base_url();?>customer/js/bootsnav.js."></script>
    <script src="<?php echo base_url();?>customer/js/images-loded.min.js"></script>
    <script src="<?php echo base_url();?>customer/js/isotope.min.js"></script>
    <script src="<?php echo base_url();?>customer/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>customer/js/baguetteBox.min.js"></script>
    <script src="<?php echo base_url();?>customer/js/form-validator.min.js"></script>
    <script src="<?php echo base_url();?>customer/js/contact-form-script.js"></script>
    <script src="<?php echo base_url();?>customer/js/custom.js"></script>

</body>

</html>