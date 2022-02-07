<?php
extract($_REQUEST);

include('../../../config/connection.php');
$query = "SELECT * FROM `tbl_user` WHERE `user_id`=$id";
$query_execute = mysqli_query($con, $query);
$data = mysqli_fetch_array($query_execute);
$db_username = $data['user_username'];
$db_name = $data['user_name'];
$db_phone = $data['user_phone'];
$db_role = $data['user_role'];
$db_statas = $data['user_active_flag'];
$db_id = $data['user_id'];
$db_password = $data['user_password'];
?>
<form id="updatedDATA">
    <h6 id="responce_text" class="text-red"></h6>
    <div class="row">
        <div class="col-md-4">
            <span >Name : </span>
            <input id="" name="name" type="text" value="<?php echo $db_name; ?>">
        </div>
        <div class="col-md-4">
            <span>Username : </span>
            <input id="" name="username" type="text" value="<?php echo $db_username; ?>">
        </div>
        <div class="col-md-4">
            <span>Phone : </span>
            <input id="" name="phone" type="text" value="<?php echo $db_phone; ?>">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <span>Role : </span>
            <select id="" name="role">
                <?php
                if ($db_role == 'M') {
                ?>
                    <option value="M" selected>M(Management)</option>
                    <option value="O">O(Operator)</option>
                <?php
                } else if ($db_role == 'O') {
                ?>
                    <option value="M">M(Management)</option>
                    <option value="O" selected>O(Operator)</option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="col-md-4">
            <span>Statas : </span>
            <select id="" name="state">
                <?php
                if ($db_statas == 'A') {
                ?>
                    <option value="A" selected>A(Active)</option>
                    <option value="I">I(Inactive)</option>
                <?php
                } else if ($db_statas == 'I') {
                ?>
                    <option value="A">A(Active)</option>
                    <option value="I" selected>I(Inactive)</option>
                <?php
                } else{
                    ?>
                    <option selected disabled>Select </option>
                    <option value="A">A(Active)</option>
                    <option value="I">I(Inactive)</option>
                    <?php 
                }
                ?>
            </select>
        </div>
        <div class="col-md-4">
            <input hidden id="" name="id" type="text" value="<?php echo $id; ?>">
        </div>
    </div>
</form>
