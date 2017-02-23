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
                    <div class="caption">DANH SÁCH XÉT HƯU TRÍ CỦA CÁN BỘ</div>
                    <div class="actions">
                        <button type="button" id="_btnadd" class="btn btn-success btn-xs" onclick="add()"><i class="fa fa-plus"></i>&nbsp;Tạo danh sách</button>
                    </div>
                </div>
                <div class="portlet-body form-horizontal">
                    <table id="sample_3" class="table table-hover table-striped table-bordered" style="min-height: 230px">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 5%">STT</th>
                                <th class="text-center">Số quyết định</th>
                                <th class="text-center">Ngày quyết định</th>
                                <th class="text-center">Cơ quan quyết định</th>
                                <th class="text-center">Nội dung quyết định</th>
                                <th class="text-center">Ngày xét duyệt</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($model))
                            @foreach($model as $key=>$value)
                                <tr>
                                    <td class="text-center">{{$key+1}}</td>
                                    <td>{{$value->soqd}}</td>
                                    <td>{{getDayVn($value->ngayqd)}}</td>
                                    <td>{{$value->coquanqd}}</td>
                                    <td>{{$value->noidung}}</td>
                                    <td>{{getDayVn($value->ngayxet)}}</td>
                                    <td>
                                        <button type="button" onclick="edit({{$value->id}})" class="btn btn-info btn-xs mbs">
                                            <i class="fa fa-edit"></i>&nbsp;Chỉnh sửa</button>
                                        <a href="{{url($furl.'maso='.$value->maht)}}" class="btn btn-success btn-xs mbs">
                                            <i class="fa fa-th-list"></i>&nbsp;Chi tiết</a>
                                        <button type="button" onclick="cfDel('{{$furl.'del/'.$value->id}}')" class="btn btn-danger btn-xs mbs" data-target="#delete-modal-confirm" data-toggle="modal">
                                            <i class="fa fa-trash-o"></i>&nbsp;Xóa</button>
                                    </td>
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
        <div class="modal-dialog modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                <h4 id="modal-header-primary-label" class="modal-title">DANH SÁCH XÉT HƯU TRÍ</h4>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    @include('includes.crumbs.quyetdinh')
                    @include('includes.crumbs.xetduyet')

                    <input type="hidden" id="id_ct" name="id_ct"/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</button>
                <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary" onclick="confirm()">Đồng ý</button>
            </div>
        </div>
    </div>

    <script>
        function add(){
            $('#soqd').val('');
            $('#ngayqd').val('');
            $('#nguoiky').val('');
            $('#coquanqd').val('');
            $('#noidung').val('');
            $('#ngayxet').val('');
            $('#id_ct').val(0);
            $('#chitiet-modal').modal('show');
        }

        function edit(id){
            //var tr = $(e).closest('tr');
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{$furl_ajax}}' + 'get',
                type: 'GET',
                data: {
                    _token: CSRF_TOKEN,
                    id: id
                },
                dataType: 'JSON',
                success: function (data) {
                    $('#soqd').val(data.soqd);
                    $('#ngayqd').val(data.ngayqd);
                    $('#nguoiky').val(data.nguoiky);
                    $('#coquanqd').val(data.coquanqd);
                    $('#noidung').val(data.noidung);
                    $('#ngayxet').val(data.ngayxet);
                },
                error: function(message){
                    toastr.error(message,'Lỗi!');
                }
            });

            $('#id_ct').val(id);
            $('#chitiet-modal').modal('show');
        }

        function confirm(){
            var valid=true;
            var message='';

            var soqd=$('#soqd').val();
            var ngayqd=$('#ngayqd').val();
            var nguoiky=$('#nguoiky').val();
            var coquanqd=$('#coquanqd').val();
            var noidung=$('#noidung').val();
            var ngayxet=$('#ngayxet').val();

            var id=$('#id_ct').val();

            if(ngayxet==''){
                valid=false;
                message +='Ngày xét duyệt không được bỏ trống \n';
            }

            if(valid){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                if(id==0){//Thêm mới
                    $.ajax({
                        url: '{{$furl_ajax}}' + 'add',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            soqd:soqd,
                            ngayqd:ngayqd,
                            nguoiky:nguoiky,
                            coquanqd:coquanqd,
                            noidung:noidung,
                            ngayxet:ngayxet
                        },
                        dataType: 'JSON',
                        success: function (data) {
                            if (data.status == 'success') {
                                window.location.href = data.message;
                            }
                        },
                        error: function(message){
                            toastr.error(message,'Lỗi!');
                        }
                    });
                }else{//Cập nhật
                    $.ajax({
                        url: '{{$furl_ajax}}' + 'update',
                        type: 'GET',
                        data: {
                            _token: CSRF_TOKEN,
                            soqd:soqd,
                            ngayqd:ngayqd,
                            nguoiky:nguoiky,
                            coquanqd:coquanqd,
                            noidung:noidung,
                            ngayxet:ngayxet,
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