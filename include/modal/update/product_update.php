<?php
extract($_REQUEST);

include('../../../config/connection.php');
$query = "SELECT * FROM `tbl_product` WHERE `product_id`=$id";
$query_execute = mysqli_query($con, $query);
$data = mysqli_fetch_array($query_execute);
$db_details = $data['product_details'];
$db_name = $data['product_name'];
$db_type = $data['product_type'];
$db_price = $data['product_price'];
$db_activity = $data['product_activity'];
$db_size = $data['product_size'];
?>



<div class="card">
    <div class="card-body">
        <form id="ProductEntry" class="form pt-3">
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="form-label">Product Name</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-pencil-alt"></i></span>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Product Name" value="<?php echo $db_name; ?>">
                        <input type="text" hidden name="id" id="id" class="form-control" value="<?php echo $id; ?>">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label">Product Size</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-ruler-pencil"></i></span>
                        <input type="text" name="size" id="size" class="form-control" placeholder="Size" value="<?php echo $db_size; ?>">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label">Product Type</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-layers-alt"></i></span>
                        <input type="text" name="type" id="type" class="form-control" placeholder="Type" value="<?php echo $db_type; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label class="form-label">Details</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class=" ti-clipboard"></i></span>
                        <input type="text" name="details" id="details" class="form-control" placeholder="Product Details" value="<?php echo $db_details; ?>">
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label class="form-label">Activity</label>
                    <select id="activity" name="activity" class="form-control form-select">
                        <?php 
                            if($db_activity=='A'){
                                echo "  <option selected value='A'>Active</option>
                                        <option value='I'>Inactive</option>";
                            }else if($db_activity=='I'){
                                echo "  <option  value='A'>Active</option>
                                        <option selected value='I'>Inactive</option>";
                            }
                        ?>
                    </select>

                </div>
                <div class="form-group col-md-3">
                    <label class="form-label">Price</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11">৳</span>
                        <input type="number" name="price" id="price" class="form-control" placeholder="Price" value="<?php echo $db_price; ?>">
                    </div>
                </div>
                
            </div>
        </form>
    </div>
</div>