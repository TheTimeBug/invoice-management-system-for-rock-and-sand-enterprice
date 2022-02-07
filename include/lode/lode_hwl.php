<?php
extract($_REQUEST);
include('../../config/connection.php');
$queary = "SELECT `truck_height`,`truck_length`,`truck_width`,`truck_volume` FROM `tbl_truck` WHERE `truck_id`='$truck_id'";
$queary_execution = mysqli_query($con, $queary);
$data = mysqli_fetch_array($queary_execution);
$height = $data['truck_height'];
$width = $data['truck_width'];
$length = $data['truck_length'];
$volume = $data['truck_volume'];

$win = ($width-(int)$width)*12;
$hin = ($height-(int)$height)*12;
$lin = ($length-(int)$length)*12;


?>
   <br> 
    <div class="input-group">
        <span class="input-group-text  width-65px">Height</span>
        <input type="number" class="form-control" id="hft<?php echo $last ?>" placeholder="ft">
        <input type="number" class="form-control" id="hin<?php echo $last ?>" value="<?php echo number_format($hin)?>">
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-text width-65px">Width.</span>
        <input type="number" class="form-control" id="wft<?php echo $last ?>" placeholder="ft">
        <input type="number" class="form-control" id="win<?php echo $last ?>" value="<?php echo number_format($hin)?>">
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-text width-65px">Length</span>
        <input type="number" class="form-control" id="lft<?php echo $last ?>" placeholder="ft">
        <input type="number" class="form-control" id="lin<?php echo $last ?>" value="<?php echo number_format($hin)?>">
    </div>