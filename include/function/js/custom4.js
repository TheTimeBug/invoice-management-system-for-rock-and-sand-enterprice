function connect_ajax(data) {
    $.ajax({
        method: "POST",
        url: 'include/database/databaseCRUD.php',
        data: data,
        success: function(return_data) {
            alert(return_data);
            if (return_data == "Admin entry Sucessful") {
                $('#exampleModal').modal('show');
            } else if (return_data == "Admin update Sucessful") {
                admin_update_modal_close();
            } else if (return_data == "Something Wrong on update") {
                document.getElementById("responce_text").innerHTML = "Something Wrong";
            } else if (return_data == "Admin Delete Sucessful") {
                admin_delete_modal_close();
            } else if (return_data == "Something Wrong on Delete") {
                document.getElementById("responce_text2").innerHTML = "Something Wrong";
            } else if (return_data == "Truck addition Sucessful") {
                openTruckPageModal();
            } else if (return_data == "Something Wrong on Truck addition") {
                alert("failed");
            } else if (return_data == "Driver addition Sucessful") {
                openDriverPageModal();
            } else if (return_data == "Something Wrong on Driver addition") {
                alert("failed");
            } else if (return_data == "Product addition Sucessful") {
                openProductPageModal();
            } else if (return_data == "Something Wrong on Product addition") {
                alert("failed");
            } else if (return_data == "Client addition Sucessful") {
                openClientPageModal();
            } else if (return_data == "Something Wrong on Client addition") {
                alert("failed");
            } else if (return_data == "Truck deletation Sucessful") {
                truck_delete_modal_close();
            } else if (return_data == "Something Wrong on truck deletation") {
                alert("failed");
            } else if (return_data == "Product deletation Sucessful") {
                product_delete_modal_close();
            } else if (return_data == "Something Wrong on Product deletation") {
                alert("failed");
            } else if (return_data == "Driver deletation Sucessful") {
                driver_delete_modal_close();
            } else if (return_data == "Something Wrong on Driver deletation") {
                alert("failed");
            } else if (return_data == "Client deletation Sucessful") {
                client_delete_modal_close();
            } else if (return_data == "Something Wrong on client deletation") {
                alert("failed");
            } else if (return_data == "Driver update Sucessful") {
                driver_close_table_relode();
            } else if (return_data == "truck update Sucessful") {
                trruck_close_table_relode();
            } else if (return_data == "product update Sucessful") {
                product_close_table_relode();
            } else if (return_data == "client update Sucessful") {
                client_close_table_relode();
            } else if (return_data == "moved to trash") {
                location.reload();
            } else if (return_data == "moved to active") {
                location.reload();
            } else if (return_data == "move_invoice_delete") {
                location.reload();
            }
        }
    });
}