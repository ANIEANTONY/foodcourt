<div class="page-wrapper">
    <div class="container pt-2">
    <div class="row">
            <div class="col-sm">
                <h1>Suppliers</h1>
            </div>
            <div class="col-sm">
            
            </div>
            <div class="col-sm">
            <button class="btn btn-primary" onclick="window.location.href='<?php echo base_url('SuppliersController/addSupplier'); ?>'">Add Supplier</button>
            </div>
        </div>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">phone</th>
      <th scope="col">Address</th>
      <th scope="col">Location</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
		foreach($suppliers as $supplier)
		{
	?>
	    <tr>
		    <td><?php echo $supplier->sup_name; ?></td>		    
            <td><?php echo $supplier->sup_phone; ?></td>
            <td><?php echo $supplier->sup_address; ?></td>
            <td><?php echo $supplier->sup_location; ?></td>
            <td><button class="btn btn-success" onclick="window.location.href='<?php echo base_url('SuppliersController/editSupplier/'.$supplier->id); ?>'">Edit</button>
            <button class="btn btn-danger" onclick="return confirm('Are you sure to delete item?')?window.location.href='<?php echo base_url('SuppliersController/deletesupplier/'.$supplier->id); ?>':false;">Delete</button></td>
	    </tr>
	<?php
		}				
	?>
  </tbody>
</table>
</div>
</div>