<div class="container">
  <div class="row">
    <div class="col-sm">
      
    </div>
    <div class="col-sm my-2">
    <h1>Register</h1>

<?php echo form_open_multipart('CustomerController/register'); ?>
  <div class="form-group">
    <label for="name">User Name</label>
    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter user name" required>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number" required>
  </div>  
  <div class="form-group">
    <label for="description">Address</label>
    <textarea class="form-control" id="address" name="address" placeholder="Enter address" required></textarea>
  </div>
  <input type="submit" class="btn btn-primary" name="register" value="Submit">

  <?php echo form_close(); ?>

</div>
    <div class="col-sm">
      
    </div>
  </div>
</div>