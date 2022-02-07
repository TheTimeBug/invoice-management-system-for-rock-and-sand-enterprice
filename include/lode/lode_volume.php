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
 <input type="text" class="form-control" name="volume[]" id="volume<?php echo $last;?>" value="<?php echo $volume;?>">
 <br> 
<h6> H : <?php echo (int)$height;?>ft <?php echo number_format($hin);?>in</h6>
<h6> W: <?php echo (int)$width;?>ft <?php echo number_format($win);?>in</h6>
<h6> L  : <?php echo (int)$length;?>ft <?php echo number_format($lin);?>in</h6>

<input hidden type="number" id="hft<?php echo $last ?>" value="<?php echo (int)$height;?>">
<input hidden type="number" id="hin<?php echo $last ?>" value="<?php echo number_format($hin);?>">
<input hidden type="number" id="wft<?php echo $last ?>" value="<?php echo (int)$width;?>">
<input hidden type="number" id="win<?php echo $last ?>" value="<?php echo number_format($win);?>">
<input hidden type="number" id="lft<?php echo $last ?>" value="<?php echo (int)$length;?>">
<input hidden type="number" id="lin<?php echo $last ?>" value="<?php echo number_format($lin);?>">