<div class="page-wrapper">
    <div class="container pt-2">
        <h1> Orders</h1>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Order id</th>
      <th scope="col">Order Details</th>
      <th scope="col">Customer Details</th>
    </tr>
  </thead>
  <tbody>
    <?php
		foreach($supplierOrder as $order)
		{
	?>
	    <tr>
		    <td><?php echo $order->order_id; ?></td>
            <td> Name:
            <?php echo $order->name; ?><br>
            Quantity:
            <?php echo $order->quantity; ?><br>
            Amount:
            <?php  echo '₹'.$order->sub_total; ?><br>
            <?php 
            if($order->status == 1)
            {?>
                <button class="btn btn-warning" onclick="window.location.href=''">Processing</button>
            <?php
            }
            else
            {?>
                <button class="btn btn-primary" onclick="window.location.href=''">Delivery success with payment </button>
            <?php
            }
            ?>
            <!--<img src="<?php echo base_url();?>product_images/<?php echo $product->image;?>" class="img-rounded" alt="" width="100">-->
            </td>
            <td>
            Name:
            <?php echo $order->cust_name; ?><br>
            Email:
            <?php echo $order->email; ?><br>
            Phone:
            <?php echo $order->phone; ?><br>
            Location:
            <?php echo $order->location; ?><br>
            Address:
            <?php echo $order->address; ?>
            </td>
            <td><button class="btn btn-success" onclick="return confirm('Do you want to change status from processing to delivered?')?window.location.href='<?php echo base_url('SupplierPageController/changeSupplierOrder/'.$order->id); ?>':false;">Change Status</button>
            <!-- <button class="btn btn-danger" onclick="return confirm('Are you sure to delete item?')?window.location.href='':false;">Delete</button></td> -->
	    </tr>
	<?php
		}				
	?>
  </tbody>
</table>
</div>
</div>