<div class="page-wrapper">
    <div class="container pt-2">
    <div class="row">
            <div class="col-sm">
                <h1>Locations</h1>
            </div>
            <div class="col-sm">
            
            </div>
            <div class="col-sm">
            <button class="btn btn-primary" onclick="window.location.href='<?php echo base_url('LocationsController/addLocation'); ?>'">Add Location</button>
            </div>
        </div>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>      
      <th scope="col">Address</th>  
      
    </tr>
  </thead>
  <tbody>
    <?php
		foreach($locations as $location)
		{
	?>
	    <tr>
		    <td><?php echo $location->loc_name; ?></td>            
            <td><?php echo $location->loc_address; ?></td>            
            <td><button class="btn btn-success" onclick="window.location.href='<?php echo base_url('LocationsController/editLocation/'.$location->id); ?>'">Edit</button>
            <button class="btn btn-danger" onclick="return confirm('Are you sure to delete item?')?window.location.href='<?php echo base_url('LocationsController/deleteLocation/'.$location->id); ?>':false;">Delete</button></td>
	    </tr>
	<?php
		}				
	?>
  </tbody>
</table>
</div>
</div>