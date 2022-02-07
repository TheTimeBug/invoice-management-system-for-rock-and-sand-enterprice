<link rel="stylesheet" type="text/css" href="assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
<link rel="stylesheet" type="text/css" href="assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
<script src="include/function/js/datatable_page.js"></script>

<div class="row page-titles margin-0">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Manage Invoice</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Invoice</li>
            </ol>
        </div>
    </div>
</div>
<?php  include('config/connection.php'); 
        $data_queary = "SELECT SUM(invoice_total_price) AS payable,SUM(invoice_paid) AS paid,SUM(invoice_transpot_price) AS transport,SUM(invoice_tax_ammount) AS tax, COUNT(invoice_tax_ammount) AS counts, SUM(invoice_discount_ammount) AS discount, SUM(invoice_products_price) AS product FROM `tbl_invoice` WHERE invoice_date>DATE_FORMAT(curdate(),'%Y-01-01')  AND invoice_activity='A'";
        $queary_data = mysqli_query($con, $data_queary);

        $get_data = mysqli_fetch_array($queary_data);
        $payable = $get_data['payable'];
        $paid = $get_data['paid'];
        $tax = $get_data['tax'];
        $transport = $get_data['transport'];
        $rows = $get_data['counts'];
        $discount = $get_data['discount'];
        $product = $get_data['product'];
        $due = $payable- $paid;
?>
<div class="row margin-20-non_bottom">
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Total Payable</h4>
                <div class="text-end"> <span class="text-muted"></span>
                    <h1 class="font-light"> <?php echo number_format((float)$payable, 2, '.', '');?></h1>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Total Paid</h4>
                <div class="text-end"> <span class="text-muted"></span>
                    <h1 class="font-light"> ৳<?php echo number_format((float)$paid, 2, '.', ''); ?></h1>
                </div>
                
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Transport </h4>
                <div class="text-end"> <span class="text-muted"></span>
                    <h1 class="font-light"> ৳<?php echo number_format((float)$transport, 2, '.', ''); ?></h1>
                </div>
                
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Total Due</h4>
                <div class="text-end"> <span class="text-muted"></span>
                    <h1 class="font-light"> ৳<?php echo number_format((float)$due, 2, '.', '');?></h1>
                </div>
                
                
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<div class="row margin-20-non_bottom">
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Total Invoice</h4>
                <div class="text-end"> <span class="text-muted"></span>
                    <h1 class="font-light"> <?php echo $rows;?></h1>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Only Product sold</h4>
                <div class="text-end"> <span class="text-muted"></span>
                    <h1 class="font-light"> ৳<?php echo number_format((float)$product, 2, '.', ''); ?></h1>
                </div>
                
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Discount </h4>
                <div class="text-end"> <span class="text-muted"></span>
                    <h1 class="font-light"> ৳<?php echo number_format((float)$discount, 2, '.', ''); ?></h1>
                </div>
                
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tax</h4>
                <div class="text-end"> <span class="text-muted"></span>
                    <h1 class="font-light"> ৳<?php echo number_format((float)$tax, 2, '.', '');?></h1>
                </div>
                
                
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>



<div class="row">
    <div class="col-12">
        <div class="card margin-20">
            <div class="card-body">
                <h4 class="card-title"></h4>
                <h6 class="card-subtitle"></h6>
                <div class="table-responsive m-t-40">

                    <?php
                    include('config/connection.php');
                    $queary = "SELECT invoice_id,`clint_id`,`invoice_tax_parcent`,`invoice_tax_ammount`,`invoice_discount_parcent`,`invoice_discount_ammount`,`invoice_products_price`,`invoice_paid`,`invoice_total_price`,`invoice_transpot_price`,`invoice_date` FROM `tbl_invoice` WHERE invoice_date>DATE_FORMAT(curdate(),'%Y-01-01')  AND invoice_activity='A' ORDER BY `invoice_date` DESC;";
                    $queary_execution = mysqli_query($con, $queary);
                    $count = 0;
                    ?>
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
                            while ($data = mysqli_fetch_array($queary_execution)) {
                                $db_id = $data['invoice_id'];
                                $db_tax_p = $data['invoice_tax_parcent'];
                                $db_tax_a = $data['invoice_tax_ammount'];
                                $db_discount_p = $data['invoice_discount_parcent'];
                                $db_discount_a = $data['invoice_discount_ammount'];
                                $db_product_price = $data['invoice_products_price'];
                                $db_paid = $data['invoice_paid'];
                                $db_total_price = $data['invoice_total_price'];
                                $db_transport = $data['invoice_transpot_price'];
                                $db_data = $data['invoice_date'];
                                $db_client = $data['clint_id'];
                                $count++;

                            ?>

                                <tr>
                                    <td><?php echo $count; ?></td>
                                    <td><?php echo $db_data; ?></td>
                                    <td><?php echo  $db_client; ?></td>
                                    <td><?php echo $db_product_price; ?></td>
                                    <td><?php echo  $db_discount_a . "(" . $db_discount_p . "pc)";   ?></td>
                                    <td><?php echo   $db_tax_a . "(" . $db_tax_p . "%)";  ?></td>
                                    <td><?php echo $db_transport; ?></td>
                                    <td><?php echo $db_total_price; ?></td>
                                    <td><?php echo $db_total_price - $db_paid; ?></td>
                                    <td>
                                    <a class="text-inverse p-r-10" target="_blank" href="invoiceopen.php?invoice_id=<?php echo $db_id ?>"><i class="ti-eye"></i></a>
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





<script src="assets/node_modules/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--stickey kit -->
<script src="assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- This is data table -->

<!-- end - This is for export functionality only -->
<script>
    $(function() {
        $('#myTable').DataTable();
        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function(settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                        last = group;
                    }
                });
            }
        });
        // Order by the grouping
        $('#example tbody').on('click', 'tr.group', function() {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
        // responsive table
        $('#config-table').DataTable({
            responsive: true
        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary me-1');
    });
</script>




<!--Update Modal -->
<div class="modal fade" id="updateMODAL" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog width-900" role="document">
        <div class="modal-content top-margin-20">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">USER ENTRY</h5>
                <button type="button" onclick="driver_update_modal_close()" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="modalbody" class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" onclick="driver_update_modal_close()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" onclick="driver_data_update()" class="btn btn-secondary" data-dismiss="modal">Update</button>
            </div>
        </div>
    </div>
</div>
<!--Delete Modal -->
<div class="modal fade" id="deleteMODAL" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog width-900" role="document">
        <div class="modal-content top-margin-20">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete USER</h5>
                <button type="button" onclick="truck_delete_modal_close()" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="deleteModal" class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" onclick="truck_delete_modal_close()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" onclick="truck_data_delete()" id="deletebtn" class="btn btn-secondary" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>