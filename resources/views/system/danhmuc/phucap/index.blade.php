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
                        <b>DANH MỤC PHỤ CẤP</b>
                    </div>
                    <div class="actions">
                        <button type="button" id="_btnaddPB" class="btn btn-success btn-xs" onclick="addCV()"><i class="fa fa-plus"></i>&nbsp;Thêm mới phụ cấp</button>
                    </div>
                </div>
                <div class="portlet-body form-horizontal">
                    <table id="sample_3" class="table table-hover table-striped table-bordered" style="min-height: 230px">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 10%">STT</th>
                                <th class="text-center">Tên phụ cấp</th>
                                <th class="text-center">Hệ số</th>
                                <th class="text-center">Nộp bảo hiểm</th>
                                <th class="text-center">Ghi chú</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($model))
                                @foreach($model as $key=>$value)
                                    <tr>
                                        <td class="text-center">{{$key+1}}</td>
                                        <td name="tenpc">{{$value->tenpc}}</td>
                                        <td class="text-center" name="hesopc">{{$value->hesopc}}</td>
                                        <td class="text-center"><input name="baohiem" type="checkbox" value="{{$value->baohiem}}" {{$value->baohiem==1?'checked':''}} /></td>
                                        <td name="ghichu">{{$value->ghichu}}</td>
                                        <td>
                                            <button type="button" onclick="editCV(this,'{{$value->mapc}}', {{$value->id}})" class="btn btn-info btn-xs mbs">
                                                <i class="fa fa-edit"></i>&nbsp; Chỉnh sửa</button>
                                            <button type="button" onclick="cfDel('/danh_muc/phu_cap/del/{{$value->id}}')" class="btn btn-danger btn-xs mbs" data-target="#delete-modal-confirm" data-toggle="modal">
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
                    <h4 id="modal-header-primary-label" class="modal-title">Thông tin phụ cấp</h4>
                </div>
                <div class="modal-body">
                    <label class="form-control-label">Tên phụ cấp<span class="require">*</span></label>
                    {!!Form::text('tenpc', null, array('id' => 'tenpc','class' => 'form-control','required'=>'required'))!!}

                    <label class="form-control-label">Hệ số phụ cấp<span class="require">*</span></label>
                    {!!Form::text('hesopc', null, array('id' => 'hesopc','class' => 'form-control','required'=>'required'))!!}

                    <label class="control-label">Nộp bảo hiểm <input name="thieuso" id="baohiem" type="checkbox" value=""></label>

                    <div>
                        <label class="control-label">Ghi chú</label>
                        {!!Form::textarea('ghichu', null, array('id' => 'ghichu','class' => 'form-control','rows'=>'3'))!!}
                    <div>

                    <input type="hidden" id="id_pc" name="id_pc"/>
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
            $('#tenpc').val('');
            $('#hesopc').val('');
            $('#baohiem').attr('checked',false);
            $('#id_pc').val(0);
            $('#chucvu-modal').modal('show');
        }

        function editCV(e, macv, id){
            var tr = $(e).closest('tr');
            $('#tenpc').val($(tr).find('td[name=tenpc]').text());
            $('#hesopc').val($(tr).find('td[name=hesopc]').text());
            $('#baohiem').prop('checked',$(tr).find('input[name=baohiem]').val()==1?true:false);
            $('#ghichu').val($(tr).find('td[name=ghichu]').text());
            $('#id_pc').val(id);
            $('#chucvu-modal').modal('show');
        }

        function cfCV(){
            var valid=true;
            var message='';

            var tenpc=$('#tenpc').val();
            var hesopc=$('#hesopc').val();
            var baohiem=$('#baohiem').prop('checked')==true?1:0;
            var ghichu=$('#ghichu').val();
            var id=$('#id_pc').val();

            if(tenpc==''){
                valid=false;
                message +='Tên phụ cấp không được bỏ trống \n';
            }

            if(valid){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: '/danh_muc/phu_cap/store',
                    type: 'GET',
                    data: {
                        _token: CSRF_TOKEN,
                        tenpc: tenpc,
                        hesopc: hesopc,
                        baohiem: baohiem,
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
                $('#chucvu-modal').modal('hide');
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
        $(document).ready(function() {
            $('#table_id').DataTable({
                responsive: true,
                bSort: false,
                iDisplayLength: 10
            });
        });
    </script>
@stop