<div class="container my-5">
  <div class="row">
    <div class="col-sm">
    <h1>My Orders</h1>
    </div>
    <div class="col-sm">
      
    </div>
    <div class="col-sm">
      <h1>Hi, <?php  echo $this->session->userdata('username');?></h1>
    </div>
  </div>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>
  <?php
		foreach($userorders as $order)
		{
	?>
    <tr>
      <td><?php echo $order->name; ?></td>
      <td>
        Quantity:
            <?php echo $order->quantity; ?><br>
        Amount:
            <?php echo $order->sub_total; ?><br>
        </td>
    </tr>
    <?php
        }
    ?>
  </tbody>
</table>
</div>