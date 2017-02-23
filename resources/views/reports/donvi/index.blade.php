<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 24/06/2016
 * Time: 4:00 PM
 */
        ?>
@extends('main')

@section('content')
    <h3 class="page-title">
        BÁO CÁO SỐ LƯỢNG, CHẤT LƯỢNG CÁN BỘ
    </h3>

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box">
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <ol>
                                <li><a href="#" data-target="#chitiet-modal" data-toggle="modal" onclick="baocao('{{$furl.'mausl1'}}')">Báo cáo số lượng đội ngũ cán bộ (Mẫu 1)</a></li>
                                <li><a href="#" data-target="#chitiet-modal" data-toggle="modal" onclick="baocao('{{$furl.'mausl2'}}')">Báo cáo số lượng đội ngũ cán bộ (Mẫu 2)</a></li>
                                <li><a href="#" data-target="#chitiet-modal" data-toggle="modal" onclick="baocao('{{$furl.'mausl3'}}')">Báo cáo số lượng đội ngũ cán bộ (Mẫu 3)</a></li>
                                <li><a href="#" data-target="#chitiet-modal" data-toggle="modal" onclick="baocao('{{$furl.'maudv'}}')">Báo cáo chất lượng đảng viên</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="chitiet-modal" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
        {!! Form::open(['url'=>'#','target'=>'_blank' ,'method'=>'post' ,'id' => 'thoaibc', 'class'=>'form-horizontal form-validate']) !!}
            <div class="modal-dialog modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                    <h4 id="modal-header-primary-label" class="modal-title">Thông tin kết xuất báo cáo</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-4 control-label"> Ngày báo cáo<span class="require">*</span></label>
                            <div class="col-md-8">
                                {!! Form::input('date','ngaybaocao',null,array('id' => 'ngaybaocao', 'class' => 'form-control'))!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-8">
                                {!! Form::checkbox('dangct', 'value', true, array('id' => 'dangct'))!!} <label> Cán bộ đang công tác</label>
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

    <script>
        function baocao(url){
            $('#thoaibc').attr('action',url);
        }

        $(function(){
            $('#thoaibc :submit').click(function() {
                var valid=true;
                var message='';
                var ngaybc=$('#ngaybaocao').val();

                if(ngaybc==''){
                    valid=false;
                    message='Ngày báo cáo không được bỏ trống';
                }

                if (valid == false){
                    alert(message);
                    $("form").submit(function (e) {
                        e.preventDefault();
                    });
                }
                else{
                    $("form").unbind('submit').submit();
                    //$('#chitiet-modal').modal('hiden');
                }
            });
        });
    </script>
@stop