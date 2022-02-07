<?php
include('../../config/connection.php');
$queary = "SELECT `truck_id`,`truck_license_no`,`truck_owner_name`,`truck_owner_phone`,`truck_trip_number`,`truck_height`,`truck_width`,`truck_length`,`truck_volume`,truck_activity FROM `tbl_truck` WHERE truck_activity !='D' ORDER BY truck_trip_number ASC";
$queary_execution = mysqli_query($con, $queary);
$count = 0;
extract($_REQUEST);
?>

<div class="input-group mb-2">
    <select name="license_no[]" onchange="lode_volume(this.id)" id="license<?php echo $last?>" class="form-control form-select">
        <option selected disabled>Select</option>
        <?php
        while ($data = mysqli_fetch_array($queary_execution)) {
            $db_license = $data['truck_license_no'];
            $db_id = $data['truck_id'];
            $db_height = $data['truck_height'];
            $db_width = $data['truck_width'];
            $db_length = $data['truck_length'];
            $db_volume = $data['truck_volume'];

        ?>
            <option value="<?php echo $db_id; ?>"><?php echo $db_license; ?></option>
        <?php } ?>
    </select>
</div>