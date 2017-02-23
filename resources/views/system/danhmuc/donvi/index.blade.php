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
                    <div class="caption">DANH SÁCH ĐƠN VỊ</div>
                    <div class="actions">

                    </div>
                </div>
                <div class="portlet-body form-horizontal">
                    <table id="sample_3" class="table table-hover table-striped table-bordered" style="min-height: 230px">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 4%">STT</th>
                                <th class="text-center">Mã đơn vị</th>
                                <th class="text-center">Tên đơn vị</th>
                                <th class="text-center">Địa chỉ</th>
                                <th class="text-center">Số điện thoại</th>
                                <th class="text-center">Lãnh đạo</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(isset($model))
                                    @foreach($model as $key=>$value)
                                        <tr>
                                            <td class="text-center">{{$key+1}}</td>
                                            <td>{{$value->madv}}</td>
                                            <td>{{$value->tendv}}</td>
                                            <td>{{$value->diachi}}</td>
                                            <td>{{$value->sodt}}</td>
                                            <td>{{$value->lanhdao}}</td>
                                            <td>
                                                @if(session('admin')->maxa != $value->madv)
                                                    <a href="{{url('danh_muc/don_vi/change/maso='.$value->madv)}}">Xem dữ liệu</a>
                                                @endif
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
                    <h4 id="modal-header-primary-label" class="modal-title">Thông tin dân tộc</h4>
                </div>
                <div class="modal-body">
                    <label class="form-control-label">Tên dân tộc<span class="require">*</span></label>
                    {!!Form::text('dantoc', null, array('id' => 'dantoc','class' => 'form-control','required'=>'required'))!!}

                    <label class="col-md-2"></label>
                    <label class="control-label"><input name="thieuso" id="thieuso" type="checkbox" value="">Dân tộc thiểu số</label>

                    <input type="hidden" id="id_dt" name="id_dt"/>
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
            $('#dantoc').val('');
            $('#thieuso').attr('checked',true);
            $('#id_dt').val(0);
            $('#chucvu-modal').modal('show');
        }

        function editCV(e, macv, id){
            var tr = $(e).closest('tr');
            $('#dantoc').val($(tr).find('td[name=dantoc]').text());
            $('#thieuso').prop('checked',$(tr).find('input[name=thieuso]').val()==1?true:false);
            $('#id_dt').val(id);
            $('#chucvu-modal').modal('show');
        }

        function cfCV(){
            var valid=true;
            var message='';

            var dantoc=$('#dantoc').val();
            var thieuso=$('#thieuso').prop('checked')==true?1:0;
            var id=$('#id_dt').val();

            if(dantoc==''){
                valid=false;
                message +='Tên dân tộc không được bỏ trống \n';
            }

            if(valid){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: '/danh_muc/dan_toc/store',
                    type: 'GET',
                    data: {
                        _token: CSRF_TOKEN,
                        dantoc: dantoc,
                        thieuso: thieuso,
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