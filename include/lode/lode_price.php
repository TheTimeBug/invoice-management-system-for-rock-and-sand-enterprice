<?php
extract($_REQUEST);
include('../../config/connection.php');
$queary = "SELECT product_price FROM `tbl_product` WHERE `product_id`=$pro_id";
$queary_execution = mysqli_query($con, $queary);
$data = mysqli_fetch_array($queary_execution);
    $price = $data['product_price'];
?>

<input hidden type="text" name="price[]" onchange="total_price(this.id)" class="form-control" id="price<?php echo $last;?>" value="<?php echo $price;?>">
<input hidden type="text" name="price[]" onchange="total_price(this.id)" class="form-control" id="priceST<?php echo $last;?>" value="<?php echo $price;?>">
<h6 onchange="total_price(this.id)" id="priceX<?php echo $last;?>" value="<?php echo $price;?>"><?php echo $price;?></h6>
<br>
                                <button type="button" id="calculate<?php echo $last;?>" onClick="calculate(this.id)" class="btn btn-warning waves-effect waves-light m-r-10 text-white w-100">Cal</button>