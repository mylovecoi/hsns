<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 8/9/2016
 * Time: 8:59 AM
 */?>
<div class="form-group">
    <label class="col-md-4 control-label"> Cơ quan quyết định</label>
    <div class="col-md-8">
        {!! Form::text('coquanqd',null,array('id' => 'coquanqd', 'class' => 'form-control'))!!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label"> Nội dung</label>
    <div class="col-md-8">
        {!! Form::textarea('noidung',null,array('id' => 'noidung', 'class' => 'form-control','rows'=>'3'))!!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label"> Ngày xét duyệt<span class="require">*</span></label>
    <div class="col-md-8">
        {!! Form::input('date','ngayxet',null,array('id' => 'ngayxet', 'class' => 'form-control'))!!}
    </div>
</div>