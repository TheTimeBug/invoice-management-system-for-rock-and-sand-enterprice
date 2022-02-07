<?php include('include/database/checkmanager.php'); ?>
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Manage Admin</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Admin</li>
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
    <div id="admin_datatable" class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Admins Overview</h5>
                    <div class="table-responsive m-t-30">
                        <table class="table product-overview">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <?php
                            include('config/connection.php');
                            $count = 0;
                            $query = "SELECT user_username,user_id,user_name,user_phone,user_role,user_active_flag FROM tbl_user WHERE user_active_flag!='D' AND user_active_flag!='X' ;";
                            $query_performed = mysqli_query($con, $query);
                            while ($data = mysqli_fetch_array($query_performed)) {
                                $bd_username = $data['user_username'];
                                $db_name = $data['user_name'];
                                $db_phone = $data['user_phone'];
                                $db_role = $data['user_role'];
                                $db_statas = $data['user_active_flag'];
                                $db_id = $data['user_id'];
                                $count++;
                                $admin_id = $_SESSION['userid'];
                            ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $bd_username; ?></td>
                                        <td><?php echo $db_name; ?></td>
                                        <td><?php echo $db_phone; ?></td>
                                        <td><?php if ($db_role == "M") {
                                                echo "Maneger";
                                            } else if ($db_role == "O") {
                                                echo "Operatir";
                                            } ?></td>
                                        <td>
                                            <?php
                                            if ($db_statas == 'A') {
                                                echo '<span class="label label-success">active</span>';
                                            } else if ($db_statas == 'I') {
                                                echo '<span class="label label-danger">inactive</span>';
                                            }
                                            ?>
                                        </td>
                                        <td><a onclick="admin_update_modal(<?php echo $db_id; ?>)" class="text-inverse p-r-10" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a>
                                        <?php if($admin_id!=$db_id){
                                            ?>
                                                <a onclick="admin_delete_modal(<?php echo $db_id; ?>)" class="text-inverse" title="" data-bs-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a>
                                            <?php
                                        }?>
                                            
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
<!-- Modal -->
<div class="modal fade" id="updateMODAL" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog width-900" role="document">
        <div class="modal-content top-margin-20">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">USER ENTRY</h5>
                <button type="button" onclick="admin_update_modal_close()" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="modalbody" class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" onclick="admin_update_modal_close()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" onclick="admin_data_update()" class="btn btn-secondary" data-dismiss="modal">Update</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteMODAL" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog width-900" role="document">
        <div class="modal-content top-margin-20">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete USER</h5>
                <button type="button" onclick="admin_delete_modal_close()" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="modalbody2" class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" onclick="admin_delete_modal_close()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" onclick="admin_data_delete()" id="deletebtn" class="btn btn-secondary" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>