<div class="page-wrapper">
    <div class="container">
        <h1> Edit Product</h1>
        <?php  
        foreach($product as $prod)
        {
        ?>
        <?php echo form_open_multipart('ProductsController/editProduct/'.$prod->id); ?>

            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id="prod_name" name="prod_name" placeholder="Enter product name" value="<?php echo $prod->name; ?>" required>
            </div>
            <div class="form-group">
                <label for="image">Product Image</label>
                <input type="file" class="form-control-file" id="prod_image" name="prod_image" required>
                <!--<input type="file" name="userfile" id="image" size="20" />-->
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="prod_desc" name="prod_desc" placeholder="Enter product description" required><?php echo $prod->description; ?></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="prod_price" name="prod_price" placeholder="Enter product price" value="<?php echo $prod->price; ?>" required>
            </div>
            <div class="form-group">
                <label for="location">Category</label>
                <select class="form-control" id="prod_category" name="prod_category" required>
                <option value="">Select Category</option>
                <?php
                foreach($category as $cat)
                {
                ?>                
                <option value="<?php echo $cat->cat_name;?>" <?php if($cat->cat_name == $prod->category) echo 'selected="selected"'; ?>><?php echo $cat->cat_name;?></option>
                <?php
                }
                ?>
                </select>
            </div>

            <!--<button type="submit" name="prod_submit" class="btn btn-primary mb-2">Submit</button>-->
            <input type="submit" name="prod_submit" class="btn btn-primary mb-2" value="Submit">

        <?php echo form_close(); 
        }
        echo @$error;
        ?>
        

    </div>
</div>