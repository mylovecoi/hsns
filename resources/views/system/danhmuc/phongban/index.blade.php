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
                        DANH MỤC PHÒNG BAN
                    </div>
                    <div class="actions">
                        <button type="button" id="_btnaddPB" class="btn btn-success btn-xs" onclick="addPB()"><i class="fa fa-plus"></i>&nbsp;Thêm mới phòng ban</button>
                    </div>
                </div>
                <div class="portlet-body form-horizontal">
                    <table id="sample_3" class="table table-hover table-striped table-bordered" style="min-height: 230px">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 10%">STT</th>
                                <th class="text-center">Tên phòng ban</th>
                                <th class="text-center">Mô tả phòng ban</th>
                                <th class="text-center" >Sắp xếp</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($model))
                                @foreach($model as $key=>$value)
                                    <tr>
                                        <td class="text-center">{{$key+1}}</td>
                                        <td name="tenpb">{{$value->tenpb}}</td>
                                        <td name="diengiai">{{$value->diengiai}}</td>
                                        <td class="text-center" name="sapxep">{{$value->sapxep}}</td>
                                        <td>
                                            <button type="button" onclick="editPB(this,'{{$value->mapb}}', {{$value->id}})" class="btn btn-info btn-xs mbs">
                                                <i class="fa fa-edit"></i>&nbsp; Chỉnh sửa</button>
                                            <button type="button" onclick="cfDel('/danh_muc/phong_ban/del/{{$value->id}}')" class="btn btn-danger btn-xs mbs" data-target="#delete-modal-confirm" data-toggle="modal">
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
                    <h4 id="modal-header-primary-label" class="modal-title">Thông tin phòng ban</h4>
                </div>
                <div class="modal-body">
                @include('templates.tem_phongban')
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
            //var date=new Date();
            $('#tenpb').val('');
            $('#diengiai').val('');
            $('#sapxep').attr('value','');
            $('#mapb').val('');
            $('#id_pb').val(0);
            $('#phongban-modal').modal('show');
        }

        function editPB(e, mapb, id){
            var tr = $(e).closest('tr');
            $('#tenpb').val($(tr).find('td[name=tenpb]').text());
            $('#diengiai').val($(tr).find('td[name=diengiai]').text());
            $('#sapxep').attr('value',$(tr).find('td[name=sapxep]').text());
            $('#mapb').val(mapb);
            $('#id_pb').val(id);
            $('#phongban-modal').modal('show');
        }

        function cfPB(){
            var valid=true;
            var message='';

            var tenpb=$('#tenpb').val();
            var diengiai=$('#diengiai').val();
            var sapxep=$('#sapxep').val();
            var id=$('#id_pb').val();

            if(tenpb==''){
                valid=false;
                message +='Tên phòng ban không được bỏ trống \n';
            }

            if(valid){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: '/danh_muc/phong_ban/store',
                    type: 'GET',
                    data: {
                            _token: CSRF_TOKEN,
                            tenpb: tenpb,
                            diengiai: diengiai,
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