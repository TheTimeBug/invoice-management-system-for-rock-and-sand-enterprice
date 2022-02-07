<?php
extract($_REQUEST);

include('../../../config/connection.php');
$query = "SELECT * FROM `tbl_user` WHERE `user_id`=$id";
$query_execute = mysqli_query($con, $query);
$data = mysqli_fetch_array($query_execute);
$db_username = $data['user_username'];
$db_name = $data['user_name'];
session_start();
$admin_id=$_SESSION['userid'];

    if($id==$admin_id){
    }
    else{
        echo "<h5>Are you Sure you want to delete $db_name($db_username)?</h5>";
    }
?>
<h6 id="responce_text2" class="text-red"></h6>
<form id="getdatadeletemodal" >
    <input type="text" hidden id="" name="dlt_id" value="<?php echo $id;?>">
</form>

