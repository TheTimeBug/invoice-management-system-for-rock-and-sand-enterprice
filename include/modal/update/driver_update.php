<?php
extract($_REQUEST);

include('../../../config/connection.php');
$query = "SELECT * FROM `tbl_driver` WHERE `driver_id`=$id";
$query_execute = mysqli_query($con, $query);
$data = mysqli_fetch_array($query_execute);
$db_name = $data['driver_name'];
$db_phone1 = $data['driver_phone1'];
$db_phone2 = $data['driver_phone2'];
$db_address = $data['driver_address'];
?>

<div class="card ">
    <div class="card-body">
        <form id="DRIVERentry" class="form pt-3">
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="form-label">Driver Name</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                        <input type="text" name="name" id="name" class="form-control" value="<?php echo $db_name; ?>">
                        <input hidden type="text" name="id" id="id" class="form-control" value="<?php echo $id; ?>">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label">Driver Phone 1</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="icon-phone"></i></span>
                        <input type="text" name="phone1" id="phone1" class="form-control"value="<?php echo $db_phone1; ?>">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label">Driver Phone 2</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="icon-phone"></i></span>
                        <input type="text" name="phone2" id="phone2" class="form-control" value="<?php echo $db_phone2; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-8">
                    <label class="form-label">Address</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-home"></i></span>
                        <input type="text" name="address" id="address" class="form-control" value="<?php echo $db_address; ?>">
                    </div>
                </div>
                <div class="form-group col-md-4">
                </div>
            </div>
        </form>
    </div>
</div>