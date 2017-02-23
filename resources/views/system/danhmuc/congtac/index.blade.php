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
                        <b>DANH MỤC PHÂN LOẠI CÔNG TÁC</b>
                    </div>
                    <div class="actions">
                        <button type="button" id="_btnaddPB" class="btn btn-success btn-xs" onclick="addCV()"><i class="fa fa-plus"></i>&nbsp;Thêm mới phân loại</button>
                    </div>
                </div>
                <div class="portlet-body form-horizontal">
                    <table id="sample_3" class="table table-hover table-striped table-bordered" style="min-height: 230px">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 10%">STT</th>
                                <th class="text-center">Phân loại công tác</th>
                                <th class="text-center">Kiểu công tác</th>
                                <th class="text-center">Tên công tác</th>
                                <th class="text-center" style="width: 10%">Nhóm công tác</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($model))
                                @foreach($model as $key=>$value)
                                    <tr>
                                        <td class="text-center">{{$key+1}}</td>
                                        <td name="phanloaict">{{$value->phanloaict}}</td>
                                        <td name="kieuct">{{$value->kieuct}}</td>
                                        <td name="tenct">{{$value->tenct}}</td>
                                        <td class="text-center" name="nhomct">{{$value->nhomct}}</td>
                                        <td>
                                            <button type="button" onclick="editCV(this, {{$value->id}})" class="btn btn-info btn-xs mbs">
                                                <i class="fa fa-edit"></i>&nbsp; Chỉnh sửa</button>
                                            <button type="button" onclick="cfDel('/danh_muc/cong_tac/del/{{$value->id}}')" class="btn btn-danger btn-xs mbs" data-target="#delete-modal-confirm" data-toggle="modal">
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

    <!--Modal thông tin chức vụ -->
    <div id="chucvu-modal" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                    <h4 id="modal-header-primary-label" class="modal-title">Thông tin phân loại công tác</h4>
                </div>
                <div class="modal-body">
                    <label class="form-control-label">Phân loại công tác<span class="require">*</span></label>
                    {!!Form::text('phanloaict', null, array('id' => 'phanloaict','class' => 'form-control','required'=>'required','autofocus'=>'true'))!!}

                    <label class="form-control-label">Kiểu công tác<span class="require">*</span></label>
                    {!!Form::text('kieuct', null, array('id' => 'kieuct','class' => 'form-control'))!!}

                    <label class="form-control-label">Tên công tác<span class="require">*</span></label>
                    {!!Form::text('tenct', null, array('id' => 'tenct','class' => 'form-control'))!!}

                    <label class="form-control-label">Nhóm công tác</label>
                    {!!Form::text('nhomct', null, array('id' => 'nhomct','class' => 'form-control'))!!}

                    <input type="hidden" id="id_ct" name="id_ct"/>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</button>
                    <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary" onclick="cfCV()">Đồng ý</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function addCV(){
            var date=new Date();
            $('#phanloaict').val('');
            $('#kieuct').val('');
            $('#nhomct').attr('value','99');
            $('#tenct').val('');
            $('#id_ct').val(0);
            $('#chucvu-modal').modal('show');
        }

        function editCV(e, id){
            var tr = $(e).closest('tr');
            $('#phanloaict').val($(tr).find('td[name=phanloaict]').text());
            $('#kieuct').val($(tr).find('td[name=kieuct]').text());
            $('#tenct').val($(tr).find('td[name=tenct]').text());
            $('#nhomct').attr('value',$(tr).find('td[name=nhomct]').text());
            $('#id_ct').val(id);
            $('#chucvu-modal').modal('show');
        }

        function cfCV(){
            var valid=true;
            var message='';

            var phanloaict=$('#phanloaict').val();
            var kieuct=$('#kieuct').val();
            var tenct=$('#tenct').val();
            var nhomct=$('#nhomct').val();
            var id=$('#id_ct').val();

            if(phanloaict==''){
                valid=false;
                message +='Phân loại công tác không được bỏ trống \n';
            }

            if(kieuct==''){
                valid=false;
                message +='Kiểu công tác không được bỏ trống \n';
            }
            if(tenct==''){
                valid=false;
                message +='Tên công tác không được bỏ trống \n';
            }

            if(valid){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: '/danh_muc/cong_tac/store',
                    type: 'GET',
                    data: {
                        _token: CSRF_TOKEN,
                        phanloaict: phanloaict,
                        kieuct: kieuct,
                        tenct: tenct,
                        nhomct: nhomct,
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
                $('#chucvu-modal').modal('hide');
            }else{
                alert(message);
            }
            return valid;
        }
    </script>

    @include('includes.modal.delete')
@stop