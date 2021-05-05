<div class="page-wrapper">
    <div class="container">
        <h1> Add Location</h1>
        <?php echo form_open_multipart('LocationsController/addLocation'); ?>

            <div class="form-group">
                <label for="name">Location Name</label>
                <input type="text" class="form-control" id="loc_name" name="loc_name" placeholder="Enter Location name" required>
            </div>
            <div class="form-group">
                <label for="address">Location Address</label>
                <textarea class="form-control" id="loc_address" name="loc_address" placeholder="Enter Location address" required></textarea>
            </div>

            <!--<button type="submit" name="prod_submit" class="btn btn-primary mb-2">Submit</button>-->
            <input type="submit" name="loc_submit" class="btn btn-primary mb-2" value="Submit">

        <?php echo form_close(); ?>

    </div>
</div>