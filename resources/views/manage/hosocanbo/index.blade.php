<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 04/07/2016
 * Time: 3:50 CH
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
                        <i class="fa fa-list-alt"></i>DANH SÁCH HỒ SƠ CÁN BỘ
                    </div>
                    <div class="actions">
                        <a class="btn btn-default btn-xs" href="{{url($url.'create')}}"><i class="fa fa-plus"></i>&nbsp;Thêm mới hồ sơ</a>
                    </div>
                </div>
                <div class="portlet-body">
                    <table id="sample_3" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">STT</th>
                            <th width="96">Ảnh</th>
                            <th class="text-center">Họ tên</th>
                            <th class="text-center">Ngày sinh</th>
                            <th class="text-center">Giới tính</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <?php $stt =0;?>
                    <tbody>
                        @foreach($model as $hs)
                            <tr>
                            <td class="text-center">{{++$stt}}</td>
                            <td name="anh">
                                <a href="{{url('/nghiepvu/hoso/'.$hs->id)}}">
                                    @if($hs->anh != '')
                                        <img src="{{ url($hs->anh)}}" width="96">
                                    @else
                                        <img src="{{ url('images/avatar/no-image.png')}}" width="96">
                                    @endif
                                </a>
                            </td>
                            <td>
                                <a href="{{url('/nghiepvu/hoso/'.$hs->id)}}"><b>{{$hs->tencanbo}}</b></a>
                                <p style="margin-top: 5px">Phòng ban: {{$hs->tenpb}}</p>
                                <p style="margin-top: 5px">Chức vụ: {{$hs->tencvcq}}</p>
                            </td>
                            <td class="text-center">{{getDayVn($hs->ngaysinh)}}</td>
                            <td class="text-center">{{$hs->gioitinh}}</td>
                            <td>
                                <a href="{{url($url.'maso='.$hs->id.'')}}" class="btn btn-default btn-xs mbs"><i class="fa fa-edit"></i>&nbsp; Chỉnh sửa</a>
                                <a href="{{url($url.'syll/'.$hs->id)}}" target="_blank" class="btn btn-default btn-xs mbs"><i class="fa fa-credit-card"></i>&nbsp; Sơ yếu lý lịch</a>
                                <a href="{{url($url.'ttts/'.$hs->id)}}" target="_blank" class="btn btn-default btn-xs mbs"><i class="fa fa-file-text-o"></i>&nbsp; Tóm tắt tiểu sử</a>

                                <!--button type="button" onclick="cfChiTiet('{{$url.'bsll/'.$hs->id}}','{{$hs->id}}')" class="btn btn-default btn-xs mbs" data-target="#chitiet-modal" data-toggle="modal">
                                    <i class="fa fa-navicon"></i>&nbsp; Bổ sung lý lịch</button-->
                                <button type="button" onclick="cfDel('{{$url.'del/'.$hs->id}}')" class="btn btn-default btn-xs mbs" data-target="#delete-modal-confirm" data-toggle="modal">
                                    <i class="fa fa-times"></i>&nbsp; Xóa</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

    <!--Modal thông tin thoại báo cáo -->
    <div id="chitiet-modal" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
        {!! Form::open(['url'=>'','method'=>'POST','id' => 'frmThoaiBC','class'=>'horizontal-form','target'=>'_blank']) !!}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                    <h4 id="modal-header-primary-label" class="modal-title">Thông tin kết xuất</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        @include('includes.crumbs.tudenngay')
                    </div>
                    <input type="hidden" id="idct" name="idct">
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</button>
                    <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary">Đồng ý</button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

    @include('includes.modal.delete')
@stop
