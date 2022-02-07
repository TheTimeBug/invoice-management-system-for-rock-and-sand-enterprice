<?php 
    extract($_REQUEST);

    include('../../../config/connection.php');
    $queary="SELECT `clint_id`,`clint_name`,`clint_phone1`,`clint_phone2`,`clint_email`,clint_ad_postcode,clint_ad_address,`clint_ad_district`,`clint_ad_country`,`clint_payable`,`clint_paid`,`clint_total_purchase`,`clint_activity` FROM `tbl_clint` WHERE clint_id='$id'";
    $queary_execution=mysqli_query($con,$queary);
    $count=0;
    $data=mysqli_fetch_array($queary_execution);
        $db_name=$data['clint_name'];
        $db_phone1=$data['clint_phone1'];
        $db_phone2=$data['clint_phone2'];
        $db_email=$data['clint_email'];
        $db_address=$data['clint_ad_address'];
        $db_district=$data['clint_ad_district'];
        $db_country=$data['clint_ad_country'];
        $db_post=$data['clint_ad_postcode'];
        $db_id=$data['clint_id'];
        
        $db_payable=$data['clint_payable'];
        $db_paid=$data['clint_paid'];
        $db_purchase=$data['clint_total_purchase'];
        $count++;
?>


<div class="m-b-5px row">
    <label for="exampleInputuname3" class="col-sm-1 control-label">Full Name</label>
    <div class="col-sm-4">
        <div class="input-group">
            <span class="input-group-text"><i class="ti-user"></i></span>
            <input type="text" class="form-control" id="clint_id" name="clint_id"  hidden value="<?php echo $db_id; ?>">
            <input type="text" class="form-control" id="clint_name" name="clint_name"  value="<?php echo $db_name; ?>">
        </div>
    </div>
    <div class="col-sm-1"></div>
    <label for="exampleInputEmail3" class="col-sm-1 control-label">Email</label>
    <div class="col-sm-4">
        <div class="input-group">
            <span class="input-group-text"><i class="ti-email"></i></span>
            <input type="email" class="form-control" id="clint_email" name="clint_email" value="<?php echo $db_email; ?>">
        </div>
    </div>
</div>
<div class="m-b-5px row">
    <label class="form-label col-sm-1 control-label" for="web">Phone 1</label>
    <div class="col-sm-4">
        <div class="input-group">
            <span class="input-group-text"><i class="ti-world"></i></span>
            <input type="text" class="form-control" id="clint_phone1" name="clint_phone1"  value="<?php echo $db_phone1; ?>">
        </div>
    </div>
    <div class="col-sm-1"></div>
    <label class="form-label col-sm-1 control-label" for="web">Phone 2</label>
    <div class="col-sm-4">
        <div class="input-group">
            <span class="input-group-text"><i class="ti-world"></i></span>
            <input type="text" class="form-control"id="clint_phone2" name="clint_phone2"  value="<?php echo $db_phone2; ?>">
        </div>
    </div>
</div>
<div class="m-b-5px row">
    <label class="form-label col-sm-1 control-label" for="web">Address</label>
    <div class="col-sm-4">
        <div class="input-group">
            <span class="input-group-text"><i class="ti-world"></i></span>
            <input type="text" class="form-control" id="clint_address" name="clint_address" value="<?php echo $db_address; ?>">
        </div>
    </div>
    <div class="col-sm-1"></div>
    <label class="form-label col-sm-1 control-label" for="web">District</label>
    <div class="col-sm-4">
        <div class="input-group">
            <span class="input-group-text"><i class="ti-world"></i></span>
            <input type="text" class="form-control" id="clint_district" name="clint_district"  value="<?php echo $db_district; ?>">
        </div>
    </div>
</div>
<div class="m-b-5px row">
    <label class="form-label col-sm-1 control-label" for="web">Country</label>
    <div class="col-sm-4">
        <div class="input-group">
            <span class="input-group-text"><i class="ti-world"></i></span>
            <input type="text" class="form-control"  id="clint_country" name="clint_country"  value="<?php echo $db_country; ?>">
        </div>
    </div>
    <div class="col-sm-1"></div>
    <label class="form-label col-sm-1 control-label" for="web">Post Code</label>
    <div class="col-sm-4">
        <div class="input-group">
            <span class="input-group-text"><i class="ti-world"></i></span>
            <input type="text" class="form-control" id="clint_postcode" name="clint_postcode" value="<?php echo $db_post; ?>">
        </div>
    </div>
</div>