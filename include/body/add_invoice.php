<script src="include/function/js/lode_element.js"></script>
<script src="include/function/js/invoice_calculation.js"></script>
<script src="include/function/js/invoice2.js"></script>
<script src="include/function/js/invoice3.js"></script>
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
                                        <input type="text" class="form-control" id="clint_id" name="clint_id"  hidden value="0">
                                        <input type="text" id="clint_name" name="clint_name" class="form-control" id="fullNAME" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-sm-1"></div>
                                <label for="exampleInputEmail3" class="col-sm-1 control-label">Email*</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ti-email"></i></span>
                                        <input type="email"  id="clint_email" name="clint_email"  class="form-control" id="exampleInputEmail3" placeholder="Enter email">
                                    </div>
                                </div>
                            </div>
                            <div class="m-b-5px row">
                                <label class="form-label col-sm-1 control-label" for="web">Phone 1</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="icon-phone"></i></span>
                                        <input type="text"  id="clint_phone1" name="clint_phone1" class="form-control" id="web" placeholder="Enter Primary Mobile No">
                                    </div>
                                </div>
                                <div class="col-sm-1"></div>
                                <label class="form-label col-sm-1 control-label" for="web">Phone 2</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="icon-phone"></i></span>
                                        <input type="text" id="clint_phone2" name="clint_phone2"  class="form-control" id="web" placeholder="Enter mobile number 2">
                                    </div>
                                </div>
                            </div>
                            <div class="m-b-5px row">
                                <label class="form-label col-sm-1 control-label" for="web">Address</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ti-home"></i></span>
                                        <input type="text"  id="clint_address" name="clint_address" class="form-control" id="web" placeholder="Enter Website Name">
                                    </div>
                                </div>
                                <div class="col-sm-1"></div>
                                <label class="form-label col-sm-1 control-label" for="web">District</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                        <input type="text"  id="clint_district" name="clint_district" class="form-control" id="web" placeholder="Enter Website Name">
                                    </div>
                                </div>
                            </div>
                            <div class="m-b-5px row">
                                <label class="form-label col-sm-1 control-label" for="web">Country</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                        <input type="text"  id="clint_country" name="clint_country" class="form-control" id="web" placeholder="Enter Website Name">
                                    </div>
                                </div>
                                <div class="col-sm-1"></div>
                                <label class="form-label col-sm-1 control-label" for="web">Post Code</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                        <input type="text"  id="clint_postcode" name="clint_postcode" class="form-control" id="web" placeholder="Enter Website Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
                </div>
            </div>
        </div>
    </div>
    <div class="card padding-20 margin-20">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Product information</h4>
                <div class="input_fields_wrap_t">
                    <div class="row" id="product_row0">
                        <div class="col-md-1 ">
                            <label class="form-label">Action</label>
                            <button type="button" class="add_field_button_t btn btn-success waves-effect waves-light m-r-10 text-white">+</button>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Product</label>
                            <div class="input-group mb-2">
                                <select name="product[]" onchange="lode_price(this.id)" id="product0" class="form-control form-select">
                                    <option selected disabled>Select</option>
                                    <?php
                                    include('config/connection.php');
                                    $queary = "SELECT `product_id`,`product_name`,`product_size`,`product_type`,`product_price` FROM `tbl_product` WHERE `product_activity`='A' ORDER BY product_units_sold ASC";
                                    $queary_execution = mysqli_query($con, $queary);
                                    while ($data = mysqli_fetch_array($queary_execution)) {
                                        $db_name = $data['product_name'];
                                        $db_size = $data['product_size'];
                                        $db_type = $data['product_type'];
                                        $db_id = $data['product_id'];
                                        $db_price = $data['product_price'];
                                        echo "<option value=" . $db_id . ">" . $db_name . "(" . $db_size . "," . $db_type . ")</option>";
                                    }
                                    ?>
                                </select>
                                <input type="text" hidden name="unite_price"  class="form-control" id="unite_price0" value="0">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <label class="form-label">Truck</label>
                            <div class="input-group mb-1">
                                <select name="truck_owner[]" onchange="lode_truck(this.id);" id="truck_owner0" class="form-control form-select">
                                    <option selected disabled>Select</option>
                                    <option value="C">Client</option>
                                    <option value="R">Rental</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2" >
                            <label class="form-label">License No.</label>
                            <div class="input-group mb-2" id="truck0">
                                <select name="license_no[]" id="license0" class="form-control form-select">
                                    <option selected disabled>Select</option>
                                </select>
                                <div id="volume_db0"></div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <label class="form-label">Volume</label>
                            <div class="input-group mb-1">
                                <div id="volume_div0">
                                    <input type="text" name="volume[]" class="form-control" id="volume0" value="0">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <label class="form-label">Price</label>
                            <div class="input-group mb-1">
                                <div id="pricediv0">
                                    <input type="text" name="price[]" onchange="total_price(this.id)" class="form-control" id="price0" value="0">
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-2">

                            <label class="form-label">Driver</label>
                            <div class="input-group mb-2">
                                <select name="driver_id[]" id="driver0" class="form-control form-select">
                                    <option selected disabled>Select</option>
                                    <option value="0">Clint</option>
                                    <?php
                                    include('config/connection.php');
                                    $queary = "SELECT `driver_name`,`driver_phone1`,`driver_id` FROM `tbl_driver` WHERE `driver_activity`='A'";
                                    $queary_execution = mysqli_query($con, $queary);
                                    while ($data = mysqli_fetch_array($queary_execution)) {
                                        $db_name = $data['driver_name'];
                                        $db_phone = $data['driver_phone1'];
                                        $db_id = $data['driver_id'];
                                        echo "<option value=" . $db_id . ">" . $db_name . "(" . $db_phone . ")</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <label class="form-label">Truck Rent</label>
                            <div class="input-group mb-1">
                                <input type="text" name="truck_rent[]" onchange="total_price(this.id)" class="form-control" id="truck_rent0" value="0">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <label class="form-label">T. Price</label>
                            <div class="input-group mb-1">
                                <h6 id="total_price0" >0</h6>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <br>
                <br>
                <div class="m-b-5px row">
                    <div class="col-sm-7"></div>
                    <div class="col-sm-1"></div>
                    <label class=" col-sm-2 control-label text-right" for="web">Total Product Cost :</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <h5 id="invoiceTotal">0</h5>
                        </div>
                    </div>
                </div>
                <div class="m-b-5px row">
                    <div class="col-sm-7"></div>
                    <div class="col-sm-1"></div>
                    <label class=" col-sm-2 control-label text-right" for="web">Transport Cost :</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <h5 id="transpotCost">0</h5>
                        </div>
                    </div>
                </div>
                <div class="m-b-5px row">
                    <div class="col-sm-8"></div>
                    <div class="col-sm-1"></div>
                    <label class=" col-sm-1 control-label text-right" for="web">Discount :</label>
                    <div class="col-sm-1">
                        <div class="input-group">
                            <input type="text" onchange="invoiceData()" id="discount_par" name="clint_district" class="form-control" id="discount" value="0">
                            <span class="input-group-text">৳</span>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="input-group">
                            <h5 id="totalDiscount">0</h5>
                        </div>
                    </div>
                </div>
                <div class="m-b-5px row">
                    <div class="col-sm-8"></div>
                    <div class="col-sm-1"></div>
                    <label class=" col-sm-1 control-label text-right" for="web">Tax :</label>
                    <div class="col-sm-1">
                        <div class="input-group">
                            <input type="text" onchange="invoiceData()"  id="tax_par" name="clint_district" class="form-control" id="tax" value="0">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="input-group">
                            <h5 id="totalTax">0</h5>
                        </div>
                    </div>
                </div>
                <br>
                <div class="m-b-5px row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-1"></div>
                    <label class=" col-sm-3 control-label text-right" for="web">Total(inc tax and discount) :</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <h5 id="finalcost">0</h5>
                        </div>
                    </div>
                </div>
                <div class="m-b-5px row">
                    <div class="col-sm-9"></div>
                    <label class=" col-sm-1 control-label text-right" for="web">Paid:</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <input type="text"  id="paid" onchange="invoiceData()" name="clint_district" class="form-control" id="tax" value="0">
                        </div>
                    </div>
                </div>
                <div class="m-b-5px row">
                    <div class="col-sm-9"></div>
                    <label class=" col-sm-1 control-label text-right" for="web">Due:</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <h5 id="due_ammount">0</h5>
                        </div>
                    </div>
                </div>
                <div class="m-b-5px row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2">
                        <button type="button" id="calculate0" onClick="invoiceData()" class="btn btn-success waves-effect waves-light m-r-10 text-white w-100">Calculate</button>
                    </div>
                    <div class="col-sm-2">
                        <button type="button" id="calculate0" onClick="crate_invoice()" class="btn btn-success waves-effect waves-light m-r-10 text-white w-100">Generate Invoice</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>
<input type="text" hidden name="Total_price[]" class="form-control" id="valueofx" value="0">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_fields_wrap_t"); //Fields wrapper
        var add_button = $(".add_field_button_t"); //Add button ID

        var x = 0; //initlal text box count
        $(add_button).click(function(e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                document.getElementById('valueofx').value = x;
                $(wrapper).append('<br><div class="row" id="product_row' + x + '"> <div class="col-md-1 "> <button type="button" class="remove_field btn btn-danger waves-effect waves-light m-r-10 text-white">-</button> </div> <div class="col-md-2"> <div class="input-group mb-2"> <select name="product[]" onchange="lode_price(this.id)" id="product' + x + '" class="form-control form-select"> <option selected disabled>Select</option> <?php include('config/connection.php'); $queary = "SELECT `product_id`,`product_name`,`product_size`,`product_type`,`product_price` FROM `tbl_product` WHERE `product_activity`!='D' ORDER BY product_units_sold ASC"; $queary_execution = mysqli_query($con, $queary); while ($data = mysqli_fetch_array($queary_execution)) { $db_name = $data['product_name']; $db_size = $data['product_size']; $db_type = $data['product_type']; $db_id = $data['product_id']; $db_price = $data['product_price']; echo "<option value=" . $db_id . ">" . $db_name . "(" . $db_size . "," . $db_type . ")</option>"; } ?> </select><input type="text" hidden name="unite_price"  class="form-control" id="unite_price'+x+'" value="0"> </div> </div> <div class="col-md-1"> <div class="input-group mb-1"> <select name="truck_owner[]" onchange="lode_truck(this.id);" id="truck_owner' + x + '" class="form-control form-select"> <option selected disabled>Select</option> <option value="C">Client</option> <option value="R">Rental</option> </select> </div> </div> <div class="col-md-2" id="truck' + x + '"> <div class="input-group mb-2"> <select name="license_no[]" id="license' + x + '" class="form-control form-select"> <option selected disabled>Select</option> <option value="A">Client</option> <option value="I">Rental</option> </select> <div id="volume_db' + x + '"></div> </div> </div> <div class="col-md-1"> <div class="input-group mb-1"> <div id="volume_div' + x + '"> <input type="text" name="volume[]" class="form-control" id="volume' + x + '" value="0"> </div> </div> </div> <div class="col-md-1"> <div class="input-group mb-1"> <div id="pricediv' + x + '"> <input type="text" onchange="total_price(this.id)" name="price[]" class="form-control" id="price' + x + '" value="0"> </div> </div> </div> <div class="col-md-2"> <div class="input-group mb-2"> <select name="driver_id[]" id="driver' + x + '" class="form-control form-select"> <option selected disabled>Select</option> <option value="0">Clint</option> <?php include('config/connection.php'); $queary = "SELECT `driver_name`,`driver_phone1`,`driver_id` FROM `tbl_driver` WHERE `driver_activity`='A'"; $queary_execution = mysqli_query($con, $queary); while ($data = mysqli_fetch_array($queary_execution)) { $db_name = $data['driver_name']; $db_phone = $data['driver_phone1']; $db_id = $data['driver_id']; echo "<option value=" . $db_id . ">" . $db_name . "(" . $db_phone . ")</option>"; } ?> </select> </div> </div> <div class="col-md-1"> <div class="input-group mb-1"> <input type="text" name="truck_rent[]" onchange="total_price(this.id)" class="form-control" id="truck_rent' + x + '" value="0"> </div> </div> <div class="col-md-1"> <div class="input-group mb-1"> <h6 id="total_price'+ x +'">0</h6> </div> </div> </div> '); //add input box
            }
        });

        $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
            e.preventDefault();
            $('#product_row' + x).remove();
            x--;
            document.getElementById('valueofx').value = x;
        })
    });
</script>


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