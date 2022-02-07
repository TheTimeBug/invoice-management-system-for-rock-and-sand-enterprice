<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
	<title></title>
</head>
<body>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
            <th>Sr. No.</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Total Pr.</th>
                <th>Due</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php 
            include('../../../config/connection.php');
            $queary="SELECT `clint_id`,`clint_name`,`clint_phone1`,`clint_phone2`,`clint_email`,`clint_ad_district`,`clint_ad_country`,`clint_payable`,`clint_paid`,`clint_total_purchase`,`clint_activity` FROM `tbl_clint` WHERE clint_activity!='D' ORDER BY clint_total_purchase ASC";
            $queary_execution=mysqli_query($con,$queary);
            $count=0;
            while($data=mysqli_fetch_array($queary_execution)){
                $db_name=$data['clint_name'];
                $db_phone1=$data['clint_phone1'];
                $db_phone2=$data['clint_phone2'];
                $db_id=$data['clint_id'];
                
                $db_payable=$data['clint_payable'];
                $db_paid=$data['clint_paid'];
                $db_purchase=$data['clint_total_purchase'];
                $count++;
        ?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $db_name; ?></td>
                <td><?php echo $db_phone1; ?><br><?php echo $db_phone2; ?></td>
                <td><?php echo $db_purchase; ?></td>
                <td><?php echo $db_payable-$db_paid; ?></td>
                <td><button onclick="select_clint(<?php echo $db_id; ?>)" type="submit" class="btn btn-primary text-white">Select</button></td>
            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Sr. No.</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Total Pr.</th>
                <th>Due</th>
                <th></th>
            </tr>
        </tfoot>
    </table>



<script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>
</body>
</html>