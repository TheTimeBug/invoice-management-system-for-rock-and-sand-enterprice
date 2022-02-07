<?php
extract($_REQUEST);

include('../../../config/connection.php');
$query = "SELECT `clint_id`,`clint_name`,`clint_phone1` FROM `tbl_clint` WHERE `clint_id`=$id";
$query_execute = mysqli_query($con, $query);
$data = mysqli_fetch_array($query_execute);
$db_phone = $data['clint_phone1'];
$db_name = $data['clint_name'];
session_start();
$admin_id=$_SESSION['userid'];


        echo "<h5>Are you Sure you want to delete $db_name($db_phone)?</h5>";

?>
<h6 id="responce_text2" class="text-red"></h6>
<form id="getdatadeletemodal" >
    <input type="text" hidden id="" name="id" value="<?php echo $id;?>">
</form>

