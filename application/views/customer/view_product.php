

<div class="card mx-auto my-3" style="width: 50rem;">
  <?php
  foreach($product as $prod)
      {
  ?>
  <img style="height: 200px" class="card-img-top" src="<?php echo base_url('product_images/'.$prod->image); ?>" alt="Card image cap">
  <div class="card-body">
    <h1 class="card-title"><?php echo $prod->name; ?></h1>
    <p class="card-text"><?php echo $prod->description;?></p><br>
    <h1>Price: <?php echo $prod->price; ?></h1>
    <h1>Category: <?php echo $prod->category; ?></h1>
    <a class="btn btn-success" href="<?php echo base_url('customer/Products/addToCart/'.$prod->id); ?>">Add to Cart</a>
  </div>
  <?php
    }
    ?>
</div>


