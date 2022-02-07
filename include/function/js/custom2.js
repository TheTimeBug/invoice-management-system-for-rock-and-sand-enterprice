//driver page
function entryDriver() {
    var operation = "driver_entry";
    var formdata = $("#DRIVERentry").serialize();
    var data = "operation=" + operation + "&" + formdata;
    connect_ajax(data);
}

function driver_update_modal_0pen(id) {
    data = "id=" + id;
    //alert(data);
    $('#updateMODAL').modal('show');
    $("#modalbody").load("include/modal/update/driver_update.php", data);
}

function driver_close_table_relode() {
    $('#updateMODAL').modal('hide');
    $("#driverTABLE").load(location.href + " #driverTABLE");

}

function driver_data_update() {
    var operation = "driver_data_update";
    var formdata = $("#DRIVERentry").serialize();
    var data = "operation=" + operation + "&" + formdata;
    connect_ajax(data);
    $("#driverTABLE").load(location.href + " #driverTABLE");
}

function openDriverPageModal() {
    $('#DriverPageModal').modal('show');
}

function closeDriverPageModal() {
    $('#DriverPageModal').modal('hide');
    document.getElementById("DRIVERentry").reset();
}

function driver_delete_modal_op(id) {
    data = "id=" + id;
    //alert(data);
    $('#delete_modal').modal('show');
    $("#deleteModalX").load("include/modal/delete/driver_delete.php", data);
}

function driver_delete_modal_close() {
    $('#delete_modal').modal('hide');
    $("#driverTABLE").load(location.href + " #driverTABLE");
}


function driver_data_delete() {
    var operation = "driver_data_delete";
    var formdata = $("#getdatadeletemodal").serialize();
    var data = "operation=" + operation + "&" + formdata;
    connect_ajax(data);
}

//product page

function entryProduct() {
    var operation = "product_entry";
    var formdata = $("#ProductEntry").serialize();
    var data = "operation=" + operation + "&" + formdata;
    connect_ajax(data);
}

function product_update_modal(id) {
    data = "id=" + id;
    //alert(data);
    $('#updateMODAL').modal('show');
    $("#modalbody").load("include/modal/update/product_update.php", data);
}

function product_data_update() {
    var operation = "product_data_update";
    var formdata = $("#ProductEntry").serialize();
    var data = "operation=" + operation + "&" + formdata;
    connect_ajax(data);
    //alert(data);
}

function product_close_table_relode() {
    $('#updateMODAL').modal('hide');
    $("#myTable").load(location.href + " #myTable");
}

function openProductPageModal() {
    $('#ProductPageModal').modal('show');
}

function closeProductPageModal() {
    $('#ProductPageModal').modal('hide');
    document.getElementById("ProductEntry").reset();
}

function product_delete_modal(id) {
    data = "id=" + id;
    $('#deleteMODAL').modal('show');
    $("#deleteModal").load("include/modal/delete/product_delete.php", data);
}

function product_delete_modal_close() {
    $('#deleteMODAL').modal('hide');
    $("#myTable").load(location.href + " #myTable");
}

function product_data_delete() {
    var operation = "product_data_delete";
    var formdata = $("#getdatadeletemodal").serialize();
    var data = "operation=" + operation + "&" + formdata;
    connect_ajax(data);
}