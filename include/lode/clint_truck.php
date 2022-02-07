<?php
extract($_REQUEST);
?>

<div class="input-group mb-2">
    <input type="text" name="license_no[]" class="form-control" id="license<?php echo $last ?>" placeholder="License No">
    <br>
    <div class="input-group">
        <span class="input-group-text  width-65px">Height</span>
        <input type="number" class="form-control"  onchange="cft_calculate(this.id)" id="hft<?php echo $last ?>" placeholder="ft">
        <input type="number" class="form-control"  onchange="cft_calculate(this.id)" id="hin<?php echo $last ?>" placeholder="in">
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-text width-65px">Width.</span>
        <input type="number" class="form-control" onchange="cft_calculate(this.id)"  id="wft<?php echo $last ?>" placeholder="ft">
        <input type="number" class="form-control"  onchange="cft_calculate(this.id)"  id="win<?php echo $last ?>" placeholder="in">
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-text width-65px">Length</span>
        <input type="number" class="form-control"  onchange="cft_calculate(this.id)" id="lft<?php echo $last ?>" placeholder="ft">
        <input type="number" class="form-control" onchange="cft_calculate(this.id)" id="lin<?php echo $last ?>" placeholder="in">
    </div>
</div>