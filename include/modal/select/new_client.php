<div class="row" id="product_row' + x + '">
    <div class="col-md-1 "> <button type="button" class="remove_field btn btn-danger waves-effect waves-light m-r-10 text-white">-</button> </div>
    <div class="col-md-2">
        <div class="input-group mb-2"> <select name="product[]" onchange="lode_price(this.id)" id="product' + x + '" class="form-control form-select">
                <option selected disabled>Select</option> <?php include('config/connection.php');
                                                            $queary = "SELECT `product_id`,`product_name`,`product_size`,`product_type`,`product_price` FROM `tbl_product` WHERE `product_activity`!='D' ORDER BY product_units_sold ASC";
                                                            $queary_execution = mysqli_query($con, $queary);
                                                            while ($data = mysqli_fetch_array($queary_execution)) {
                                                                $db_name = $data['product_name'];
                                                                $db_size = $data['product_size'];
                                                                $db_type = $data['product_type'];
                                                                $db_id = $data['product_id'];
                                                                $db_price = $data['product_price'];
                                                                echo "<option value=" . $db_id . ">" . $db_name . "(" . $db_size . "," . $db_type . ")</option>";
                                                            } ?>
            </select> </div>
    </div>
    <div class="col-md-1">
        <div class="input-group mb-1"> <select name="truck_owner[]" onchange="lode_truck(this.id);" id="truck_owner' + x + '" class="form-control form-select">
                <option selected disabled>Select</option>
                <option value="C">Client</option>
                <option value="R">Rental</option>
            </select> </div>
    </div>
    <div class="col-md-2" id="truck' + x + '">
        <div class="input-group mb-2"> <select name="license_no[]" id="license' + x + '" class="form-control form-select">
                <option selected disabled>Select</option>
                <option value="A">Client</option>
                <option value="I">Rental</option>
            </select>
            <div id="volume_db' + x + '"></div>
        </div>
    </div>
    <div class="col-md-1">
        <div class="input-group mb-1">
            <div id="volume_div' + x + '"> <input type="text" name="volume[]" class="form-control" id="volume' + x + '" value="0"> </div>
        </div>
    </div>
    <div class="col-md-1">
        <div class="input-group mb-1">
            <div id="pricediv' + x + '"> <input type="text" onchange="total_price(this.id)" name="price[]" class="form-control" id="price' + x + '" value="0"> </div> <br> <button type="button" id="calculate' + x + '" onClick="calculate(this.id)" class="btn btn-warning waves-effect waves-light m-r-10 text-white w-100">Cal</button>
        </div>
    </div>
    <div class="col-md-2">
        <div class="input-group mb-2"> <select name="driver_id[]" id="driver' + x + '" class="form-control form-select">
                <option selected disabled>Select</option>
                <option value="0">Clint</option> <?php include('config/connection.php');
                                                    $queary = "SELECT `driver_name`,`driver_phone1`,`driver_id` FROM `tbl_driver` WHERE `driver_activity`='A'";
                                                    $queary_execution = mysqli_query($con, $queary);
                                                    while ($data = mysqli_fetch_array($queary_execution)) {
                                                        $db_name = $data['driver_name'];
                                                        $db_phone = $data['driver_phone1'];
                                                        $db_id = $data['driver_id'];
                                                        echo "<option value=" . $db_id . ">" . $db_name . "(" . $db_phone . ")</option>";
                                                    } ?>
            </select> </div>
    </div>
    <div class="col-md-1">
        <div class="input-group mb-1"> <input type="text" name="truck_rent[]" onchange="total_price(this.id)" class="form-control" id="truck_rent' + x + '" placeholder="rent"> </div>
    </div>
    <div class="col-md-1">
        <div class="input-group mb-1">
            <h6 id="total_price'+ x +'">0</h6>
        </div>
    </div>
</div>