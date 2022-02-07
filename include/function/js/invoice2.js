function crate_invoice() {
    var c_name = $("#clint_name").val();
    var c_id = $("#clint_id").val();
    var c_email = $("#clint_email").val();
    var c_phone1 = $("#clint_phone1").val();
    var c_phone2 = $("#clint_phone2").val();
    var c_address = $("#clint_address").val();
    var c_district = $("#clint_district").val();
    var c_country = $("#clint_country").val();
    var c_post = $("#clint_postcode").val();

    let check_validation = 0;
    let new_clint = "false";
    if (c_id == 0) {
        new_clint = "true";
        //register user

        if (c_name == "" || c_email == "" || c_phone1 == "" || c_phone2 == "" || c_address == "" || c_district == "" || c_country == "" || c_post == "") {
            check_validation = 1;
            alert("customer incomplete");
        } else {

        }
    }
    let n = document.getElementById('valueofx').value;
    for (let x = 0; x <= n; x++) {
        var productId = $("#product" + x).val();
        var productPrice = $("#price" + x).val();
        var truckOwner = $("#truck_owner" + x).val();
        var truck_license = $("#license" + x).val();
        var truck_volume = $("#volume" + x).val();
        var truck_driver = $("#driver" + x).val();
        var truck_rent = $("#truck_rent" + x).val();

        if (check_validation == 1 || productId == null || productPrice == "" || truckOwner == null || truck_license == null || truck_volume == "" || truck_driver == null || truck_rent == "") {
            alert(" product empty")
            check_validation = check_validation + 1;
        } else {

        }
    }

    if (check_validation == 0) {
        c_id = $("#clint_id").val();
        if (c_id == 0) {
            //alert("resister userk");
            var client_data = "operation=client&name=" + c_name + "&email=" + c_email + "&phone1=" + c_phone1 + "&phone2=" + c_phone2 + "&address=" + c_address + "&district=" + c_district + "&country=" + c_country + "&post=" + c_post;
            connect_ajax(client_data);
            new_clint = "true";
            alert("new user added");
        }
        //crate_invoice
        var invoice_data_sent = "operation=invoice&new_clint=" + new_clint + "&clint_id=" + c_id;
        connect_ajax(invoice_data_sent);
        n = document.getElementById('valueofx').value;
        for (let x = 0; x <= n; x++) {
            var productId = $("#product" + x).val();
            var productPrice = $("#price" + x).val();
            var productUnitePrice = $("#unite_price" + x).val();
            var truckOwner = $("#truck_owner" + x).val();
            var truck_license = $("#license" + x).val();
            var truck_volume = $("#volume" + x).val();
            var truck_driver = $("#driver" + x).val();
            var truck_rent = $("#truck_rent" + x).val();
            let hft = parseFloat(document.getElementById("hft" + x).value);
            let hin = parseFloat(document.getElementById("hin" + x).value);
            let wft = parseFloat(document.getElementById("wft" + x).value);
            let win = parseFloat(document.getElementById("win" + x).value);
            let lft = parseFloat(document.getElementById("lft" + x).value);
            let lin = parseFloat(document.getElementById("lin" + x).value);

            //add product
            var str1 = "operation=product&proId=" + productId + "&unitePrice=" + productUnitePrice +
                "&proPrice=" + productPrice + "&truckOwner=" + truckOwner +
                "&license=" + truck_license + "&volume=" + truck_volume +
                "&driver=" + truck_driver + "&truckRent=" + truck_rent +
                "&hft=" + hft + "&hin=" + hin + "&wft=" + wft + "&win=" + win + "&lft=" + lft + "&lin=" + lin;
            //alert(str1);
            connect_ajax(str1);

        }
        //update invoice and db
        let tax_amount = document.getElementById('totalTax').innerHTML;
        let discount_amount = document.getElementById('totalDiscount').innerHTML;
        let tax_parcent = document.getElementById('tax_par').value;
        let discount_parcent = document.getElementById('discount_par').value;
        let product_price = document.getElementById('invoiceTotal').innerHTML;
        let transport_price = document.getElementById('transpotCost').innerHTML;
        let final_invoice_price = document.getElementById('finalcost').innerHTML;
        let paid_ammount = document.getElementById('paid').value;
        let updateInvoice = "operation=update_invoice&tax_a=" + tax_amount + "&tax_p=" + tax_parcent +
            "&discount_a=" + discount_amount + "&discount_p=" + discount_parcent +
            "&product_price=" + product_price + "&transport_cost=" + transport_price +
            "&invoice_price=" + final_invoice_price + "&paid=" + paid_ammount + "&clint_id=" + c_id + "&new_clint=" + new_clint;
        connect_ajax(updateInvoice);
    } else {
        alert("meesing something");
    }
}