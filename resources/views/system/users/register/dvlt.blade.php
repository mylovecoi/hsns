@extends('main')

@section('custom-style')

@stop


@section('custom-script')
    <script type="text/javascript" src="{{url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
    <!--cript src="{{url('assets/admin/pages/scripts/form-validation.js')}}"></script-->
    <script>
        function getId(id){
            document.getElementById("idregister").value=id;
        }
        function ClickCreate(){
            $('#frm_create').submit();
        }
    </script>
@stop

@section('content')
    <h3 class="page-title">
        Thông tin doanh nghiệp cung cấp dịch vụ lưu trú<small> đăng ký tài khoản</small>
    </h3>
    <!-- END PAGE HEADER-->

    <!-- BEGIN DASHBOARD STATS -->
    <div class="row center">
        <div class="col-md-12 center">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet box blue">
                <!--div class="portlet-title">
                </div-->
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <meta name="csrf-token" content="{{ csrf_token() }}" />
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Tên doanh nghiệp<span class="require">*</span></label>
                                    <input type="text" class="form-control required" name="tendn" id="tendn" value="{{$model->tendn}}" readonly/>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Mã số thuế<span class="require">*</span></label>
                                    <input type="text" class="form-control required" name="masothue" id="masothue" value="{{$model->masothue}}" readonly>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Số điện thoại trụ sở chính</label>
                                    <input type="text" class="form-control" name="teldn" id="teldn" value="{{$model->teldn}}" readonly>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Số fax trụ sở chính</label>
                                    <input type="text" class="form-control" name="faxdn" id="faxdn" value="{{$model->faxdn}}" readonly>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Địa chỉ trụ sở</label>
                                    <input type="text" class="form-control" name="diachidn" id="diachidn" value="{{$model->diachidn}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <input type="text" class="form-control" name="noidknopthue" id="noidknopthue" value="{{$model->email}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nơi đăng ký nộp thuế</label>
                                    <input type="text" class="form-control" name="noidknopthue" id="noidknopthue" value="{{$model->noidknopthue}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Giấy đăng ký kinh doanh</label>
                                    <input type="text" class="form-control required" name="chucdanhky" id="chucdanhky" value="{{$model->giayphepkd}}" readonly>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <a href="{{$model->tailieu}}">Xem giấy phép đăng ký kinh doanh</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Tài khoản truy cập<span class="require">*</span></label>
                                    <input type="text" class="form-control required" name="username" id="username" value="{{$model->username}}" readonly>
                                </div>
                            </div>

                        </div>
            </div>
            <!-- END FORM-->
        </div>
    </div>
    <div class="row" style="text-align: center">
        <div class="cod-md-12">
                <button type="button" class="btn green" onclick="getId('{{$model->id}}')" data-target="#create-modal" data-toggle="modal"><i class="fa fa-plus"></i> Tạo tài khoản truy cập</button>
                <a href="{{url('users/register/pl=dich_vu_luu_tru')}}" class="btn default"> Quay lại</a>
        </div>
    </div>
    <!-- END VALIDATION STATES-->
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="modal fade" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                {!! Form::open(['url'=>'register/createdvlt','id' => 'frm_create'])!!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Đồng ý tạo tài khoản?</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Doanh nghiệp <b>{{$model->tendn}}</b> - tài khoản truy cập <b>{{$model->username}}</b></label>
                    </div>
                </div>
                <input type="hidden" name="idregister" id="idregister">
                <div class="modal-footer">
                    <button type="submit" class="btn blue" onclick="ClickCreate()">Đồng ý</button>
                    <button type="button" class="btn default" data-dismiss="modal">Hủy</button>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

@stop