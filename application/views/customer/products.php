<!-- <html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body> -->
<h1>PRODUCTS</h1>
	
<!-- Cart basket -->
<!-- <div class="cart-view">
    <a href="<?php echo base_url('cart'); ?>" title="View Cart"><i class="icart"></i> (<?php echo ($this->cart->total_items() > 0)?$this->cart->total_items().' Items':'Empty'; ?>)</a>
</div> -->

<!-- List all products -->
<div class="row col-lg-12">
    <?php if(!empty($products)){ foreach($products as $row){ ?>
        <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="<?php echo base_url('product_images/'.$row['image']); ?>" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <!-- <li><a href="<?php echo base_url();?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li> -->
                                    <!-- <li><a href="<?php echo base_url();?>" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li> -->
                                    <!-- <li><a href="<?php echo base_url();?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> -->
                                    <li><a href="<?php echo base_url('customer/Products/viewProduct/'.$row['id']); ?>" data-toggle="tooltip" data-placement="right" title="View">View</i></a></li>
                                </ul>
                                <!-- <a class="cart" href="<?php echo base_url('customer/Products/addToCart/'.$row['id']); ?>">Add</a> -->
                                <a class="cart" href="<?php echo base_url('customer/Products/addToCart/'.$row['id']); ?>">Add to Cart</a>
                                
                            </div>
                        </div>
                        <div class="why-text">
                            <h4><?php echo $row["name"]; ?></h4>
                             <p>Category: <?php echo $row["category"]; ?><p><br>
                            <h5> ₹ <?php echo $row["price"]; ?></h5>
                        </div>
                    </div>
                </div>
    <?php } }else{ ?>
        <p>Product(s) not found...</p>
    <?php } ?>
</div>
<!-- </body>
</html> -->