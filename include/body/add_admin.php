<?php include('include/database/checkmanager.php');?>
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles margin-0">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Enter Admin Information</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Admin</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

<div class="card padding-20 margin-20">
    <div class="card-body">
        <form id="userentry" class="form pt-3">
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="form-label">User Name</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon11">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label">Role</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-medall-alt"></i></span>
                        <select name="role" id="role" class="form-control form-select">
                            <option selected disabled>Select</option>
                            <option value="M">Manager</option>
                            <option value="O">Oaretor</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label">Activity</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-pin2"></i></span>
                        <select name="activity" id="activity" class="form-control form-select">
                            <option selected disabled>Select</option>
                            <option value="A">Active</option>
                            <option value="I">Inactive</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label class="form-label">Full Name</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon11">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label class="form-label">Phone Number</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="icon-phone"></i></span>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number" aria-label="Username" aria-describedby="basic-addon11">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label class="form-label">Password</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon33"><i class="ti-lock"></i></span>
                        <input type="text" name="password1" id="password1" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon33">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label class="form-label">Confirm Password</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon4"><i class="ti-lock"></i></span>
                        <input type="text" name="password2" id="password2" class="form-control" placeholder="Confirm Password" aria-label="Password" aria-describedby="basic-addon4">
                    </div>
                </div>
            </div>

            <button type="button" onclick="entryUSER()" class="btn btn-success me-2 text-white float-end">Register</button>
            
        </form>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content top-margin-20">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">USER ENTRY</h5>
        <button type="button" onclick="closemodal()" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body center-element">
            <img src="assets/images/additional/success.gif">
            <h4>Admin Added Sucessfully</h4>
      </div>
      <div class="modal-footer">
        <button type="button" onclick="closemodal()" class="btn btn-secondary" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>