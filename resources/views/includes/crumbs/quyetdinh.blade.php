<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 7/18/2016
 * Time: 3:00 PM
 */
?>
<div class="form-group">
    <label class="col-md-4 control-label"> Số quyết định</label>
    <div class="col-md-8">
        {!!Form::text('soqd', null, array('id' => 'soqd','class' => 'form-control'))!!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label"> Ngày quyết định</label>
    <div class="col-md-8">
        <input type="date" name="ngayqd" id="ngayqd" class="form-control" />
    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label"> Người ký</label>
    <div class="col-md-8">
        {!!Form::text('nguoiky', null, array('id' => 'nguoiky','class' => 'form-control'))!!}
    </div>
</div>