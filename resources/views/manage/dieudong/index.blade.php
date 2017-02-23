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
                        <i class="fa fa-list-alt"></i>DANH SÁCH HỒ SƠ LUÂN CHUYỂN, ĐIỀU ĐỘNG CÁN BỘ
                    </div>
                    <div class="actions">
                        <button type="button" id="_btnadd" class="btn btn-default btn-xs" onclick="add()"><i class="fa fa-plus"></i>&nbsp;Thêm mới hồ sơ</button>
                    </div>
                </div>
                <div class="portlet-body form-horizontal">
                    @include('includes.crumbs.cb_canbo')
                    <table id="sample_3" class="table table-hover table-striped table-bordered" style="min-height: 230px">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 5%">STT</th>
                            <th class="text-center">Ngày điều động</th>
                            <th class="text-center">Đơn vị chuyển đến</th>
                            <th class="text-center">Phòng ban chuyển đến</th>
                            <th class="text-center">Chức vụ mới</th>
                            <th class="text-center">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if(isset($model))
                                @foreach($model as $key=>$value)
                                    <tr>
                                        <td class="text-center">{{$key+1}}</td>
                                        <td>{{getDayVn($value->ngaylc)}}</td>
                                        <td>{{$value->tendv}}</td>
                                        <td>{{$value->tenpb}}</td>
                                        <td>{{$value->tencvcq}}</td>
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
                    <h4 id="modal-header-primary-label" class="modal-title">Thông tin hồ sơ luân chuyển, điều động cán bộ</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-4 control-label"> Ngày điều động<span class="require">*</span></label>
                            <div class="col-md-8">
                                <input type="date" name="ngaylc" id="ngaylc" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"> Đơn vị chuyển đến<span class="require">*</span></label>
                            <div class="col-md-8">
                                <select name="donvi" id="donvi" class="form-control">
                                    @if(isset($m_dvm))
                                        @foreach($m_dvm as $dv)
                                            <option value="{{$dv['madv']}}">{{$dv['tendv']}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        @include('includes.crumbs.phongban')
                        @include('includes.crumbs.chucvu')
                        @include('includes.crumbs.quyetdinh')
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
                $('#ngaylc').val('');
                $('#donvi').val('');
                $('#mapb').val('');
                $('#macvcq').val('');
                $('#soqd').val('');
                $('#ngayqd').val('');
                $('#nguoiky').val('');
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
                        $('#ngaylc').val(data.ngaylc);
                        $('#donvi').val(data.madv);
                        $('#mapb').val(data.mapb);
                        $('#macvcq').val(data.macvcq);
                        $('#soqd').val(data.soqd);
                        $('#ngayqd').val(data.ngayqd);
                        $('#nguoiky').val(data.nguoiky);
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

            var ngaylc=$('#ngaylc').val();
            var donvi=$('#donvi').val();
            var phongban=$('#mapb').val();
            var chucvu=$('#macvcq').val();
            var soqd=$('#soqd').val();
            var ngayqd=$('#ngayqd').val();
            var nguoiky=$('#nguoiky').val();

            var id=$('#id_ct').val();

            if(ngaylc==''){
                valid=false;
                message +='Ngày điều động không được bỏ trống \n';
            }

            if(donvi==''){
                valid=false;
                message +='Đơn vị mới không được bỏ trống \n';
            }
            if(phongban==''){
                valid=false;
                message +='Phòng ban mới không được bỏ trống \n';
            }
            if(chucvu==''){
                valid=false;
                message +='Chức vụ mới không được bỏ trống \n';
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
                            ngaylc: ngaylc,
                            donvi: donvi,
                            phongban: phongban,
                            chucvu: chucvu,
                            soqd: soqd,
                            ngayqd: ngayqd,
                            nguoiky: nguoiky
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
                        url: '{{$furl_ajax}}'+'update',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            ngaylc: ngaylc,
                            donvi: donvi,
                            phongban: phongban,
                            chucvu: chucvu,
                            soqd: soqd,
                            ngayqd: ngayqd,
                            nguoiky: nguoiky,
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
                alert(message);
            }
            return valid;
        }
    </script>

    @include('includes.modal.delete')
@stop