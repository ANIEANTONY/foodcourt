<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<h1>ORDER STATUS</h1>
<?php if(!empty($order)){ ?>
    <div class="col-md-12">
        <div class="alert alert-success"> Your order has been placed successfully.</div>
    </div>
	
    <!-- Order status & shipping info -->
    <div class="row col-lg-12 ord-addr-info">
        <div class="hdr">Order Info</div>
        <p><b>Reference ID:</b> #<?php echo $order['id']; ?></p>
        <p><b>Total:</b> <?php echo '₹'.$order['grand_total']; ?></p>
        <p><b>Placed On:</b> <?php echo $order['created']; ?></p>
        <p><b>Buyer Name:</b> <?php echo $order['name']; ?></p>
        <p><b>Email:</b> <?php echo $order['email']; ?></p>
        <p><b>Phone:</b> <?php echo $order['phone']; ?></p>
        <p><b>Payment mode: Cash on delivery</b></p>
    </div>
	
    <!-- Order items -->
    <div class="row col-lg-12">
        <table class="table table-hover" style="margin:20px;  ">
            <thead>
                <tr>
                <th>Sl.no</th>
                    <th></th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>QTY</th>
                    <th>Sub Total</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(!empty($order['items'])){
                    $i=1;  
                    foreach($order['items'] as $item){ 
                ?>
               
               
                <tr>
                
                     <td><?php echo $i++;?></td>
                    <td>
                        <?php $imageURL = !empty($item["image"])?base_url('product_images/'.$item["image"]):base_url('assets/images/pro-demo-img.jpeg'); ?>
                        <img src="<?php echo $imageURL; ?>" width="75"/>
                    </td>
                    <td><?php echo $item["name"]; ?></td>
                    <td><?php echo '₹'.$item["price"]; ?></td>
                    <td><?php echo $item["quantity"]; ?></td>
                    <td><?php echo '₹'.$item["sub_total"]; ?></td>
                </tr>
                <?php } 
                } ?>
            </tbody>
        </table>
    </div>
<?php } else{ ?>
<div class="col-md-12">
    <div class="alert alert-danger">Your order submission failed.</div>
</div>
<?php } ?>
<div class="col-md-12">
<a href="<?php echo base_url('customer/products/'); ?>" class="btn btn-primary">Return to site</a>
</div>
</body>
</html>