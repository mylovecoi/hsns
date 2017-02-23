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
                        <b>DANH MỤC QUAN HỆ GIA ĐÌNH</b>
                    </div>
                    <div class="actions">
                        <button type="button" id="_btnaddPB" class="btn btn-success btn-xs" onclick="addPB()"><i class="fa fa-plus"></i>&nbsp;Thêm mới quan hệ</button>
                    </div>
                </div>
                <div class="portlet-body form-horizontal">
                    <table id="sample_3" class="table table-hover table-striped table-bordered" style="min-height: 230px">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 10%">STT</th>
                                <th class="text-center">Tên quan hệ gia đình</th>
                                <th class="text-center">Nhóm quan hệ gia đình</th>
                                <th class="text-center">Sắp xếp</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($model))
                                @foreach($model as $key=>$value)
                                    <tr>
                                        <td class="text-center">{{$key+1}}</td>
                                        <td name="quanhe">{{$value->quanhe}}</td>
                                        <td class="text-center" name="nhom">{{$value->nhom}}</td>
                                        <td class="text-center" name="sapxep">{{$value->sapxep}}</td>
                                        <td>
                                            <button type="button" onclick="editPB(this, {{$value->id}})" class="btn btn-info btn-xs mbs">
                                                <i class="fa fa-edit"></i>&nbsp; Chỉnh sửa</button>
                                            <button type="button" onclick="cfDel('/danh_muc/quan_he_gd/del/{{$value->id}}')" class="btn btn-danger btn-xs mbs" data-target="#delete-modal-confirm" data-toggle="modal">
                                                <i class="fa fa-trash-o"></i>&nbsp; Xóa</button>
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

    <!--Modal thông tin phòng ban -->
    <div id="phongban-modal" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                    <h4 id="modal-header-primary-label" class="modal-title">Thông tin quan hệ gia đình</h4>
                </div>
                <div class="modal-body">
                    <label class="form-control-label">Tên quan hệ gia đình<span class="require">*</span></label>
                    {!!Form::text('quanhe', null, array('id' => 'quanhe','class' => 'form-control','required'=>'required','autofocus'=>'true'))!!}

                    <label class="form-control-label">Nhóm quan hệ gia đình</label>
                    {!!Form::text('nhom', null, array('id' => 'nhom','class' => 'form-control'))!!}

                    <label class="form-control-label">Sắp xếp</label>
                    {!!Form::text('sapxep', null, array('id' => 'sapxep','class' => 'form-control'))!!}

                    <input type="hidden" id="id_qh" name="id_qh"/>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</button>
                    <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary" onclick="cfPB()">Đồng ý</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function addPB(){
            $('#quanhe').val('');
            $('#sapxep').attr('value','99');
            $('#nhom').attr('value','1');
            $('#id_qh').val(0);
            $('#phongban-modal').modal('show');
        }

        function editPB(e, id){
            var tr = $(e).closest('tr');
            $('#quanhe').val($(tr).find('td[name=quanhe]').text());
            $('#nhom').val($(tr).find('td[name=nhom]').text());
            $('#sapxep').attr('value',$(tr).find('td[name=sapxep]').text());
            $('#id_qh').val(id);
            $('#phongban-modal').modal('show');
        }

        function cfPB(){
            var valid=true;
            var message='';

            var quanhe=$('#quanhe').val();
            var nhom=$('#nhom').val();
            var sapxep=$('#sapxep').val();
            var id=$('#id_qh').val();

            if(quanhe==''){
                valid=false;
                message +='Tên phòng ban không được bỏ trống \n';
            }

            if(valid){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: '/danh_muc/quan_he_gd/store',
                    type: 'GET',
                    data: {
                            _token: CSRF_TOKEN,
                        quanhe: quanhe,
                        nhom: nhom,
                            sapxep: sapxep,
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
                $('#phongban-modal').modal('hide');
            }else{
                alert(message);
            }

            return valid;
        }
    </script>

    @include('includes.modal.delete')
@stop

@section('script')
    <script src="{{url('bower_components/datatables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{url('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.js')}}"></script>
    <script src="{{url('bower_components/datatables-responsive/js/dataTables.responsive.js')}}"></script>
    <script>
        var phongban;
        $(document).ready(function() {
            $('#table_id').DataTable({
                responsive: true,
                bSort: false,
                iDisplayLength: 10
            });
            //di chuyen trang
            //table.page(1).draw('page');
        });
    </script>
@stop