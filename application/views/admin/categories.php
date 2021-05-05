  <div class="page-wrapper">
    <div class="container pt-2">
        <div class="row">
            <div class="col-sm">
                <h1>Categories</h1>
            </div>
            <div class="col-sm">
            
            </div>
            <div class="col-sm">
            <button class="btn btn-primary" onclick="window.location.href='<?php echo base_url('CategoriesController/addCategory'); ?>'">Add Category</button>
            </div>
        </div>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <!-- <th scope="col">Type</th> -->
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <?php
		foreach($categories as $category)
		{
	?>
	    <tr>
		    <td><?php echo $category->cat_name; ?></td>
            <!-- <td><?php echo $category->cat_type; ?></td> -->
            <td><?php echo $category->cat_description; ?></td>
            <td><button class="btn btn-success" onclick="window.location.href='<?php echo base_url('CategoriesController/editCategory/'.$category->id); ?>'">Edit</button></td>
            <td><button class="btn btn-danger" onclick="return confirm('Are you sure to delete item?')?window.location.href='<?php echo base_url('CategoriesController/deleteCategory/'.$category->id); ?>':false;">Delete</button></td>
	    </tr>
	<?php
		}				
	?>
  </tbody>
</table>
</div>
</div>