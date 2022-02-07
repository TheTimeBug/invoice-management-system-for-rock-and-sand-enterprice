<link rel="stylesheet" type="text/css" href="assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
<link rel="stylesheet" type="text/css" href="assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
<script src="include/function/js/datatable_page.js"></script>

<div class="row page-titles margin-0">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Manage Product</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Product</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card margin-20">
            <div class="card-body">
                <h4 class="card-title"></h4>
                <h6 class="card-subtitle"></h6>
                <div class="table-responsive m-t-40">

                <?php
                    
                ?>
                    <table id="myTable" class="table product-overview">
                        <thead>
                            <tr>
                            <th>Sr.No.</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Purchase</th>
                                <th>Due</th>
                                <th>Activity</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                         include('config/connection.php');
                         $queary="SELECT `clint_id`,`clint_name`,`clint_phone1`,`clint_phone2`,`clint_email`,`clint_ad_district`,`clint_ad_country`,`clint_payable`,`clint_paid`,`clint_total_purchase`,`clint_activity` FROM `tbl_clint` WHERE clint_activity!='D' ORDER BY clint_total_purchase ASC";
                         $queary_execution=mysqli_query($con,$queary);
                         $count=0;
                         while($data=mysqli_fetch_array($queary_execution)){
                             $db_name=$data['clint_name'];
                             $db_phone1=$data['clint_phone1'];
                             $db_phone2=$data['clint_phone2'];
                             $db_id=$data['clint_id'];
                             $db_email=$data['clint_email'];
                             $db_district=$data['clint_ad_district'];
                             $db_country=$data['clint_ad_country'];
                             $db_payable=$data['clint_payable'];
                             $db_paid=$data['clint_paid'];
                             $db_purchase=$data['clint_total_purchase'];
                             $db_activity=$data['clint_activity'];

                             $count++;
                           
                        ?>
                        
                            <tr>
                            <td><?php echo $count; ?></td>
                                <td><?php echo $db_name; ?></td>
                                <td>
                                    <?php echo $db_phone1; ?>
                                    <br>
                                    <?php echo $db_phone2; ?>
                                </td>
                                <td><?php echo  $db_email ?></td>
                                <td><?php echo  $db_district.' , '.$db_country; ?></td>
                                <td><?php echo  $db_payable.' ('.$db_purchase.')'; ?></td>
                                <td><?php echo  $db_payable-$db_paid; ?></td>
                                <td>
                                    <?php
                                            if ($db_activity == 'A') {
                                                echo '<span class="label label-success">active</span>';
                                            } else if ($db_activity == 'I') {
                                                echo '<span class="label label-danger">inactive</span>';
                                            }
                                    ?>
                                </td>
                                <td>
                                    <a onclick="client_update_modal(<?php echo $db_id; ?>)" class="text-inverse p-r-10" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a>
                                    <a onclick="client_delete_modal_op(<?php echo $db_id; ?>)" class="text-inverse p-r-10" title="" data-bs-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a>
                                
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
    $(function () {
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
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
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
        <div class="modal-content top-margin-5">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Client Update</h5>
                <button type="button" onclick="driver_update_modal_close()" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="modalbody" class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" onclick="driver_update_modal_close()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" onclick="client_data_update()" class="btn btn-secondary" data-dismiss="modal">Update</button>
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
                <button type="button" onclick="product_delete_modal_close()" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="deleteModalX" class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" onclick="product_delete_modal_close()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" onclick="client_data_delete()" id="deletebtn" class="btn btn-secondary" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>