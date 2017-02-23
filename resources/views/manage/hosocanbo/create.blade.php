<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 7/7/2016
 * Time: 2:42 PM
 */
?>
@extends('main')

@section('custom-style')
    <link href="{{url('assets/global/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/select2/select2.css')}}"/>
@stop

@section('custom-script')
    <script type="text/javascript" src="{{url('assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js') }}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/select2/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{url('assets/admin/pages/scripts/form-wizard.js')}}"></script>
    <script>
        jQuery(document).ready(function() {
            FormWizard.init();
        });
    </script>
@stop

@section('content')
    <div class="row">
            <div class="col-md-12">
                <div class="portlet box blue" id="form_wizard_1">
                    <div class="portlet-title">
                        <div class="caption">
                            THÊM MỚI HỒ SƠ CÁN BỘ
                        </div>
                        <div class="tools hidden-xs">
                            <a href="javascript:;" class="collapse">
                            </a>
                        </div>
                    </div>

                    <div class="portlet-body form">
                        {!! Form::open(['url'=>'/nghiep_vu/ho_so/store','method'=>'post' , 'files'=>true, 'id' => 'create-hscb','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}

                            <div class="form-body">
                                <ul class="nav nav-pills nav-justified steps">
                                    <li><a href="#tab1" data-toggle="tab" class="step">
                                            <i class="glyphicon glyphicon-user"></i>

                                            <p class="anchor">Bước 1</p>

                                            <p class="description">Thông tin cơ bản</p></a>
                                    </li>
                                    <li><a href="#tab2" data-toggle="tab" class="step">
                                            <i class="glyphicon glyphicon-list-alt"></i>

                                            <p class="anchor">Bước 2</p>

                                            <p class="description">Thông tin tuyển dụng</p></a>
                                    </li>
                                    <li><a href="#tab3" data-toggle="tab" class="step">
                                            <i class="glyphicon glyphicon-plus-sign"></i>

                                            <p class="anchor">Bước 3</p>

                                            <p class="description">Trình độ cán bộ</p></a>
                                    </li>
                                    <li><a href="#tab4" data-toggle="tab" class="step">
                                            <i class="glyphicon glyphicon-check"></i>

                                            <p class="anchor">Bước 4</p>

                                            <p class="description">Thông tin lương, phụ cấp</p></a>
                                    </li>
                                    <li><a href="#tab5" data-toggle="tab" class="step">
                                            <i class="glyphicon glyphicon-paperclip"></i>

                                            <p class="anchor">Bước 5</p>

                                            <p class="description">Thông tin khác</p></a>
                                    </li>
                                </ul>

                                <div id="bar" class="progress progress-striped" role="progressbar">
                                    <div class="progress-bar progress-bar-success">
                                    </div>
                                </div>

                                <div class="tab-content">
                                    @include('manage.hosocanbo.include.coban')
                                    @include('manage.hosocanbo.include.tuyendung')
                                    @include('manage.hosocanbo.include.trinhdo')
                                    @include('manage.hosocanbo.include.luong')
                                    @include('manage.hosocanbo.include.khac')
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-4 col-md-8">
                                        <button type="button" name="previous" value="Previous" class="btn btn-info button-previous">
                                            <i class="fa fa-arrow-circle-o-left mrx"></i>Quay lại
                                        </button>
                                        <button id="btnnext" type="button" name="next" value="Next" class="btn btn-info button-next mlm">
                                            Tiếp theo<i class="fa fa-arrow-circle-o-right mlx"></i></button>
                                        <!-- Kiem tra co quyen moi dc sửa, ko thì chỉ là xem -->
                                        <button type="submit" class="btn btn-success">Tạo hồ sơ</button>
                                    </div>
                                </div>

                                <!--div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <a href="javascript:;" class="btn default button-previous">
                                            <i class="m-icon-swapleft"></i> Back </a>
                                        <a href="javascript:;" class="btn blue button-next">
                                            Continue <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                        <a href="javascript:;" class="btn green button-submit">
                                            Submit <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div-->
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
    </div>
@stop
