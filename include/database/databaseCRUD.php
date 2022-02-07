<?php
 session_start();
    include('../../config/connection.php');

    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '1234567891011121';
    $PrivateKey_key = "wkt567r";
    function encrypt($text){
        $encryption = openssl_encrypt($text, $GLOBALS['ciphering'],
        $GLOBALS['PrivateKey_key'], $GLOBALS['options'], $GLOBALS['encryption_iv']);
        return $encryption;
    }

    extract($_POST);
    $d=strtotime("+6 Hours");
    $date = date('Y-m-d H:i:s',$d);
   
    $admin_id= $_SESSION['userid'];
   
    //admin
    //admin
    if($operation=="admin_entry"){
        $password = encrypt($password1);
        $query="INSERT INTO tbl_user (user_id, user_username, user_password, user_name, user_phone, user_role, user_active_flag, user_crate_by, user_crate_at, user_update_by, user_update_at) 
                                VALUES (NULL, '$username', '$password', '$name', '$phone', '$role', '$activity', '$admin_id', '$date', NULL, NULL)";
        $query_perfprmed=mysqli_query($con,$query);
        if($query_perfprmed){
            echo "Admin entry Sucessful";
        }
    }
    else if($operation=="admin_data_update"){
        $query="UPDATE tbl_user SET 
                user_username = '$username',
                user_name = '$name', 
                user_phone = '$phone', 
                user_role = '$role',
                user_active_flag = '$state',
                user_update_by = '$admin_id', 
                user_update_at = '$date'
                WHERE tbl_user.user_id = '$id'" ;
        
        $query_execute = mysqli_query($con,$query);
        if($query_execute){
            echo "Admin update Sucessful";
        }
        else{
            echo "Something Wrong on update";
        }
    }
    else if($operation=="admin_data_delete"){
        $query= "UPDATE tbl_user SET user_active_flag = 'D' WHERE user_id = $dlt_id";
        $query_execute = mysqli_query($con,$query);
        if($query_execute){
            echo "Admin Delete Sucessful";
        }
        else{
            echo "Something Wrong on Delete";
        }
    }

    //driver
    //driver
    else if($operation=="driver_entry"){
        $query="INSERT INTO tbl_driver (driver_id, driver_name, driver_phone1, driver_phone2, driver_address, driver_payable, driver_paid, driver_trip, driver_crate_by, driver_crate_at, driver_update_by, driver_update_at) 
                                VALUES (NULL, '$name', '$phone1', '$phone2', '$address', '0', '0', '0', '$admin_id', '$date', NULL, NULL)";
        $query_execute  = mysqli_query($con,$query);
        if($query_execute ){
            echo "Driver addition Sucessful";
        }
        else {
            echo "Something Wrong on Driver addition";
        }
    }else if($operation=="driver_data_update"){
        $query="UPDATE `tbl_driver` SET  
        `driver_name` = '$name', 
        `driver_phone1` = '$phone1',
         `driver_phone2` = '$phone2', 
         `driver_address` = '$address', 
          `driver_update_by` = '$admin_id', 
          `driver_update_at` = '$date' 
          WHERE `tbl_driver`.`driver_id` = '$id'" ;
        $query_execute = mysqli_query($con,$query);
        if($query_execute){
            echo "truck update Sucessful";
        }
        else{
            echo "Something Wrong on update";
        }
    } else if($operation=="driver_data_delete"){
        $query="UPDATE `tbl_driver` SET `driver_activity`='D' WHERE `driver_id`='$id'";
        $query_execute  = mysqli_query($con,$query);
        if($query_execute ){
            echo "Driver deletation Sucessful";
        }
        else {
            echo "Something Wrong on Driver deletation";
        }
    }



    //product
    //product
    else if($operation=="product_entry"){
        $query="INSERT INTO tbl_product (product_id, product_name, product_size, product_type, product_details, product_price, product_units_sold, product_units_sold_this_price,product_activity, product_crate_by, product_crate_at, product_update_by, product_update_at) 
                                VALUES (NULL, '$name', '$size', '$type', '$details', '$price', '0', '0','$activity', '$admin_id', '$date', NULL, NULL)";
        $query_execute  = mysqli_query($con,$query);
        if($query_execute ){
            echo "Product addition Sucessful";
        }
        else {
            echo "Something Wrong on Product addition";
        }
    }else if($operation=="product_data_update"){
        $query="UPDATE `tbl_product` SET `product_name` = '$name',
         `product_size` = '$size',
          `product_type` = '$type',
           `product_details` = '$details',
            `product_price` = '$price',
             `product_activity` = '$activity',
              `product_update_by` = '$admin_id', 
              `product_update_at` = '$date' 
        WHERE `tbl_product`.`product_id` = '$id'" ;
        $query_execute = mysqli_query($con,$query);
        if($query_execute){
            echo "product update Sucessful";
        }
        else{
            echo "Something Wrong on update";
        }
    }   else if($operation=="product_data_delete"){
        $query="UPDATE `tbl_product` SET `product_activity`='D' WHERE `product_id`='$id'";
        $query_execute  = mysqli_query($con,$query);
        if($query_execute ){
            echo "Product deletation Sucessful";
        }
        else {
            echo "Something Wrong on Product deletation";
        }
    }



    //client
    //client
    else if($operation=="client_entry"){
        $query="INSERT INTO tbl_clint (clint_id, clint_name, clint_phone1, clint_phone2, clint_email, clint_ad_address, clint_ad_district, clint_ad_postcode, clint_ad_country, clint_payable, clint_paid, clint_total_purchase, clint_activity, clint_crate_by, clint_create_at, clint_update_by, clint_update_at) 
                                VALUES (NULL, '$clint', '$phone1', '$phone2', '$email', '$address','$district','$postcode','$country', '0', '0', '0', 'A', '$admin_id', '$date', NULL, null)";
        $query_execute  = mysqli_query($con,$query);
        if($query_execute ){
            echo "Client addition Sucessful";
        }
        else {
            echo "Something Wrong on Client addition";
        }
    }else if($operation=="client_data_update"){
        $query="UPDATE `tbl_clint` 
        SET `clint_name` = '$clint',
        `clint_phone1` = '$phone1', 
        `clint_phone2` = '$phone2',
         `clint_email` = '$email', 
         `clint_ad_address` = '$address',
          `clint_ad_district` = '$district', 
          `clint_ad_country` = '$country',
           `clint_ad_postcode` = '$postcode',
             `clint_update_by` = '$admin_id',
              `clint_update_at` = '$date'
               WHERE `tbl_clint`.`clint_id` = '$id'" ;
        $query_execute = mysqli_query($con,$query);
        if($query_execute){
            echo "client update Sucessful";
        }
        else{
            echo "Something Wrong on update";
        }
    } 
    else if($operation=="client_data_delete"){
        $query="UPDATE `tbl_clint` SET `clint_activity`='D' WHERE `clint_id`='$id'";
        $query_execute  = mysqli_query($con,$query);
        if($query_execute ){
            echo "Client deletation Sucessful";
        }
        else {
            echo "Something Wrong on client deletation";
        }
    }


    //truck
    //truck
    else if($operation=="truck_entry"){
        $h = $hft+($hin/12);
        $w = $wft+($win/12);
        $l = $lft+($lin/12);
        $query = "INSERT INTO tbl_truck (truck_id, truck_license_no, truck_owner_name, truck_owner_phone, truck_trip_number, truck_height, truck_width, truck_length, truck_volume, truck_crate_by, truck_create_at, truck_update_by, truck_update_at) 
                                VALUES (NULL, '$license', '$name', '$phone', '0', '$h', '$w', '$l', '$volume', '$admin_id', '$date', NULL, NULL)";
        //echo $query;
        $query_execute  = mysqli_query($con,$query);
        if($query_execute ){
            echo "Truck addition Sucessful";
        }
        else {
            echo "Something Wrong on Truck addition";
        }
    }
    else if($operation=="truck_data_delete"){
        $query="UPDATE `tbl_truck` SET `truck_activity`='D' WHERE `truck_id`= '$id'";
        $query_execute  = mysqli_query($con,$query);
        if($query_execute ){
            echo "Truck deletation Sucessful";
        }
        else {
            echo "Something Wrong on truck deletation";
        }
    }else if($operation=="truck_data_update"){
        $h = $hft+($hin/12);
        $w = $wft+($win/12);
        $l = $lft+($lin/12);
        $query="UPDATE `tbl_truck` SET 
        `truck_license_no` = '$license', 
        `truck_owner_name` = '$name', 
        `truck_owner_phone` = '$phone', 
        `truck_height` = '$h', 
        `truck_width` = '$w', 
        `truck_length` = '$l',
         `truck_volume` = '$volume',
          `truck_update_by` = '$admin_id',
           `truck_update_at` = '$date' 
        WHERE `tbl_truck`.`truck_id` = '$id'" ;
        $query_execute = mysqli_query($con,$query);
        if($query_execute){
            echo "truck update Sucessful";
        }
        else{
            echo "Something Wrong on update";
        }
    }

        //invoice 
        //
    else if($operation=="move_invoice_trash"){
        $query="UPDATE tbl_invoice SET invoice_activity = 'T' WHERE invoice_id = $id";
        $query_execute  = mysqli_query($con,$query);
        //echo $query;
        if($query_execute ){
            echo "moved to trash";
        }
        else {
            echo "Something Wrong on move to track deletation";
        }
    }
    else if($operation=="move_invoice_active"){
        $query="UPDATE tbl_invoice SET invoice_activity = 'A' WHERE invoice_id = $id";
        $query_execute  = mysqli_query($con,$query);
        //echo $query;
        if($query_execute ){
            echo "moved to active";
        }
        else {
            echo "Something Wrong on move to track deletation";
        }
    }
    else if($operation=="move_invoice_delete"){
        $query="UPDATE tbl_invoice SET invoice_activity = 'D' WHERE invoice_id = $id";
        $query_execute  = mysqli_query($con,$query);
        //echo $query;
        if($query_execute ){
            echo "move_invoice_delete";
        }
        else {
            echo "Something Wrong on move to track deletation";
        }
    }
