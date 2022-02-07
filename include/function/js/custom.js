function entryUSER() {
    var operation = "admin_entry";
    var formdata = $("#userentry").serialize();

    var data = "operation=" + operation + "&" + formdata;
    connect_ajax(data);
}

//Modal Section
function openmodal() {
    $('#exampleModal').modal('show');
}

function closemodal() {
    $('#exampleModal').modal('hide');
    document.getElementById("userentry").reset();
}
//admin

function admin_update_modal_close() {
    $('#updateMODAL').modal('hide');
    $("#admin_datatable").load(location.href + " #admin_datatable");
}

function admin_update_modal(id) {
    data = "id=" + id;
    $('#updateMODAL').modal('show');
    $("#modalbody").load("include/modal/update/admin_update.php", data);
}

function admin_data_update() {
    var operation = "admin_data_update";
    var formdata = $("#updatedDATA").serialize();
    var data = "operation=" + operation + "&" + formdata;
    connect_ajax(data);
}

function admin_delete_modal(id) {
    data = "id=" + id;
    $('#deleteMODAL').modal('show');
    $("#modalbody2").load("include/modal/delete/admin_delete.php", data);
}

function admin_delete_modal_close() {
    $('#deleteMODAL').modal('hide');
    $("#admin_datatable").load(location.href + " #admin_datatable");
}

function admin_data_delete() {
    var operation = "admin_data_delete";
    var formdata = $("#getdatadeletemodal").serialize();
    var data = "operation=" + operation + "&" + formdata;
    connect_ajax(data);
}

function check(id) {
    offset = "offset=" + id;
    $("#admin_datatable").load(location.href + " #admin_datatable", offset);
}

//Truck Page 

function entryTRUCK() {
    var operation = "truck_entry";
    var formdata = $("#Truckentry").serialize();
    var data = "operation=" + operation + "&" + formdata;
    connect_ajax(data);
}

function truck_update_modal(id) {
    data = "id=" + id;
    $('#updateMODAL').modal('show');
    $("#modalbody").load("include/modal/update/truck_update.php", data);
}

function truck_data_update() {
    var operation = "truck_data_update";
    var formdata = $("#Truckentry").serialize();
    var data = "operation=" + operation + "&" + formdata;
    connect_ajax(data);
}

function trruck_close_table_relode() {
    $('#updateMODAL').modal('hide');
    $("#myTable").load(location.href + " #myTable");

}

function openTruckPageModal() {
    $('#exampleModal').modal('show');
}

function closeTruckPageModal() {
    $('#exampleModal').modal('hide');
    document.getElementById("Truckentry").reset();
}

function truck_delete_modal(id) {
    data = "id=" + id;
    $('#deleteMODAL').modal('show');
    $("#deleteModal").load("include/modal/delete/truck_delete.php", data);
}

function truck_delete_modal_close() {
    $('#deleteMODAL').modal('hide');
    $("#myTable").load(location.href + " #myTable");
}

function truck_data_delete() {
    var operation = "truck_data_delete";
    var formdata = $("#getdatadeletemodal").serialize();
    var data = "operation=" + operation + "&" + formdata;
    connect_ajax(data);
}