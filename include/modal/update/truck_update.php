<?php
extract($_REQUEST);

include('../../../config/connection.php');
$query = "SELECT * FROM `tbl_truck` WHERE `truck_id`=$id";
$query_execute = mysqli_query($con, $query);
$data = mysqli_fetch_array($query_execute);
$db_phone = $data['truck_owner_phone'];
$db_name = $data['truck_owner_name'];
$db_license = $data['truck_license_no'];

$db_activity = $data['truck_activity'];

$db_height = $data['truck_height'];
$db_width = $data['truck_width'];
$db_length = $data['truck_length'];
$db_volume = $data['truck_volume'];

$hft = (int)$db_height;
$wft = (int)$db_width;
$lft = (int)$db_length;

$hin = number_format(($db_height - (int)$db_height)*12,2);
$win = number_format(($db_width  - (int)$db_width)*12,2);
$lin = number_format(($db_length - (int)$db_length)*12,2);


?>



<div class="card">
    <div class="card-body">
        <form id="Truckentry" class="form pt-3">
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="form-label">License No.</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-truck"></i></span>
                        <input type="text" name="license" id="license" class="form-control" value="<?php echo $db_license; ?>">
                        <input type="text" hidden name="id" id="id" class="form-control" value="<?php echo $id; ?>">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label">Owner Name</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                        <input type="text" name="name" id="name" class="form-control" value="<?php echo $db_name; ?>">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label">Owner Phone No</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="icon-phone"></i></span>
                        <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $db_phone; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="form-label">Height</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11">ft</span>
                        <input type="text" name="hft" id="hft" class="form-control" value="<?php echo $hft; ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11">in</span>
                        <input type="text" name="hin" id="hin" class="form-control" value="<?php echo $hin; ?>">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label">Width</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11">ft</span>
                        <input type="text" name="wft" id="wft" class="form-control"value="<?php echo $wft; ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11">in</span>
                        <input type="text" onchange="cubicFEET()" name="win" id="win" class="form-control" value="<?php echo $win; ?>">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label">Length</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11">ft</span>
                        <input type="text" name="lft" id="lft" class="form-control" value="<?php echo $lft; ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11">in</span>
                        <input type="text" onchange="cubicFEET()" name="lin" id="lin" class="form-control" value="<?php echo $lin; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4"></div>
                <div class="form-group col-md-4">
                    <button type="button" onclick="cubicFEET()" class="btn w-100px btn-outline-info float-end">Calculate</button>
                </div>
                <div class="form-group col-md-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11">Volume</span>
                        <input type="text" name="volume" id="volume" class="form-control"value="<?php echo $db_volume; ?>">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>