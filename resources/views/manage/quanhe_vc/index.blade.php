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
                        <i class="fa fa-list-alt"></i>DANH SÁCH QUAN HỆ GIA ĐÌNH CỦA VỢ / CHỒNG
                    </div>
                    <div class="actions">
                        <button type="button" id="_btnadd" class="btn btn-default btn-xs" onclick="add()"><i class="fa fa-plus"></i>&nbsp;Thêm mới quan hệ</button>
                    </div>
                </div>
                <div class="portlet-body form-horizontal">
                    @include('includes.crumbs.cb_canbo')
                    <table id="sample_3" class="table table-hover table-striped table-bordered" style="min-height: 230px">
                        <thead>
                            <tr>
                                        <th class="text-center" style="width: 5%">STT</th>
                                        <th class="text-center">Quan hệ</th>
                                        <th class="text-center">Họ tên</th>
                                        <th class="text-center">Ngày sinh</th>
                                        <th class="text-center">Thông tin chi tiết</th>
                                        <th class="text-center">Thao tác</th>
                                    </tr>
                        </thead>

                        <tbody>
                        @if(isset($model))
                            @foreach($model as $key=>$value)
                                <tr>
                                    <td class="text-center">{{$key+1}}</td>
                                    <td>{{$value->quanhe}}</td>
                                    <td>{{$value->hoten}}</td>
                                    <td>{{$value->ngaysinh}}</td>
                                    <td>{{$value->thongtinct}}</td>
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
                            <label class="col-md-4 control-label"> Quan hệ</label>
                            <div class="col-md-8">
                                <select class="form-control" name="quanhe" id="quanhe" style="width: 100%">
                                    <option value="">--Chọn quan hệ gia đình--</option>
                                    @foreach($m_qh as $qh)
                                        <option value="{{$qh->quanhe}}">{{$qh->quanhe}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"> Họ tên</label>
                            <div class="col-md-8">
                                {!!Form::text('hoten', null, array('id' => 'hoten','class' => 'form-control'))!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"> Năm sinh</label>
                            <div class="col-md-8">
                                {!!Form::text('ngaysinh', null, array('id' => 'ngaysinh','class' => 'form-control'))!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"> Thông tin chi tiết</label>
                            <div class="col-md-8">
                                {!!Form::textarea('thongtinct', null, array('id' => 'thongtinct','class' => 'form-control','rows'=>'5'))!!}
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
                $('#quanhe').val('').change();
                $('#hoten').val('');
                $('#ngaysinh').val('');
                $('#thongtinct').val('');
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
                        $('#quanhe').val(data.quanhe);
                        $('#hoten').val(data.hoten);
                        $('#ngaysinh').val(data.ngaysinh);
                        $('#thongtinct').val(data.thongtinct);
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


            var quanhe=$('#quanhe').val();
            var hoten=$('#hoten').val();
            var ngaysinh=$('#ngaysinh').val();
            var thongtinct=$('#thongtinct').val();

            var id=$('#id_ct').val();

            if(hoten==''){
                valid=false;
                message +='Tên người quan hệ không được bỏ trống \n';
            }

            if(quanhe==''){
                valid=false;
                message +='Quan hệ gia đình không được bỏ trống \n';
            }

            if(valid){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                if(id==0){//Thêm mới
                    $.ajax({
                        url: '{{$furl_ajax}}'+'add_vc',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            macanbo: macanbo,
                            quanhe:quanhe,
                            hoten:hoten,
                            ngaysinh:ngaysinh,
                            thongtinct:thongtinct,
                            phanloai:'Vợ chồng'
                        },
                        dataType: 'JSON',
                        success: function (data) {
                            if (data.status == 'success') {
                                location.reload();
                            }
                        },
                        error: function(message){
                            toastr.error(message,'Lỗi!');
                        }
                    });
                }else{//Cập nhật
                    $.ajax({
                        url: '{{$furl_ajax}}'+'update_vc',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            macanbo: macanbo,
                            quanhe:quanhe,
                            hoten:hoten,
                            ngaysinh:ngaysinh,
                            thongtinct:thongtinct,
                            phanloai:'Vợ chồng',
                            id: id
                        },
                        dataType: 'JSON',
                        success: function (data) {
                            if (data.status == 'success') {
                                location.reload();
                            }
                        },
                        error: function(message){
                            toastr.error(message,'Lỗi!');
                        }
                    });
                }
                $('#chitiet-modal').modal('hide');
            }else{
                toastr.error(message,'Lỗi!');
            }
            return valid;
        }
    </script>

    @include('includes.modal.delete')
@stop