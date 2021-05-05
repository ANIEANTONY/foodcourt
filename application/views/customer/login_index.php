 <!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Freshshop - Ecommerce Bootstrap 4 HTML Template</title>
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

</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">				
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="our-link float-right">
                        <ul>
                            <li><a href="<?php echo base_url();?>"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="<?php echo base_url('CustomerController/logout');?>"><i class="fas fa-user-circle"></i> Logout</a></li>
                        </ul>
                    </div>
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
                    <a class="navbar-brand" href="<?php echo base_url();?>index.html"><img src="<?php echo base_url();?>customer/images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>fcontroller/index">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>fcontroller/abt">About Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">MENU</a>
                            <ul class="dropdown-menu">
								<li><a href="<?php echo base_url();?>fcontroller/side">Italian</a></li>
								<li><a href="<?php echo base_url();?>fcontroller/shpdetail">South Indian</a></li> 
                                <li><a href="<?php echo base_url();?>fcontroller/crt">North Indian</a></li>
                                <li><a href="<?php echo base_url();?>fcontroller/check">Curry</a></li>
                                <!-- <li><a href="<?php echo base_url();?>fcontroller/myact">My Account</a></li> -->
                                <!-- <li><a href="<?php echo base_url();?>fcontroller/wlist">Wishlist</a></li> -->
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>CustomerController/gallery">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="fcontroller/crt"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu">
							<a href="#">
								<i class="fa fa-shopping-bag"></i>
								<span class="badge">3</span>
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
                        <li>
                            <a href="<?php echo base_url();?>" class="photo"><img src="<?php echo base_url();?>customer/images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="<?php echo base_url();?>">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>" class="photo"><img src="<?php echo base_url();?>customer/images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="<?php echo base_url();?>">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>" class="photo"><img src="<?php echo base_url();?>customer/images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="<?php echo base_url();?>">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="<?php echo base_url();?>" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
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
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
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
                <img src="<?php echo base_url();?>customer/images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="<?php echo base_url();?>">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="<?php echo base_url();?>customer/images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="<?php echo base_url();?>customer/images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="<?php echo base_url();?>">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
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
                        <img class="img-fluid" src="<?php echo base_url();?>customer/images/categories_img_01.jpg" alt="" />
                        <a class="btn hvr-hover" href="<?php echo base_url();?>">Italian</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="<?php echo base_url();?>customer/images/categories_img_02.jpg" alt="" />
                        <a class="btn hvr-hover" href="<?php echo base_url();?>">South Indian</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="<?php echo base_url();?>customer/images/categories_img_03.jpg" alt="" />
                        <a class="btn hvr-hover" href="<?php echo base_url();?>">North Indian</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Foodie Love</h1>
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
                                <a class="cart" href="<?php echo base_url();?>">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $7.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
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
    </div>
    <!-- End Products  -->    

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