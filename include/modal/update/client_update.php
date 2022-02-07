<?php
extract($_REQUEST);

include('../../../config/connection.php');
$query = "SELECT * FROM `tbl_clint` WHERE `clint_id`=$id";
echo $id;
$query_execute = mysqli_query($con, $query);
$data = mysqli_fetch_array($query_execute);
$db_name = $data['clint_name'];
$db_phone1 = $data['clint_phone1'];
$db_phone2 = $data['clint_phone2'];
$db_email = $data['clint_email'];
$db_address = $data['clint_ad_address'];
$db_district = $data['clint_ad_district'];
$db_country = $data['clint_ad_country'];
$db_post = $data['clint_ad_postcode'];
?>

<div class="card ">
    <div class="card-body">
        <form id="ClientEntry" class="form pt-3">
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="form-label">Clint Name</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                        <input type="text" name="clint" id="clint" class="form-control" placeholder="Full Name" value="<?php echo $db_name; ?>">
                    </div>
                </div>
                <div class="form-group col-md-4">
                <label class="form-label">Phone 1</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="icon-phone"></i></span>
                        <input type="text" name="phone1" id="phone1" class="form-control"value="<?php echo $db_phone1; ?>">
                    </div>
                </div>
                <div class="form-group col-md-4">
                <label class="form-label">Phone 2</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="icon-phone"></i></span>
                        <input type="text" name="phone2" id="phone2" class="form-control" value="<?php echo $db_phone2; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="form-label">Email</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-email"></i></span>
                        <input type="text" name="email" id="email" class="form-control" value="<?php echo $db_email; ?>">
                    </div>
                </div>
                <div class="form-group col-md-8">
                    <label class="form-label">Address</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-home"></i></span>
                        <input type="text" name="address" id="address" class="form-control" value="<?php echo $db_address; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="form-label">District</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-location-pin"></i></span>
                        <input type="text" name="district" id="district" class="form-control" value="<?php echo $db_district; ?>">
                    </div>
                </div>
                <div class="form-group col-md-5">
                    <label class="form-label">Country</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-location-pin"></i></span>
                        <input type="text" name="country" id="country" class="form-control" value="<?php echo $db_country; ?>">
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label class="form-label">Post Code</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-location-pin"></i></span>
                        <input type="text" name="postcode" id="postcode" class="form-control" value="<?php echo $db_post; ?>">
                        <input hidden type="text" name="id" id="id" class="form-control" value="<?php echo $id; ?>">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>