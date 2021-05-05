<div class="page-wrapper">
    <div class="container pt-2">
        <h1> Users</h1>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    <?php
		foreach($users as $user)
		{
	?>
	    <tr>
		    <td><?php echo $user->user_name; ?></td>
		    <td><?php echo $user->user_email; ?></td>
            <td><?php echo $user->user_phone; ?></td>
            <td><?php echo $user->user_address; ?></td>
            <!--<td><button class="btn btn-success" onclick="window.location.href='<?php echo base_url('UsersController/editUser/'.$user->id); ?>'">Edit</button>
            <button class="btn btn-danger" onclick="return confirm('Are you sure to delete item?')?window.location.href='<?php echo base_url('UsersController/deleteUser/'.$user->id); ?>':false;">Delete</button></td>-->
	    </tr>
	<?php
		}				
	?>
  </tbody>
</table>
</div>
</div>