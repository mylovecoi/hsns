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
                    <div class="caption">
                        <i class="fa fa-list-alt"></i>DANH SÁCH TÀI LIỆU KÈM THEO HỒ SƠ CÁN BỘ
                    </div>
                    <div class="actions">
                        <button type="button" id="_btnadd" class="btn btn-default btn-xs" onclick="add()"><i class="fa fa-plus"></i>&nbsp;Thêm mới tài liệu</button>
                    </div>
                </div>

                <div class="portlet-body form-horizontal">
                    @include('includes.crumbs.cb_canbo')
                    <table id="sample_3" class="table table-hover table-striped table-bordered" style="min-height: 230px">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 5%">STT</th>
                                <th class="text-center">Tên tài liệu</th>
                                <th class="text-center">Phân loại tài liệu</th>
                                <th class="text-center">Ngày bàn giao</th>
                                <th class="text-center">Người nhận</th>
                                <th class="text-center">Ghi chú</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($model))
                            @foreach($model as $key=>$value)
                                <tr>
                                    <td class="text-center">{{$key+1}}</td>
                                    <td>{{$value->tentailieu}}</td>
                                    <td>{{$value->phanloai}}</td>
                                    <td>{{getDayVn($value->ngaybangiao)}}</td>
                                    <td>{{$value->nguoinhan}}</td>
                                    <td>{{$value->ghichu}}</td>
                                    @include('includes.crumbs.bt_editdel')
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--Modal thông tin chi tiết -->
    <div id="chitiet-modal" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                    <h4 id="modal-header-primary-label" class="modal-title">Thông tin tài liệu kèm theo hồ sơ</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-4 control-label"> Tên tài liệu</label>
                            <div class="col-md-8">
                                {!!Form::text('tentailieu', null, array('id' => 'tentailieu','class' => 'form-control'))!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"> Phân loại tài liệu</label>
                            <div class="col-md-8">
                                {!! Form::select(
                                'phanloai',
                                array(
                                'Bản gốc' => 'Bản gốc',
                                'Bản sao công chứng' => 'Bản sao công chứng',
                                'Bản sao không công chứng' => 'Bản sao không công chứng',
                                'Khác' => 'Khác'
                                ),null,
                                array('id' => 'phanloai', 'class' => 'form-control','style'=>'width : 100%'))
                                !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"> Ngày bàn giao</label>
                            <div class="col-md-8">
                                <input type="date" name="ngaybangiao" id="ngaybangiao" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"> Người nhận</label>
                            <div class="col-md-8">
                                {!!Form::text('nguoinhan', null, array('id' => 'nguoinhan','class' => 'form-control'))!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"> Ghi chú</label>
                            <div class="col-md-8">
                                {!!Form::textarea('ghichu', null, array('id' => 'ghichu','class' => 'form-control','rows'=>'3'))!!}
                            </div>
                        </div>
                        <input type="hidden" id="id_ct" name="id_ct"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</button>
                    <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary" onclick="confirm()">Đồng ý</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function add(){            
            var macb=$('#cbmacb').val();
            if(macb=='all'){
                alert('Bạn cần chọn cán bộ để nhập thông tin.');
                $('#cbmacb').focus();
            }else{
                $('#tentailieu').val('');
                $('#phanloai').val('Bản gốc');
                $('#ngaybangiao').val('');
                $('#nguoinhan').val('');
                $('#ghichu').val('');
                $('#id_ct').val(0);
                $('#chitiet-modal').modal('show');
            }
        }

        function getInfo(){
            window.location.href = '{{$furl}}'+'maso='+$('#cbmacb').val();
        }

        function edit(id){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{$furl_ajax}}'+'get',
                type: 'GET',
                data: {
                    _token: CSRF_TOKEN,
                    id: id
                },
                dataType: 'JSON',
                success: function (data) {
                    if (data.status == 'success') {
                        $('#tentailieu').val(data.tentailieu);
                        $('#phanloai').val(data.phanloai);
                        $('#ngaybangiao').val(data.ngaybangiao);
                        $('#nguoinhan').val(data.nguoinhan);
                        $('#ghichu').val(data.ghichu);
                        $('#id_ct').val(data.id);
                        $('#chitiet-modal').modal('show');
                    }
                },
                error: function(message){
                    toastr.error(message,'Lỗi!');
                }
            });
        }

        function confirm(){
            var valid=true;
            var message='';

            var macanbo = $('#cbmacb').val();

            var tentailieu=$('#tentailieu').val();
            var phanloai=$('#phanloai').val();
            var ngaybangiao=$('#ngaybangiao').val();
            var nguoinhan=$('#nguoinhan').val();
            var ghichu=$('#ghichu').val();
            
            var id=$('#id_ct').val();

            if(tentailieu==''){
                valid=false;
                message +='Tên tài liệu không được bỏ trống \n';
            }

            if(valid){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                if(id==0){//Thêm mới
                    $.ajax({
                        url: '{{$furl_ajax}}'+'add',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            macanbo: macanbo,
                            tentailieu: tentailieu,
                            phanloai: phanloai,
                            ngaybangiao: ngaybangiao,
                            nguoinhan: nguoinhan,
                            ghichu: ghichu
                        },
                        dataType: 'JSON',
                        success: function (data) {
                            if (data.status == 'success') {
                                location.reload();
                            }
                        },
                        error: function(message){
                            toastr.error(message, "Lỗi!");
                        }
                    });
                }else{//Cập nhật
                    $.ajax({
                        url: '{{$furl_ajax}}'+'update',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            macanbo: macanbo,
                            tentailieu: tentailieu,
                            phanloai: phanloai,
                            ngaybangiao: ngaybangiao,
                            nguoinhan: nguoinhan,
                            ghichu: ghichu,
                            id: id
                        },
                        dataType: 'JSON',
                        success: function (data) {
                            if (data.status == 'success') {
                                location.reload();
                            }
                        },
                        error: function(message){
                            alert(message);
                        }
                    });
                }
                $('#chitiet-modal').modal('hide');
            }else{
                toastr.error(message, "Lỗi!");
            }
            return valid;
        }
    </script>

    @include('includes.modal.delete')
@stop