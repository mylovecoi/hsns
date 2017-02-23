<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 24/06/2016
 * Time: 4:00 PM
 */
        ?>
@extends('main')

@section('custom-style')
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/select2/select2.css')}}"/>
@stop

@section('custom-script')
    <script type="text/javascript" src="{{url('assets/global/plugins/select2/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>

    <script src="{{url('assets/admin/pages/scripts/table-managed.js')}}"></script>
    <script>
        jQuery(document).ready(function() {
            TableManaged.init();
        });
    </script>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">TIÊU CHUẨN TÌM KIẾM THÔNG TIN HỒ SƠ CÁN BỘ</div>
                    <div class="actions"></div>
                </div>
                        <div class="portlet-body" style="min-height: 380px">
                            {!! Form::open(['url'=>'/tra_cuu/ho_so/ket_qua','method'=>'POST','id' => 'create-hscb','class'=>'horizontal-form']) !!}
                            <div class="form-horizontal">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Họ tên</label>

                                            <div class="col-sm-8 controls">
                                                {!!Form::text('tencanbo', null, array('id' => 'tencanbo','class' => 'form-control'))!!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Phòng ban</label>

                                            <div class="col-sm-8 controls">
                                                <select name="mapb" id="mapb" class="form-control" autofocus="autofocus">
                                                    <option value="">-- Chọn phòng ban ---</option>
                                                    @foreach($m_pb as $pb)
                                                        <option value="{{$pb->mapb}}">{{$pb->tenpb}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Chức vụ</label>

                                            <div class="col-sm-8">
                                                <select name="macvcq" id="macvcq" class="form-control">
                                                    <option value="">-- Chọn chức vụ ---</option>
                                                    @foreach($m_cvcq as $cv)
                                                        <option value="{{$cv->macvcq}}">{{$cv->tencv}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Dân tộc</label>
                                            <div class="col-sm-8 controls">
                                                <select name="dantoc" id="dantoc" class="form-control">
                                                    <option value="">-- Chọn dân tộc ---</option>
                                                    @foreach($m_dt as $dt)
                                                        <option value="{{$dt->dantoc}}">{{$dt->dantoc}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Tôn giáo </label>

                                            <div class="col-md-8">
                                                {!!Form::text('tongiao', null, array('id' => 'tongiao','class' => 'form-control'))!!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Giới tính</label>

                                            <div class="col-sm-8">
                                                {!! Form::select(
                                                'gioitinh',
                                                array(
                                                'Nam' => 'Nam',
                                                'Nữ' => 'Nữ'
                                                ),null,
                                                array('id' => 'gioitinh', 'class' => 'form-control'))
                                                !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Ngày sinh</label>

                                            <div class="col-sm-8">
                                                {!!Form::input('date','ngaysinh', null, array('id' => 'ngaysinh','class' => 'form-control'))!!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Nơi ở</label>

                                            <div class="col-sm-8">
                                                {!!Form::text('noio', null, array('id' => 'noio','class' => 'form-control'))!!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Hộ khẩu</label>

                                            <div class="col-sm-8">
                                                {!!Form::text('hktt', null, array('id' => 'hktt','class' => 'form-control'))!!}
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Nơi sinh-Xã </label>

                                            <div class="col-sm-8">
                                                {!!Form::text('nsxa', null, array('id' => 'nsxa','class' => 'form-control'))!!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Huyện </label>

                                            <div class="col-sm-8 controls">
                                                {!!Form::text('nshuyen', null, array('id' => 'nshuyen','class' => 'form-control'))!!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Tỉnh </label>

                                            <div class="col-sm-8">
                                                {!!Form::text('nstinh', null, array('id' => 'nstinh','class' => 'form-control'))!!}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Quê quán-Xã </label>

                                            <div class="col-sm-8">
                                                {!!Form::text('qqxa', null, array('id' => 'qqxa','class' => 'form-control'))!!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Huyện </label>

                                            <div class="col-sm-8 controls">
                                                {!!Form::text('qqhuyen', null, array('id' => 'qqhuyen','class' => 'form-control'))!!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Tỉnh </label>

                                            <div class="col-sm-8">
                                                {!!Form::text('qqtinh', null, array('id' => 'qqtinh','class' => 'form-control'))!!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center" style="border-top: 1px solid #e5e5e5;padding-top: 10px">
                                <button type="reset" class="btn btn-info"><i class="fa fa-refresh"></i>&nbsp;Tạo mới</button>
                                <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Tra cứu</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
            </div>
        </div>
    </div>
    @include('includes.modal.delete')
@stop