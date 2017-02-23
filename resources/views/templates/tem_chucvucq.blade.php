<?php
/**
 * Created by PhpStorm.
 * User: MLC
 * Date: 28/06/2016
 * Time: 8:29 AM
 */
?>
<label class="form-control-label">Mã chức vụ<span class="require">*</span></label>
{!!Form::text('macvcq', null, array('id' => 'macvcq','class' => 'form-control','readonly'=>'true'))!!}

<label class="form-control-label">Tên chức vụ<span class="require">*</span></label>
{!!Form::text('tencv', null, array('id' => 'tencv','class' => 'form-control','required'=>'required'))!!}

<label class="form-control-label">Mô tả chức vụ</label>
{!!Form::textarea('ghichu', null, array('id' => 'ghichu','class' => 'form-control','rows'=>'3'))!!}

<label class="form-control-label">Sắp xếp</label>
{!!Form::text('sapxep', null, array('id' => 'sapxep','class' => 'form-control'))!!}

<input type="hidden" id="id_cv" name="id_cv"/>