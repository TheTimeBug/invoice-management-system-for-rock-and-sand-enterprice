<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles margin-0">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Enter Truck Information</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Truck</li>
            </ol>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->

<div class="card padding-20 margin-20">
    <div class="card-body">
        <form id="Truckentry" class="form pt-3">
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="form-label">License No.</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-truck"></i></span>
                        <input type="text" name="license" id="license" class="form-control" placeholder="License No" aria-label="license" aria-describedby="basic-addon11">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label">Owner Name</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon11">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label">Owner Phone No</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="icon-phone"></i></span>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone No" aria-label="Username" aria-describedby="basic-addon11">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="form-label">Height</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11">ft</span>
                        <input type="text" name="hft" id="hft" class="form-control" placeholder="Height in feet" aria-label="license" aria-describedby="basic-addon11">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11">in</span>
                        <input type="text" name="hin" id="hin" class="form-control" placeholder="Height in inch" aria-label="license" aria-describedby="basic-addon11">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label">Width</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11">ft</span>
                        <input type="text" name="wft" id="wft" class="form-control" placeholder="Weidth  in feet" aria-label="license" aria-describedby="basic-addon11">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11">in</span>
                        <input type="text" onchange="cubicFEET()" name="win" id="win" class="form-control" placeholder="Weidth in inch" aria-label="license" aria-describedby="basic-addon11">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label">Length</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11">ft</span>
                        <input type="text" name="lft" id="lft" class="form-control" placeholder="Length in feet" aria-label="license" aria-describedby="basic-addon11">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11">in</span>
                        <input type="text" onchange="cubicFEET()" name="lin" id="lin" class="form-control" placeholder="Weidth  in inch" aria-label="license" aria-describedby="basic-addon11">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4"></div>
                <div class="form-group col-md-4">
                    <button type="button" onclick="cubicFEET()" class="btn w-100px btn-outline-info float-end">Calculate</button>
                </div>
                <div class="form-group col-md-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11">Volume</span>
                        <input type="text" name="volume" id="volume" class="form-control" placeholder="Auto fill up " aria-label="license" aria-describedby="basic-addon11">
                    </div>
                </div>
            </div>

            <button type="button" onclick="entryTRUCK()" class="btn btn-success me-2 text-white float-end">Register</button>
            <!-- Button trigger modal -->
            
        </form>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content top-margin-20">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">USER ENTRY</h5>
                <button type="button" onclick="closeTruckPageModal()" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body center-element">
                <img src="assets/images/additional/success.gif">
                <h4>Truck Added Sucessfully</h4>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="closeTruckPageModal()" class="btn btn-secondary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>