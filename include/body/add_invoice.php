<script src="include/function/js/lode_element.js"></script>
<script src="include/function/js/invoice_calculation.js"></script>
<script src="include/function/js/invoice2.js"></script>
<script src="include/function/js/invoice3.js"></script>
<script src="include/function/js/conformUSER.js"></script>
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles margin-0">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Create Invoice</h4>
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
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<form class="" id="invoice_form">
    <div class="card padding-20 margin-20">
        <div class="card" id="client_card">
            <div class="card-body">
                <h4 class="card-title">Client information</h4>
                <div class="m-b-5px row">
                    <label class="control-label col-md-1"><b>Client : </b></label>
                    <div class="col-md-5">
                        <div class="radio-list">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="radio" onclick="lode_ex_clint()" id="customRadio11" name="customRadio" class="form-check-input">
                                    <label class="form-check-label" for="customRadio11">Exesting Client</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="radio" onclick="close_btn()" id="customRadio22" name="customRadio" class="form-check-input">
                                    <label class="form-check-label" for="customRadio22">Relode</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6 class="card-subtitle"></h6>
                    <div id="client_field">
                        <div id="nameAS">
                            <div class="m-b-5px row">
                                <label for="exampleInputuname3" class="col-sm-1 control-label">Full Name*</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ti-user"></i></span>
                                        <input type="text" class="form-control" id="clint_id" name="clint_id" hidden value="0">
                                        <input type="text" id="clint_name" name="clint_name" class="form-control" id="fullNAME" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-sm-1"></div>
                                <label for="exampleInputEmail3" class="col-sm-1 control-label">Email*</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ti-email"></i></span>
                                        <input type="email" id="clint_email" name="clint_email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
                                    </div>
                                </div>
                            </div>
                            <div class="m-b-5px row">
                                <label class="form-label col-sm-1 control-label" for="web">Phone 1</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="icon-phone"></i></span>
                                        <input type="text" id="clint_phone1" name="clint_phone1" class="form-control" id="web" placeholder="Enter Primary Mobile No">
                                    </div>
                                </div>
                                <div class="col-sm-1"></div>
                                <label class="form-label col-sm-1 control-label" for="web">Phone 2</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="icon-phone"></i></span>
                                        <input type="text" id="clint_phone2" name="clint_phone2" class="form-control" id="web" placeholder="Enter mobile number 2">
                                    </div>
                                </div>
                            </div>
                            <div class="m-b-5px row">
                                <label class="form-label col-sm-1 control-label" for="web">Address</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ti-home"></i></span>
                                        <input type="text" id="clint_address" name="clint_address" class="form-control" id="web" placeholder="Enter Website Name">
                                    </div>
                                </div>
                                <div class="col-sm-1"></div>
                                <label class="form-label col-sm-1 control-label" for="web">District</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                        <input type="text" id="clint_district" name="clint_district" class="form-control" id="web" placeholder="Enter Website Name">
                                    </div>
                                </div>
                            </div>
                            <div class="m-b-5px row">
                                <label class="form-label col-sm-1 control-label" for="web">Country</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                        <input type="text" id="clint_country" name="clint_country" class="form-control" id="web" placeholder="Enter Website Name">
                                    </div>
                                </div>
                                <div class="col-sm-1"></div>
                                <label class="form-label col-sm-1 control-label" for="web">Post Code</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                        <input type="text" id="clint_postcode" name="clint_postcode" class="form-control" id="web" placeholder="Enter Website Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="m-b-5px row top-margin-5">
                        <div class="col-sm-6"></div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-2">
                            <button type="button" id="calculate0" onClick="conform_user()" class="btn btn-success waves-effect waves-light m-r-10 text-white w-100">Conform User</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>
<input type="text" hidden name="Total_price[]" class="form-control" id="valueofx" value="0">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


<div id="modal12">
    <div class="modal bs-example-modal-lg" id="modal_og" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Extra Large modal</h4>
                    <button type="button" onclick="close_btn()" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modalbody" id="modalbody">

                </div>
                <div class="modal-footer">
                    <button type="button" onclick="close_btn()" id="close_btn" class="btn btn-danger waves-effect text-start text-white" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="close_btn_secret" class="btn btn-danger waves-effect text-start text-white" data-bs-dismiss="modal"></button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

</div>