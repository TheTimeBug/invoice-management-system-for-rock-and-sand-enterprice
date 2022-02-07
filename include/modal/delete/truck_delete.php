<?php
extract($_REQUEST);

include('../../../config/connection.php');
$query = "SELECT `truck_license_no`,`truck_owner_name` FROM `tbl_truck` WHERE `truck_id`=$id";
$query_execute = mysqli_query($con, $query);
$data = mysqli_fetch_array($query_execute);
$db_license = $data['truck_license_no'];
$db_name = $data['truck_owner_name'];
session_start();
$admin_id=$_SESSION['userid'];

    if($id==$admin_id){
    }
    else{
        echo "<h5>Are you Sure you want to delete $db_license($db_name)?</h5>";
    }
?>
<h6 id="responce_text2" class="text-red"></h6>
<form id="getdatadeletemodal" >
    <input type="text" hidden id="" name="id" value="<?php echo $id;?>">
</form>

