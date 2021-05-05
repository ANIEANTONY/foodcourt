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

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

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
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">MENU</a>
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
                        <!--<li class="search"><a href="fcontroller/crt"><i class="fa fa-search"></i></a></li>-->
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
                        <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){    ?>
                        <li>
                            <a href="<?php echo base_url();?>" class="photo"><img src="<?php echo base_url('product_images/'.$item['image']); ?>" class="cart-thumb" alt="" /></a>
                            <h6><a href="<?php echo base_url();?>"><?php echo $item['name'];?></a></h6>
                            <p><span class="price"><?php echo 'Rs. '.$item["price"]; ?></span></p>
                        </li>
                        <?php } }?>
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
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->