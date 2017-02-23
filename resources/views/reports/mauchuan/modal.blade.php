<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 8/16/2016
 * Time: 10:13 AM
 */?>

<div id="thoaibcdscb-modal" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
    {!! Form::open(['url'=>'#','target'=>'_blank' ,'method'=>'post' ,'id' => 'thoaibcdscb', 'class'=>'form-horizontal form-validate']) !!}
    <div class="modal-dialog modal-content">
        <div class="modal-header modal-header-primary">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
            <h4 id="modal-header-primary-label" class="modal-title">Thông tin kết xuất báo cáo</h4>
        </div>
        <div class="modal-body">
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="col-md-4 control-label"> Phòng ban</label>
                    <div class="col-md-8">
                        <select id="phongban" name="phongban" class="form-control">
                            <option value="">--Chọn phòng ban làm việc--</option>
                            @foreach($m_pb as $pb)
                                <option value="{{$pb->mapb}}">{{$pb->tenpb}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label"> Từ ngày<span class="require">*</span></label>
                    <div class="col-md-8">
                        {!! Form::input('date','ngaytu',null,array('id' => 'ngaytu', 'class' => 'form-control'))!!}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label"> Đến ngày<span class="require">*</span></label>
                    <div class="col-md-8">
                        {!! Form::input('date','ngayden',null,array('id' => 'ngayden', 'class' => 'form-control'))!!}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label"> Nội dung kèm theo</label>
                    <div class="col-md-8">
                        {!! Form::textarea('noidung',null,array('id' => 'noidung', 'class' => 'form-control','rows'=>'3'))!!}
                    </div>
                </div>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</button>
            <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary">Đồng ý</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>

<div id="thoaibcth-modal" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
    {!! Form::open(['url'=>'#','target'=>'_blank' ,'method'=>'post' ,'id' => 'thoaibcth', 'class'=>'form-horizontal form-validate']) !!}
    <div class="modal-dialog modal-content">
        <div class="modal-header modal-header-primary">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
            <h4 id="modal-header-primary-label" class="modal-title">Thông tin kết xuất báo cáo</h4>
        </div>
        <div class="modal-body">
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="col-md-4 control-label"> Phòng ban</label>
                    <div class="col-md-8">
                        <select id="phongbanth" name="phongbanth" class="form-control">
                            <option value="">--Chọn phòng ban làm việc--</option>
                            @foreach($m_pb as $pb)
                                <option value="{{$pb->mapb}}">{{$pb->tenpb}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label"> Ngày báo cáo<span class="require">*</span></label>
                    <div class="col-md-8">
                        {!! Form::input('date','ngaybaocao',null,array('id' => 'ngaybaocao', 'class' => 'form-control'))!!}
                    </div>
                </div>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</button>
            <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary">Đồng ý</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>