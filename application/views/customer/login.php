<div class="container">
  <div class="row">
    <div class="col-sm">
      
    </div>
    <div class="col-sm my-2">
    <h1>Login</h1>

<?php echo form_open_multipart('CustomerController/login'); ?>
  <div class="form-group">
    <label for="name">User Name</label>
    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter user name" required>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
  </div>
  <input type="submit" class="btn btn-primary" name="login" value="Submit">
  <div class="form-group">
    <br>
    <p><h3>Don't have an account?</h3></p>
       <button class="btn btn-success" onclick="window.location.href='<?php echo base_url('CustomerController/register');?>'">Click here to Register</button>
       <?php if($this->cart->total_items() > 0){ ?>
       <button class="btn btn-success" onclick="window.location.href='<?php echo base_url('Customer/cart'); ?>'">Continue as Guest</button>
       <?php } ?>
  </div>
  <?php echo form_close(); ?>
    <?php echo @$error; ?>
</div>
    <div class="col-sm">
      
    </div>
  </div>
</div>