<!-- <html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

<!-- Include jQuery library 
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>-->

<script>
// Update item quantity
function updateCartItem(obj, rowid){
    $.get("<?php echo base_url('customer/cart/updateItemQty/'); ?>", {rowid:rowid, qty:obj.value}, function(resp){
        if(resp == 'ok'){
            location.reload();
        }else{
            alert('Cart update failed, please try again.');
        }
    });
}
</script>
<!-- </head>
<body> -->
<h1>CART</h1>
<table class="table table-striped">
<thead>
    <tr>
    <th>Sl.no</th>
        <th width="10%"></th>
        <th width="30%">Product</th>
        <th width="15%">Price</th>
        <th width="13%">Quantity</th>
        <th width="20%" class="text-right">Subtotal</th>
        <th width="12%"></th>
    </tr>
</thead>
<tbody>
    <?php if($this->cart->total_items() > 0)  { 
         $i=1;
        foreach($cartItems as $item){    ?>
    <tr>
    <td><?php echo $i++; ?></td>
        <td>
            <?php $imageURL = !empty($item["image"])?base_url('product_images/'.$item["image"]):base_url('assets/images/pro-demo-img.jpeg'); ?>
            <img src="<?php echo $imageURL; ?>" width="50"/>
        </td>
        <td><?php echo $item["name"]; ?></td>
        <td><?php echo '₹'.$item["price"]; ?></td>
        <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
        <td class="text-right"><?php echo '₹'.$item["subtotal"]; ?></td>
        <td class="text-right"><button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete item?')?window.location.href='<?php echo base_url('customer/cart/removeItem/'.$item["rowid"]); ?>':false;"><i class="fa fa-trash"></i> </button> </td>
    </tr>
    <?php } }else{ ?>
    <tr><td colspan="6"><p>Your cart is empty.....</p></td>
    <?php } ?>
    <?php if($this->cart->total_items() > 0){ ?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td><strong>Cart Total</strong></td>
        <td class="text-right"><strong><?php echo '₹ '.$this->cart->total(); ?></strong></td>
        <td></td>
    </tr>
    <?php } ?>
</tbody>
</table>
<a href="<?php echo base_url('customer/products/'); ?>" class="btn btn-primary">Continue Shopping</a>
<?php if($this->cart->total_items()>0) { ?>
<a href="<?php echo base_url('customer/checkout/'); ?>" class="btn btn-primary">Checkout</a>
<?php } ?>
<!-- </body>
<html> -->