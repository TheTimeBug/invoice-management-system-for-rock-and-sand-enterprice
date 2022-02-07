<?php 
session_start();
    $invoice_id =  $_SESSION['invoice'];
    //echo $invoice_id;
    include('config/connection.php');

    $quary = "SELECT * FROM `tbl_invoice` WHERE invoice_id=$invoice_id";
    $query_execute=mysqli_query($con,$quary);
    $data_from_invoice= mysqli_fetch_array($query_execute);

    $client_id = $data_from_invoice['clint_id'];
    $tax_per = $data_from_invoice['invoice_tax_parcent'];
    $tax_ammount = $data_from_invoice['invoice_tax_ammount'];
    $discount_per = $data_from_invoice['invoice_discount_parcent'];
    $discount_ammount = $data_from_invoice['invoice_discount_ammount'];
    $product_price = $data_from_invoice['invoice_products_price'];
    $transport_cost = $data_from_invoice['invoice_transpot_price'];
    $invoice_date = $data_from_invoice['invoice_date'];
    $invoice_total = $data_from_invoice['invoice_total_price'];
    $invoice_paid = $data_from_invoice['invoice_paid'];

    $clint_query="SELECT `clint_name`,`clint_phone1`,`clint_phone2`,`clint_email`,`clint_ad_address`,`clint_ad_district`,`clint_ad_country`,`clint_ad_postcode`,`clint_payable`,`clint_paid` FROM `tbl_clint` WHERE tbl_clint.clint_id= '$client_id'";
    $clint_query_execute=$query_execute=mysqli_query($con,$clint_query);
    $data_from_client= mysqli_fetch_array($clint_query_execute);

    $clint_name=$data_from_client['clint_name'];
    $clint_phone1=$data_from_client['clint_phone1'];
    $clint_phone2=$data_from_client['clint_phone2'];
    $clint_email=$data_from_client['clint_email'];
    $clint_address=$data_from_client['clint_ad_address'];
    $clint_district=$data_from_client['clint_ad_district'];
    $clint_country=$data_from_client['clint_ad_country'];
    $clint_postcode=$data_from_client['clint_ad_postcode'];
    $clint_payable=$data_from_client['clint_payable'];
    $clint_paid=$data_from_client['clint_paid'];

    $total_due= $clint_payable- $clint_paid ;

?>

<!DOCTYPE html>

<head>
  <title>Invoice</title>
  <style>
    .width-100 {
      width: 100%;
    }

    .width-60 {
      width: 60%;
    }

    .width-20 {
      width: 20%;
    }

    .width-70 {
      width: 70%;
    }

    .width-30 {
      width: 30%;
    }

    .width-40 {
      width: 40%;
    }

    .border {
      border: 1px black;
    }

    .toRight {
      text-align: right;
      padding-right: 30px;
    }

    .toLeft {
      text-align: left;
      float: left;
      padding-top: 10px;
    }

    .toRight-x {
      text-align: right;
      padding-right: 30px;
    }

    .toLeft-x {
      text-align: left;
      padding-left: 30px;

    }

    .text-18 {
      font-size: 18pt;
      padding: 4px;
    }
    .text-24 {
      font-size: 24pt;
      padding: 4px;
    }

    .text-10 {
      font-size: 10pt;
    }

    .text-14 {
      font-size: 14pt;
    }

    .text-12 {
      font-size: 12pt;
    }

    .text-8 {
      font-size: 8pt;
    }

    .bordr-white {
      border: 4px solid white;
    }

    .bordr-white1 {
      border: 1px solid white;
    }

    .product td {
      padding-left: 1px;
      padding-right: 1px;
      text-align: center;
    }

    .product th {
      text-align: left;
      padding-left: 3px;
      padding-right: 3px;
      padding-top: 7px;
      padding-bottom: 7px;
      background: #F4F6F6;
      text-align: center;
    }

    .product td:nth-child(odd) {
      background: #F4F6F6;
    }

    .product th:nth-child(odd) {
      background: #F4F6F6;
    }
  </style>
</head>

<body>
  <table class="width-100 border">
    <tr>
      <th class="width-40 toLeft">
        <img src="https://nasim.thetimebugs.xyz/logo.png" alt="broken" width="" height="120px">
      </th>
      <td class="width-60">
        <div class="toRight">
          <p class="text-10"><span class="text-24">Txxxet Enterprise </span><br>
          <span class="text-12">Importer Exporter and Genaral Supplier</span><br>
            Rice,Wheat,Onion,Ginger,Garli,Red chillic<br>
            Nut,Fruits,Black Stone,Stone chips<br>
            Sonamasjid Land Port,Shibganj <br>
            Dist- Chapainawabganj - 5800<br>
            Email : txxetenterprise@gmail.com<br>
            Phone : 01755292779<br>
          </p>
        </div>
      </td>
    </tr>
  </table>
  <table class="width-100">
    <tr>
      <td class="toLeft-x width-40 text-12"><b> Date :</b> <?php echo $invoice_date ?></td>
      <td class="toRight-x width-60 text-12"><b>Invoice :</b> <?php echo $invoice_id ?></td>
    </tr>
  </table>
  <hr>

  <table class="width-100 bordr-white">
    <tr>
      <th class="width-60 bordr-white" style="text-align: center;background-color: #EAEDED ; padding:10px;">Client Information</th>
      <th class="width-40 bordr-white" style="text-align: center;background-color:#EAEDED ; padding:10px;">Shipping Information</th>
    </tr>
    <tr>
      <td>
        <table style="padding-left:20px">
          <tr>
            <td><b>Name : </b></td>
            <td><?php echo $clint_name; ?></td>
          </tr>
          <tr>
            <td><b>Phone: </b></td>
            <td><?php echo $clint_phone1; ?><br><?php echo $clint_phone2; ?></td>
          </tr>
          <tr>
            <td><b>Email: </b></td>
            <td><?php echo $clint_email; ?></td>
          </tr>
          <tr>
            <td><b>Address: </b></td>
            <td><?php echo $clint_address; ?> </td>
          </tr>
          <tr>
            <td><b>District: </b></td>
            <td><?php echo $clint_district; ?> - <?php echo $clint_postcode; ?></td>
          </tr>

        </table>
      </td>
      <td>
        <table style="padding-left:20px">
          <tr>
            <td><b>Phone: </b></td>
            <td>01515676987 </td>
          </tr>
          <tr>
            <td><b>Address: </b></td>
            <td>17/7 Middle paike para, Mirpur, Dhaka, Bangladesh </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>

  <br>

  <div class="product">
    <table class="width-100 bordr-white">
      <tr style="">
        <th class="bordr-white1" style="width: 5%;">Item</th>
        <th class="bordr-white1" style="width: 25%;">Product</th>
        <th class="bordr-white1" style="width: 12%;">Unit Price</th>
        <th class="bordr-white1" style="width: 20%;">Volume</th>
        <th class="bordr-white1" style="width: 10%;">Price</th>
        <th class="bordr-white1" style="width: 13%;">Truck Rent</th>
        <th class="bordr-white1" style="width: 15%;">Total Price</th>
      </tr>
      <?php 
            $count=0;
          $item_query="SELECT * FROM `tbl_item` WHERE `invoice_id`=$invoice_id";
          $item_query_execute=$query_execute=mysqli_query($con,$item_query);
          while($data_from_item= mysqli_fetch_array($item_query_execute)){
              $count++;
              $product_id = $data_from_item['item_product_id'];
              $product_price_unit = $data_from_item['item_unite_price'];
              $product_volume = $data_from_item['item_volume'];
              $item_price = $data_from_item['item_price'];
              $item_transport_cost = $data_from_item['item_transport_cost'];
              $item_total_price = $item_price+$item_transport_cost;
              $hft=$data_from_item['item_hft'];
              $hin=$data_from_item['item_hin'];
              $wft=$data_from_item['item_wft'];
              $win=$data_from_item['item_win'];
              $lft=$data_from_item['item_lft'];
              $lin=$data_from_item['item_lin'];

              $pro_query="SELECT `product_name`,`product_size`,`product_type` FROM `tbl_product` WHERE `product_id`='$product_id'";
              $pro_query_execute=$query_execute=mysqli_query($con,$pro_query);
              $data_from_pro= mysqli_fetch_array($pro_query_execute);
              $product_name=$data_from_pro['product_name'];
              $product_size=$data_from_pro['product_size'];
              $product_type=$data_from_pro['product_type'];
         
      ?>
      <tr style="margin-botton: 10px;">
        <td class="text-10 center"><?php echo $count;?></td>
        <td class="text-10"><?php echo "$product_name  $product_type ($product_size)"?></td>
        <td class="text-10"><?php echo $product_price_unit;?></td>
        <td class="text-10">H:<?php echo $hft;?>ft <?php echo $hin;?>in <br> W:<?php echo $wft;?>ft <?php echo $win;?>in <br> L:<?php echo $lft;?>ft <?php echo $lin;?>in<br> V: <?php echo $product_volume;?>cft</td>
        <td class="text-10"><?php echo $item_price;?></td>
        <td class="text-10"><?php echo $item_transport_cost;?></td>
        <td class="text-10"><?php echo $item_total_price;?></td>
      </tr>
      <?php }?>

    </table>
  </div>
  <br>
  <br>
  <div class="product">
    <table class="width-100 bordr-white">
      <tr style="">
        <th class="bordr-white1" style="width: 10%;">Item</th>
        <th class="bordr-white1" style="width: 25%;">Truck License No</th>
        <th class="bordr-white1" style="width: 25%;">DriverName</th>
        <th class="bordr-white1" style="width: 20%;">Phone No</th>
      </tr>
      <?php 
        $count=0;
        $transport_query="SELECT `item_truck_owner`,`item_license`,`item_driver_owner`,`item_driver` FROM `tbl_item` WHERE `invoice_id`=invoice_id";
        $transport_query_execute=$query_execute=mysqli_query($con,$item_query);
        while($data_from_transport= mysqli_fetch_array($transport_query_execute)){
          $truck_owner=$data_from_transport['item_truck_owner'];
          $truck_license=$data_from_transport['item_license'];
          $driver_owner=$data_from_transport['item_driver_owner'];
          $driver_id=$data_from_transport['item_driver'];
          $count++;

          if($truck_owner=="R"){
              $truck_licensez = "SELECT `truck_license_no` FROM `tbl_truck` WHERE `truck_id`='$truck_license'";
              $licence_quary = $query_execute=mysqli_query($con,$truck_licensez);
              $data_from_license = mysqli_fetch_array($licence_quary);
              $truck_license=$data_from_license['truck_license_no'];
          }
          $driver_name = "Client";
          $driver_phone1 = "----------";
          $driver_phone2 = "----------";
          if($driver_owner=="R"){
            $driver_data = "SELECT `driver_name`,`driver_phone1`,`driver_phone2` FROM `tbl_driver` WHERE `driver_id`='$driver_id'";
            $driver_qr = $query_execute=mysqli_query($con,$driver_data);
            $data_from_r = mysqli_fetch_array($driver_qr);

            $driver_name=$data_from_r['driver_name'];
            $driver_phone1 =$data_from_r['driver_phone1'];
            $driver_phone2 =$data_from_r['driver_phone2'];
        }
          
        
      ?>
      <tr style="margin-botton: 10px;">
        <td class="text-10 center"><?php echo $count;?></td>
        <td class="text-10"><?php echo $truck_license;?></td>
        <td class="text-10"><?php echo $driver_name;?></td>
        <td class="text-10"><?php echo $driver_phone1;?><br><?php echo $driver_phone2;?></td>
      </tr>

      <?php }?>
    </table>
  </div>

  <br>
  <div class="">
    <table class="width-100 bordr-white">
      <tr>
        <td class="width-20">
        </td>
        <td class="width-40">
          <table class="width-100 bordr-white">
            <tr>
              <td class="width-70 text-12 toRight">
                <b>Product Ammount: </b>
              </td>
              <td class="width-30">
              <?php echo $product_price ?>
              </td>
            </tr>
            <tr>
              <td class="width-70 text-12 toRight">
                <b>Transport Cost : </b>
              </td>
              <td class="width-30">
              <?php echo $transport_cost ?>
              </td>
            </tr>
            <tr>
              <td class="width-70 text-12 toRight">
                <b>Discount : </b>
              </td>
              <td class="width-30">
              <?php echo $discount_ammount.'('.$discount_per.'৳ pCFT)'; ?>
              </td>
            </tr>
            <tr>
              <td class="width-70 text-12 toRight">
                <b>Tax : </b>
              </td>
              <td class="width-30">
              <?php echo $tax_ammount.'('.$tax_per.'%)'; ?>
              </td>
            </tr>

          </table>
        </td>
        <td class="width-40">
          <table class="width-100 bordr-white">
            <tr>
              <td class="width-70 text-12 toRight">
                <b>Total Payable : </b>
              </td>
              <td class="width-30">
              <?php echo $invoice_total; ?>
              </td>
            </tr>
            <tr>
              <td class="width-70 text-12 toRight">
                <b>Paid : </b>
              </td>
              <td class="width-30">
              <?php echo $invoice_paid; ?>
              </td>
            </tr>
            <tr>
              <td class="width-70 text-12 toRight">
                <b>Due : </b>
              </td>
              <td class="width-30">
              <?php echo $invoice_total-$invoice_paid; ?>
              </td>
            </tr>
            <tr>
              <td class="width-70 text-12 toRight">
                <b>Total Due : </b>
              </td>
              <td class="width-30">
              <?php echo $total_due; ?>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr></tr>
    </table>
  </div>
  <hr>
  <h5 style="text-align:left; margin-left:20px">Online receipt does not include signatures</h5>

  <div style="text-align:center">
  <a class="text-inverse p-r-10" target="_blank" href="invoice_genarate.php?invoice_id=<?php echo $invoice_id ?>"><button>Downlode</button></a>
  </div>

</body>

</html>