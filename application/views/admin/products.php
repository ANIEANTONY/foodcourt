<div class="page-wrapper">
    <div class="container pt-2">
        <div class="row">
            <div class="col-sm">
                <h1>Products</h1>
            </div>
            <div class="col-sm">
            
            </div>
            <div class="col-sm">
            <button class="btn btn-primary" onclick="window.location.href='<?php echo base_url('ProductsController/addProduct'); ?>'">Add Product</button>
            </div>
        </div>
<table class="table table-bordered  table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">category</th>
    </tr>
  </thead>
  <tbody>
    <?php
		foreach($products as $product)
		{
	?>
	    <tr>
		    <td><?php echo $product->name; ?></td>
            <td><img src="<?php echo base_url();?>product_images/<?php echo $product->image;?>" class="img-rounded" alt="" width="100"></td>
            <td><?php echo $product->description; ?></td>
            <td><?php echo $product->price; ?></td>
            <td><?php echo $product->category; ?></td>
            <td><button class="btn btn-success" onclick="window.location.href='<?php echo base_url('ProductsController/editProduct/'.$product->id); ?>'">Edit</button> </td>
            <td>
            <button class="btn btn-danger" onclick="return confirm('Are you sure to delete item?')?window.location.href='<?php echo base_url('ProductsController/deleteProduct/'.$product->id); ?>':false;">Delete</button></td>
	    </tr>
	<?php
		}				
	?>
  </tbody>
</table>
</div>
</div>