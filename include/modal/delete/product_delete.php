<?php
extract($_REQUEST);

include('../../../config/connection.php');
$query = "SELECT `product_id`,`product_name`,`product_size`,`product_type` FROM `tbl_product` WHERE `product_id`=$id";
$query_execute = mysqli_query($con, $query);
$data = mysqli_fetch_array($query_execute);
$db_size = $data['product_size'];
$db_name = $data['product_name'];
$db_type = $data['product_type'];
session_start();
$admin_id=$_SESSION['userid'];

    echo "<h5>Are you Sure you want to delete<b> $db_name $db_size($db_type)</b>?</h5>";

?>
<h6 id="responce_text2" class="text-red"></h6>
<form id="getdatadeletemodal" >
    <input type="text" hidden id="" name="id" value="<?php echo $id;?>">
</form>

