<div class="page-wrapper">
    <div class="container">
        <h1> Add Category</h1>
        <?php echo form_open_multipart('CategoriesController/addCategory'); ?>

            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Enter Category name" required>
            </div>
            <!-- <div class="form-group">
                <label for="description">Category Type</label>
                <input type="text" class="form-control" id="cat_type" name="cat_type" placeholder="Enter Category type" required>
            </div> -->
            <div class="form-group">
                <label for="price">Category Description</label>
                <textarea class="form-control" id="cat_desc" name="cat_desc" placeholder="Enter Category description" required></textarea>
            </div>

            <!--<button type="submit" name="prod_submit" class="btn btn-primary mb-2">Submit</button>-->
            <input type="submit" name="cat_submit" class="btn btn-primary mb-2" value="Submit">

        <?php echo form_close(); ?>

    </div>
</div>