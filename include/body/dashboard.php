<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Dashboard</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="fa fa-plus-circle"></i> Create New</button>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Info box Content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body center-element height-200">
                    <img src="assets/images/additional/robot.gif" alt="broken" height="150px">
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body center-element height-200">
                    <h4>Welcome to Invoice Management System </h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body center-element height-200">
                    <img src="assets/images/additional/robot.gif" alt="broken" height="150px">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Flagged Invoice</h5>
                    <div class="table-responsive m-t-30">
                    <table id="myTable" class="table product-overview">
                        <thead>
                            <tr>
                                <th>Sr.No.</th>
                                <th>Date</th>
                                <th>Client </th>
                                <th>Product cost</th>
                                <th>Discount</th>
                                <th>Tax</th>
                                <th>Transport</th>
                                <th>Total Cost</th>
                                <th>Due</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                          include('config/connection.php');
                          $queary="SELECT invoice_id,`clint_id`,`invoice_tax_parcent`,`invoice_tax_ammount`,`invoice_discount_parcent`,`invoice_discount_ammount`,`invoice_products_price`,`invoice_paid`,`invoice_total_price`,`invoice_transpot_price`,`invoice_date` FROM `tbl_invoice` WHERE invoice_activity='T'";
                          $queary_execution=mysqli_query($con,$queary);
                          $count=0;
                            while($data=mysqli_fetch_array($queary_execution)){
                                $db_id = $data['invoice_id'];
                                $db_tax_p=$data['invoice_tax_parcent'];
                                $db_tax_a=$data['invoice_tax_ammount'];
                                $db_discount_p=$data['invoice_discount_parcent'];
                                $db_discount_a=$data['invoice_discount_ammount'];
                                $db_product_price=$data['invoice_products_price'];
                                $db_paid=$data['invoice_paid'];
                                $db_total_price=$data['invoice_total_price'];
                                $db_transport=$data['invoice_transpot_price'];
                                $db_data=$data['invoice_date'];
                                $db_client=$data['clint_id'];
                                $count++;
                           
                        ?>
                        
                            <tr>
                                <td><?php echo $count; ?></td>
                                <td><?php echo $db_data; ?></td>
                                <td><?php echo  $db_client; ?></td>
                                <td><?php echo $db_product_price; ?></td>
                                <td><?php echo  $db_discount_a ."(".$db_discount_p."pc)";   ?></td>
                                <td><?php echo   $db_tax_a ."(".$db_tax_p."%)";  ?></td>
                                <td><?php echo $db_transport; ?></td>
                                <td><?php echo $db_total_price; ?></td>
                                <td><?php echo $db_total_price- $db_paid; ?></td>
                                <td>
                                    <a class="text-inverse p-r-10" target="_blank" href="invoiceopen.php?invoice_id=<?php echo $db_id; ?>"><i class="ti-eye"></i></a>
                                    <a class="text-inverse p-r-10" onclick="move_invoice_delete(<?php echo $db_id; ?>)" ><i class="ti-trash"></i></a>
                                    <a class="text-inverse p-r-10" onclick="move_invoice_active(<?php echo $db_id; ?>)" ><i class="ti-hand-open"></i></a>
                                </td>
                            </tr>
                        <?php
                         }
                        ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>