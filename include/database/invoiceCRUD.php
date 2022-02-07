<?php
 session_start();
    include('../../config/connection.php');

    extract($_POST);
    $d=strtotime("+5 Hours");
    $date = date('Y-m-d H:i:s',$d);

    $admin_id= $_SESSION['userid'];
   
    
    if($operation=="client"){
        $query="INSERT INTO tbl_clint (clint_id, clint_name, clint_phone1, clint_phone2, clint_email, clint_ad_address, clint_ad_district, clint_ad_postcode, clint_ad_country, clint_payable, clint_paid, clint_total_purchase, clint_activity, clint_crate_by, clint_create_at, clint_update_by, clint_update_at) 
                                VALUES (NULL, '$name', '$phone1', '$phone2', '$email', '$address','$district','$post','$country', '0', '0', '0', 'A', '$admin_id', '$date', NULL, null)";
        $query_execute  = mysqli_query($con,$query);
        $last_id = $con->insert_id;
        $_SESSION['client_last_id'] = $last_id;
        if($query_execute ){
           // echo 'done '.$last_id;
        }
        else {
            echo "Something Wrong on Client addition";
        }
    }else if($operation=="invoice"){
       // $last_id= $_SESSION['client_last_id'];
         if($new_clint=="true"){
             $clint_id = $_SESSION['client_last_id'];
         }
        $id6digit=sprintf("%06d", $clint_id);
        $invoice_id =date('YmdHi',$d).$id6digit;
        //echo $invoice_id;
        $only_date= date('Y-m-d',$d);
        $query  = "INSERT INTO `tbl_invoice` (`invoice_id`, `clint_id`, `invoice_tax_parcent`, `invoice_tax_ammount`, `invoice_discount_parcent`, `invoice_discount_ammount`, `invoice_products_price`, `invoice_transpot_price`, `invoice_total_price`, `invoice_date`, `invoice_ceate_by`, `invoice_crate_at`, `invoice_update_by`, `invoice_update_at`,invoice_activity) VALUES ('$invoice_id', '$clint_id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$only_date', '$admin_id', '$date', NULL, NULL,'A')";
        $query_execute  = mysqli_query($con,$query);
        if($query_execute ){
           // echo "Sucessfull invoice 1\n";
        }
        else {
            echo "Something Wrong invoice 1\n";
        }

        $_SESSION['invoice'] = $invoice_id;
    }else if($operation=="product"){
        $invoice_id = $_SESSION['invoice'];
        
        if($driver==0){
            $driver_type = "C";
        }else{
            $driver_type = "R";
        }
        $query  = "INSERT INTO `tbl_item` (`item_id`, `invoice_id`, `item_product_id`, `item_unite_price`, `item_hft`, `item_hin`, `item_wft`, `item_win`, `item_lft`, `item_lin`, `item_volume`, `item_price`, `item_truck_owner`, `item_license`, `item_driver_owner`, `item_driver`, `item_crate_by`, `item_crate_time`, `item_update_by`, `item_update_time`,item_transport_cost) VALUES (NULL, '$invoice_id', '$proId', '$unitePrice', '$hft', '$hin', '$wft', '$win', '$lft', '$lin', '$volume', '$proPrice', '$truckOwner', '$license', '$driver_type', '$driver', '$admin_id', '$date', NULL, NULL,'$truckRent')";
       // echo $query;
        $query_execute  = mysqli_query($con,$query);
        if($query_execute ){
           // echo "Sucessfull product 1\n";
        }
        else {
            echo "Something Wrong product 1\n";
        }

        $query_product = "UPDATE `tbl_product` SET `product_units_sold` = `product_units_sold`+1 WHERE `product_id` = '$proId'";
        //echo $query_product;
        $query_execute  = mysqli_query($con,$query_product);
        if($query_execute ){
            //echo "Sucessfull product 2\n";
        }
        else {
            echo "Something Wrong product 2\n";
        }
        if($driver_type=="R"){
            $quary_driver_trip = "UPDATE `tbl_driver` SET `driver_trip` = `driver_trip`+1 WHERE `driver_id` = '$driver'";
            //echo $quary_driver_trip ;
            $query_execute  = mysqli_query($con,$quary_driver_trip);
            if($query_execute ){
                //echo "Sucessfull product 3\n";
            }
            else {
                echo "Something Wrong product 3\n";
            }
        }
        if($truckOwner=="R"){
            $quary_truck_trip = "UPDATE `tbl_truck` SET `truck_trip_number`=`truck_trip_number`+1 WHERE `truck_id`='$license'";
            //echo $quary_truck_trip ;
            $query_execute  = mysqli_query($con,$quary_truck_trip);
            if($query_execute ){
               // echo "Sucessfull product 4\n";
            }
            else {
                echo "Something Wrong product 4\n";
            }
        }
    }else if($operation=="update_invoice"){
        $invoice_id = $_SESSION['invoice'];

        $query = "UPDATE `tbl_invoice` SET `invoice_tax_parcent`='$tax_p',`invoice_tax_ammount`='$tax_a',`invoice_discount_parcent`='$discount_p',`invoice_discount_ammount`='$discount_a',`invoice_products_price`='$product_price',`invoice_transpot_price`='$transport_cost',`invoice_total_price`='$invoice_price',invoice_paid = '$paid' WHERE `invoice_id`= '$invoice_id'";
        //echo $query;
        $query_execute  = mysqli_query($con,$query);
        if($query_execute ){
           // echo "Sucessfull update_invoice 1\n";
        }
        else {
            echo "Something Wrong update_invoice 1\n";
        }

        if($new_clint=="true"){
            $clint_id = $_SESSION['client_last_id'];
        }
        $query ="UPDATE `tbl_clint` SET `clint_payable`=`clint_payable`+'$invoice_price' , `clint_paid`=`clint_paid`+'$paid' ,`clint_total_purchase`=`clint_total_purchase`+1 WHERE `clint_id` = '$clint_id'";
        $query_execute  = mysqli_query($con,$query);
        //echo $query;
        if($query_execute ){
           // echo "Sucessfull update_invoice 2\n";
        }
        else {
            echo "Something Wrong update_invoice 2\n";
        }
        $_SESSION['client_last_id'] =0;
        echo "Sucessfull";
    }


?>