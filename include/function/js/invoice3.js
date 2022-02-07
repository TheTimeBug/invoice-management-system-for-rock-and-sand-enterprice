function show() {
    //var formdata = $("#invoie_form").serialize();
    // let clint_id = document.getElementById('clint_id').value;
    let totalProduct = document.getElementById('valueofx').value;
    alert(totalProduct);


}


function total_price(id) {
    let field_no = id.substring(10, );

    let volume = parseFloat(document.getElementById("volume" + field_no).value);
    let price = parseFloat(document.getElementById("price" + field_no).value);
    let truck_rent = parseFloat(document.getElementById("truck_rent" + field_no).value);

    let total_price = price + truck_rent;
    // alert(volume + '*' + price + '+' + truck_rent + '=' + total_price);
    document.getElementById("total_price" + field_no).innerHTML = total_price.toFixed(2);

    invoiceData();
}


function invoiceData() {

    //alert("in invoicedata");
    let n = document.getElementById('valueofx').value;
    let pricee = 0;
    let transport = 0;
    let total_volume = 0;
    for (let x = 0; x <= n; x++) {
        var productPrice = parseFloat($("#price" + x).val());
        var truck_rent = parseFloat($("#truck_rent" + x).val());
        let volume = parseFloat(document.getElementById("volume" + x).value);

        //alert(productPrice);
        total_volume = total_volume + volume;
        pricee = pricee + productPrice;
        transport = transport + truck_rent;
    }

    document.getElementById('invoiceTotal').innerHTML = pricee.toFixed(2);
    document.getElementById('transpotCost').innerHTML = transport.toFixed(2);

    let tax = parseFloat(document.getElementById('tax_par').value);
    let discount = parseFloat(document.getElementById('discount_par').value);


    let price_after_discount = pricee - (total_volume * discount);
    let final_price = price_after_discount + (price_after_discount * (tax / 100));
    final_price = final_price + transport;

    let discount_x = (total_volume * discount);
    let tax_x = price_after_discount * (tax / 100);

    document.getElementById('finalcost').innerHTML = final_price.toFixed(2);
    document.getElementById('totalTax').innerHTML = tax_x.toFixed(2);
    document.getElementById('totalDiscount').innerHTML = discount_x.toFixed(2);

    let paid = parseFloat(document.getElementById('paid').value);
    let due = final_price - paid;
    document.getElementById('due_ammount').innerHTML = due.toFixed(2);
    //alert(total_volume);
}