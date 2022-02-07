<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles margin-0">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Enter Driver Information</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Driver</li>
            </ol>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->

<div class="card padding-20 margin-20">
    <div class="card-body">
        <form id="DRIVERentry" class="form pt-3">
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="form-label">Driver Name</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon11">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label">Driver Phone 1</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="icon-phone"></i></span>
                        <input type="text" name="phone1" id="phone1" class="form-control" placeholder="Phone 1" aria-label="Username" aria-describedby="basic-addon11">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label">Driver Phone 2</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="icon-phone"></i></span>
                        <input type="text" name="phone2" id="phone2" class="form-control" placeholder="Phone 2" aria-label="license" aria-describedby="basic-addon11">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-8">
                    <label class="form-label">Address</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-home"></i></span>
                        <input type="text" name="address" id="address" class="form-control" placeholder="Home Address" aria-label="license" aria-describedby="basic-addon11">
                    </div>
                </div>
                <div class="form-group col-md-4">
                </div>
            </div>

            <button type="button" onclick="entryDriver()" class="btn btn-success me-2 text-white float-end">Register</button>
            <!-- Button trigger modal -->
            <button type="button" onclick="openDriverPageModal()" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
            </button>
        </form>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="DriverPageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content top-margin-20">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">USER ENTRY</h5>
                <button type="button" onclick="closeDriverPageModal()" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body center-element">
                <img src="assets/images/additional/success.gif">
                <h4>Driver Added Sucessfully</h4>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="closeDriverPageModal()" class="btn btn-secondary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>