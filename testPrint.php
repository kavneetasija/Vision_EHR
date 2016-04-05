
Edit logic javascript
//disable elements
$('#frm').find('input, textarea, select').attr('disabled', true);
function enableEdit(){
$('#frm').find('input, textarea, select').attr('disabled', false);
}


<div class="col-md-2">
    VA &nbsp; OD
</div>
<div class="col-md-5">
    <input type="text" tabindex="15" class="form-control mediumText" name="acuities_INPUT_15"  value="<?php echo $accuities['acuities_INPUT_15']?>">
</div>
<div class="col-md-5">
    <input type="text" tabindex="18" class="form-control mediumText" name="acuities_INPUT_16"  value="<?php echo $accuities['acuities_INPUT_16']?>">
</div>
</div><br>
<!--Row 3 OS-->
<div class="row">
    <div class="col-md-2">
        OS
    </div>
    <div class="col-md-5">
        <input type="text" tabindex="16" class="form-control mediumText" name="acuities_INPUT_17"  value="<?php echo $accuities['acuities_INPUT_17']?>">
    </div>
    <div class="col-md-5">
        <input type="text" tabindex="19" class="form-control mediumText" name="acuities_INPUT_18"  value="<?php echo $accuities['acuities_INPUT_18']?>">
    </div>
</div><br>
<!--Row 4 OU-->
<div class="row">
    <div class="col-md-2">
        OU
    </div>
    <div class="col-md-5">
        <input type="text" tabindex="17" class="form-control mediumText" name="acuities_INPUT_19"  value="<?php echo $accuities['acuities_INPUT_19']?>">
    </div>
    <div class="col-md-5">
        <input type="text" tabindex="20" class="form-control mediumText" name="acuities_INPUT_20"  value="<?php echo $accuities['acuities_INPUT_20']?>">
    </div>