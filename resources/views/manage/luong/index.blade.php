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
                        DANH SÁCH QUÁ TRÌNH HƯỞNG LƯƠNG CỦA CÁN BỘ
                    </div>
                    @include('includes.crumbs.bt_add')
                </div>

                <div class="portlet-body form-horizontal">
                    @include('includes.crumbs.cb_canbo')
                    <table id="sample_3" class="table table-hover table-striped table-bordered" style="min-height: 230px">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 5%">STT</th>
                                <th class="text-center">Từ ngày</th>
                                <th class="text-center">Đến ngày</th>
                                <th class="text-center">Mã ngạch</th>
                                <th class="text-center">Bậc</th>
                                <th class="text-center">Hệ số</th>
                                <th class="text-center">Vượt khung</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($model))
                            @foreach($model as $key=>$value)
                                <tr>
                                    <td class="text-center">{{$key+1}}</td>
                                    <td>{{getDayVn($value->ngaytu)}}</td>
                                    <td>{{getDayVn($value->ngayden)}}</td>
                                    <td>{{$value->msngbac}}</td>
                                    <td>{{$value->bac}}</td>
                                    <td>{{$value->heso}}</td>
                                    <td>{{$value->vuotkhung}}</td>
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
    @include('includes.modal.luong_chitiet')

    <script>
        function add(){            
            var macb=$('#cbmacb').val();
            if(macb=='all'){
                alert('Bạn cần chọn cán bộ để nhập thông tin.');
                $('#cbmacb').focus();
            }else{
                $('#msngbac').val('');
                $('#ngaytu').val('');
                $('#ngayden').val('');
                $('#bac').val('');
                $('#heso').val('');
                $('#vuotkhung').val('');
                $('#pthuong').val(100);
              
                $('#id_ct').val(0);
                $('#chitiet-modal').modal('show');
            }
        }

        function getInfo(){
            window.location.href = '{{$furl}}'+'maso='+$('#cbmacb').val();
        }

        function edit(id) {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var kq = $.ajax({
                url: '{{$furl_ajax}}' + 'get',
                type: 'GET',
                data: {
                    _token: CSRF_TOKEN,
                    id: id
                },
                dataType: 'JSON',
                success: function (data) {
                    $('#chitiet').replaceWith(data.message);
                    $('#chitiet-modal').modal('show');
                },
                error: function (message) {
                    alert('Lỗi: '+ message);
                }
            });

        }

        function confirm(){
            var valid=true;
            var message='';

            var macanbo = $('#cbmacb').val();

            var msngbac=$('#msngbac').val();
            var ngaytu=$('#ngaytu').val();
            var ngayden=$('#ngayden').val();
            var bac=$('#bac').val();
            var heso=$('#heso').val();
            var vuotkhung=$('#vuotkhung').val();
            var pthuong=$('#pthuong').val();

            var id=$('#id_ct').val();

            if(ngaytu==''){
                valid=false;
                message +='Ngày hưởng lương không được bỏ trống \n';
            }
            if(msngbac==''){
                valid=false;
                message +='Mã ngạch lương không được bỏ trống \n';
            }
            if(valid){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                if(id==0){//Thêm mới
                    $.ajax({
                        url: '{{$furl_ajax}}' + 'add',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            macanbo: macanbo,
                            ngaytu: ngaytu,
                            ngayden: ngayden,
                            msngbac: msngbac,
                            bac: bac,
                            heso: heso,
                            vuotkhung: vuotkhung,
                            pthuong: pthuong
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
                }else{//Cập nhật
                    $.ajax({
                        url: '{{$furl_ajax}}' + 'update',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            ngaytu: ngaytu,
                            ngayden: ngayden,
                            msngbac: msngbac,
                            bac: bac,
                            heso: heso,
                            vuotkhung: vuotkhung,
                            pthuong: pthuong,
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
                alert(message);
            }
            return valid;
        }
    </script>

    @include('includes.script.func_msnb')
    @include('includes.modal.delete')
    @include('includes.script.scripts')
@stop