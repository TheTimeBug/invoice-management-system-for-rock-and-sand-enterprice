//alert("zz");
let c_id = 0;

function total_price(id) {
    let field_no = id.substring(10, );

    let volume = parseFloat(document.getElementById("volume" + field_no).value);
    let price = parseFloat(document.getElementById("price" + field_no).value);
    let truck_rent = parseFloat(document.getElementById("truck_rent" + field_no).value);

    let total_price = price + truck_rent;
    // alert(volume + '*' + price + '+' + truck_rent + '=' + total_price);
    document.getElementById("total_price" + field_no).innerHTML = total_price.toFixed(2);;
}

function lode_price(id) {
    let field_no = id.substring(7, );
    let pro_id = document.getElementById(id).value;
    //alert(pro_id + "  " + field_no);

    $("#pricediv" + field_no).load("include/lode/lode_price.php", "pro_id=" + pro_id + "&last=" + field_no);

    invoiceData();
}

function calculate(id) {
    let field_no = id.substring(9, );
    let volume = document.getElementById('volume' + field_no).value;
    let price = document.getElementById('price' + field_no).value;
    document.getElementById("unite_price" + field_no).value = price;

    let total_price = volume * price;
    //alert(volume + " * " + price + " = " + total_price);
    document.getElementById('price' + field_no).value = total_price;
    document.getElementById('priceX' + field_no).innerHTML = total_price.toFixed(2);
    total_price = 0, volume = 0, price = 0;

    $('#calculate' + field_no).remove();

    invoiceData();

}

function lode_volume(id) {
    let field_no = id.substring(7, );
    let truck_id = document.getElementById(id).value;
    //alert(truck_id + "  " + field_no);

    $("#volume_div" + field_no).load("include/lode/lode_volume.php", "truck_id=" + truck_id + "&last=" + field_no);
    //$("#volume_db" + field_no).load("include/lode/lode_hwl.php", "truck_id=" + truck_id + "&last=" + field_no);

}

function lode_truck(id) {
    let d = document.getElementById(id).value;

    let field_no = id.substring(11, );
    if (d == "C") {
        $("#truck" + field_no).load("include/lode/clint_truck.php", "last=" + field_no);
    } else if (d == "R") {
        $("#truck" + field_no).load("include/lode/our_truck.php", "last=" + field_no);
    }
}


function cft_calculate(id) {
    let field_no = id.substring(3, );
    //alert(field_no);
    let hft = parseFloat(document.getElementById("hft" + field_no).value);
    let hin = parseFloat(document.getElementById("hin" + field_no).value);
    let wft = parseFloat(document.getElementById("wft" + field_no).value);
    let win = parseFloat(document.getElementById("win" + field_no).value);
    let lft = parseFloat(document.getElementById("lft" + field_no).value);
    let lin = parseFloat(document.getElementById("lin" + field_no).value);

    let h = (hft + (hin / 12));
    let w = (wft + (win / 12));
    let l = (lft + (lin / 12))
        //alert("H=" + h + ",W=" + w + ",L=" + l);

    let ans = h * w * l;

    document.getElementById("volume" + field_no).value = ans.toFixed(2);
}


function connect_ajax(data) {
    $.ajax({
        method: "POST",
        url: 'include/database/invoiceCRUD.php',
        data: data,
        success: function(return_data) {
            //alert(return_data);
            let result = return_data.substring(0, 4);
            if (result == "done") {} else if (return_data == "Sucessfull") {
                location.replace("invoice.php");
            }
        }
    });
}