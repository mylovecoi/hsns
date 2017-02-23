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
                        <i class="fa fa-list-alt"></i>DANH SÁCH QUÁ TRÌNH ĐÀO TẠO CỦA CÁN BỘ
                    </div>
                    @include('includes.crumbs.bt_add')
                </div>
                <div class="portlet-body form-horizontal">
                    @include('includes.crumbs.cb_canbo')
                    <table id="sample_3" class="table table-hover table-striped table-bordered" style="min-height: 230px">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 5%">STT</th>
                                <th class="text-center">Phân loại đào tạo</th>
                                <th class="text-center">Từ ngày</th>
                                <th class="text-center">Đến ngày</th>
                                <th class="text-center">Hình thức đào tạo</th>
                                <th class="text-center">Nơi đào tạo</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($model))
                                @foreach($model as $key=>$value)
                                    <tr>
                                        <td class="text-center">{{$key+1}}</td>
                                        <td>{{$value->phanloai}}</td>
                                        <td>{{getDayVn($value->ngaytu)}}</td>
                                        <td>{{getDayVn($value->ngayden)}}</td>
                                        <td>{{$value->hinhthuc}}</td>
                                        <td>{{$value->tencoso}}</td>
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
                    <h4 id="modal-header-primary-label" class="modal-title">Thông tin quá trình đào tạo</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-4 control-label"> Phân loại<span class="require">*</span> </label>
                            <div class="col-md-8">
                                <select class="form-control" name="phanloai" id="phanloai" style="width: 100%">
                                    <option value="Trình độ chính trị">Trình độ chính trị</option>
                                    <option value="Trình độ chuyên môn">Trình độ chuyên môn</option>
                                    <option value="Trình độ ngoại ngữ">Trình độ ngoại ngữ</option>
                                    <option value="Trình độ quản lý nhà nước">Trình độ quản lý nhà nước</option>
                                    <option value="Trình độ tin học">Trình độ tin học</option>
                                </select>
                            </div>
                        </div>
                        @include('includes.crumbs.tudenngay')
                        <div class="form-group">
                            <label class="col-md-4 control-label"> Hình thức đào tạo</label>
                            <div class="col-md-8">
                                <select class="form-control" name="hinhthuc" id="hinhthuc" style="width: 100%">
                                    <option value="Chính qui">Chính qui</option>
                                    <option value="Tại chức">Tại chức</option>
                                    <option value="Chuyên tu">Chuyên tu</option>
                                    <option value="Bồi dưỡng">Bồi dưỡng</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"> Nơi đào tạo</label>
                            <div class="col-md-8">
                                {!!Form::text('tencoso', null, array('id' => 'tencoso','class' => 'form-control'))!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"> Chuyên ngành đào tạo</label>
                            <div class="col-md-8">
                                {!!Form::text('chuyennganh', null, array('id' => 'chuyennganh','class' => 'form-control'))!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"> Văn bằng tốt nghiệp</label>
                            <div class="col-md-8">
                                {!!Form::text('vanbang', null, array('id' => 'vanbang','class' => 'form-control'))!!}
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
                $('#phanloai').val('');
                $('#ngaytu').val('');
                $('#ngayden').val('');
                $('#tencoso').val('');
                $('#chuyennganh').val('');
                $('#hinhthuc').val('');
                $('#vanbang').val('');
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
                url: '{{$furl_ajax}}' + 'get',
                type: 'GET',
                data: {
                    _token: CSRF_TOKEN,
                    id: id
                },
                dataType: 'JSON',
                success: function (data) {
                    $('#ngaytu').val(data.ngaytu);
                    $('#ngayden').val(data.ngayden);
                    $('#phanloai').val(data.phanloai);
                    $('#tencoso').val(data.tencoso);
                    $('#chuyennganh').val(data.chuyennganh);
                    $('#hinhthuc').val(data.hinhthuc);
                    $('#vanbang').val(data.vanbang);
                    $('#ghichu').val(data.ghichu);
                },
                error: function(message){
                    alert(message);
                }
            });

            $('#id_ct').val(id);
            $('#chitiet-modal').modal('show');
        }

        function confirm(){
            var valid=true;
            var message='';

            var macanbo = $('#cbmacb').val();

            var phanloai = $('#phanloai').val();
            var ngaytu = $('#ngaytu').val();
            var ngayden = $('#ngayden').val();
            var tencoso = $('#tencoso').val();
            var chuyennganh = $('#chuyennganh').val();
            var hinhthuc = $('#hinhthuc').val();
            var vanbang = $('#vanbang').val();
            var ghichu = $('#ghichu').val();

            var id=$('#id_ct').val();

            if(phanloai==''){
                valid=false;
                message +='Phân loại đào tạo không được bỏ trống \n';
            }

            if(ngaytu==''){
                valid=false;
                message +='Ngày đào tạo không được bỏ trống \n';
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
                            phanloai : phanloai,
                            ngaytu : ngaytu,
                            ngayden : ngayden,
                            tencoso : tencoso,
                            chuyennganh : chuyennganh,
                            hinhthuc : hinhthuc,
                            vanbang : vanbang,
                            ghichu : ghichu
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
                            phanloai : phanloai,
                            ngaytu : ngaytu,
                            ngayden : ngayden,
                            tencoso : tencoso,
                            chuyennganh : chuyennganh,
                            hinhthuc : hinhthuc,
                            vanbang : vanbang,
                            ghichu : ghichu,
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

    @include('includes.modal.delete')
@stop