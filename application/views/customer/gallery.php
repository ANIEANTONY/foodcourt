<h1 class="text-center "  style="font-size: 38px;">Gallery</h1>
	
<!-- Cart basket -->
<!-- <div class="cart-view">
    <a href="<?php echo base_url('cart'); ?>" title="View Cart"><i class="icart"></i> (<?php echo ($this->cart->total_items() > 0)?$this->cart->total_items().' Items':'Empty'; ?>)</a>
</div> -->

<!-- List all products -->
<div class="row col-lg-12">
    <?php if(!empty($products)){ 
        foreach($products as $row){ ?>
        <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale"><?php echo $row['name'] ?></p>
                            </div>
                            <img src="<?php echo base_url('product_images/'.$row['image']); ?>" class="img-fluid" alt="Image">
                            
                        </div>
                        
                    </div>
                </div>
    <?php } }  ?>
</div>