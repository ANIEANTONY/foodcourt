<div class="page-wrapper">
    <div class="container">
        <h1> Edit Supplier</h1>
        <?php  
        foreach($supplier as $sup)
        {
        ?>
        <?php echo form_open_multipart('SuppliersController/editSupplier/'.$sup->id); ?>

        <div class="form-group">
                <label for="name">Supplier Name</label>
                <input type="text" class="form-control" id="sup_name" name="sup_name" placeholder="Enter Supplier name" value="<?php echo $sup->sup_name; ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Supplier Phone</label>
                <input type="text" class="form-control" id="sup_phone" name="sup_phone" placeholder="Enter Supplier phone" value="<?php echo $sup->sup_phone; ?>" required>
            </div>
            <div class="form-group">
                <label for="address">Supplier Address</label>
                <textarea class="form-control" id="sup_address" name="sup_address" placeholder="Enter Supplier address" required><?php echo $sup->sup_address; ?></textarea>
            </div>
            <div class="form-group">
                <label for="location">Supplier Location</label>
                <select class="form-control" id="sup_location" name="sup_location" required>
                <option value="">Select Location</option>
                <?php
                foreach($location as $loc)
                {
                ?>                
                <option value="<?php echo $loc->loc_name;?>" <?php if($loc->loc_name == $sup->sup_location) echo 'selected="selected"'; ?>><?php echo $loc->loc_name;?></option>
                <?php
                }
                ?>
                </select>
            </div>

            <!--<button type="submit" name="prod_submit" class="btn btn-primary mb-2">Submit</button>-->
            <input type="submit" name="sup_submit" class="btn btn-primary mb-2" value="Submit">

        <?php echo form_close(); 
        }
        ?>
        

    </div>
</div>