@extends('main')

@section('custom-style')
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/select2/select2.css')}}"/>
    <!-- END THEME STYLES -->
@stop


@section('custom-script')
    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <script type="text/javascript" src="{{url('assets/global/plugins/select2/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <script src="{{url('assets/admin/pages/scripts/table-managed.js')}}"></script>
    <script>
        jQuery(document).ready(function() {
            TableManaged.init();
        });
    </script>

@stop

@section('content')

    <h3 class="page-title">
        Quản lý <small>&nbsp;tài khoản</small> {{$setting}}
    </h3>
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['url' => '/users/phan-quyen'])!!}
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box">
                <div class="portlet-title">
                    <div class="caption" style="color: #000000">
                        Tên tài khoản: {{$model->name .' ( Tài khoản truy cập: '. $model->username. ')' }}
                    </div>
                    <div class="actions">
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="portlet-body">
                        <div class="row">
                            @if(canGeneral('dvlt','dvlt'))
                                @if($model->level == 'DVLT')
                                <div class="col-md-3">
                                    <h4 style="text-align: center;color: #0000ff  ">Dịch vụ lưu trú</h4>
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead class="action">
                                        <tr>
                                            <th class="table-checkbox" width="5%">
                                                <!--input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes"/-->
                                            </th>
                                            <th>Chức năng</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><input type="checkbox" {{ (isset($permission->dvlt->index) && $permission->dvlt->index == 1) ? 'checked' : '' }} value="1" name="roles[dvlt][index]"/></td>
                                            <td>Xem</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" {{ (isset($permission->dvlt->create) && $permission->dvlt->create == 1) ? 'checked' : '' }} value="1" name="roles[dvlt][create]"/></td>
                                            <td>Thêm mới</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" {{ (isset($permission->dvlt->edit) && $permission->dvlt->edit == 1) ? 'checked' : '' }} value="1" name="roles[dvlt][edit]"/></td>
                                            <td>Chỉnh sửa</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" {{ (isset($permission->dvlt->delete) && $permission->dvlt->delete == 1) ? 'checked' : '' }} value="1" name="roles[dvlt][delete]"/></td>
                                            <td>Xóa</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                @endif
                                @if($model->level == 'DVLT' || $model->level == 'T')
                                <div class="col-md-3">
                                    <h4 style="text-align: center;color: #0000ff  ">Kê khai dịch vụ lưu trú</h4>
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead class="action">
                                        <tr>
                                            <th class="table-checkbox" width="5%">
                                                <!--input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes"/-->
                                            </th>
                                            <th>Chức năng</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><input type="checkbox" {{ (isset($permission->kkdvlt->index) && $permission->kkdvlt->index == 1) ? 'checked' : '' }} value="1" name="roles[kkdvlt][index]"/></td>
                                            <td>Xem</td>
                                        </tr>
                                        @if($model->level !=='T')
                                        <tr>
                                            <td><input type="checkbox" {{ (isset($permission->kkdvlt->create) && $permission->kkdvlt->create == 1) ? 'checked' : '' }} value="1" name="roles[kkdvlt][create]"/></td>
                                            <td>Thêm mới</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" {{ (isset($permission->kkdvlt->edit) && $permission->kkdvlt->edit == 1) ? 'checked' : '' }} value="1" name="roles[kkdvlt][edit]"/></td>
                                            <td>Chỉnh sửa</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" {{ (isset($permission->kkdvlt->delete) && $permission->kkdvlt->delete == 1) ? 'checked' : '' }} value="1" name="roles[kkdvlt][delete]"/></td>
                                            <td>Xóa</td>
                                        </tr>
                                        @endif
                                        <tr>
                                            <td><input type="checkbox" {{ (isset($permission->kkdvlt->approve) && $permission->kkdvlt->approve == 1) ? 'checked' : '' }} value="1" name="roles[kkdvlt][approve]"/></td>
                                            <td>{{($model->level == 'T') ? 'Xét duyệt' : 'Chuyển'}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                @endif
                            @endif
                            <!--Vận tải xe khách-->
                            @if(canGeneral('dvvt','vtxk'))
                                @if($model->level == 'DVVT')
                                    @if(canDVVT($setting,'dvvt','vtxk'))
                                    <div class="col-md-3">
                                        <h4 style="text-align: center;color: #0000ff  ">Vận tải xe khách</h4>
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead class="action">
                                            <tr>
                                                <th class="table-checkbox" width="5%">
                                                    <!--input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes"/-->
                                                </th>
                                                <th>Chức năng</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->dvvtxk->index) && $permission->dvvtxk->index == 1) ? 'checked' : '' }} value="1" name="roles[dvvtxk][index]"/></td>
                                                <td>Xem</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->dvvtxk->create) && $permission->dvvtxk->create == 1) ? 'checked' : '' }} value="1" name="roles[dvvtxk][create]"/></td>
                                                <td>Thêm mới</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->dvvtxk->edit) && $permission->dvvtxk->edit == 1) ? 'checked' : '' }} value="1" name="roles[dvvtxk][edit]"/></td>
                                                <td>Chỉnh sửa</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->dvvtxk->delete) && $permission->dvvtxk->delete == 1) ? 'checked' : '' }} value="1" name="roles[dvvtxk][delete]"/></td>
                                                <td>Xóa</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    @endif
                                @endif
                                @if(canDVVT($setting,'dvvt','vtxk') || $model->level == 'T')
                                        <div class="col-md-3">
                                            <h4 style="text-align: center;color: #0000ff  ">Kê khai dịch vụ vận tải xe khách</h4>
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead class="action">
                                                <tr>
                                                    <th class="table-checkbox" width="5%">
                                                        <!--input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes"/-->
                                                    </th>
                                                    <th>Chức năng</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><input type="checkbox" {{ (isset($permission->kkdvvtxk->index) && $permission->kkdvvtxk->index == 1) ? 'checked' : '' }} value="1" name="roles[kkdvvtxk][index]"/></td>
                                                    <td>Xem</td>
                                                </tr>
                                                @if($model->level !=='T')
                                                <tr>
                                                    <td><input type="checkbox" {{ (isset($permission->kkdvvtxk->create) && $permission->kkdvvtxk->create == 1) ? 'checked' : '' }} value="1" name="roles[kkdvvtxk][create]"/></td>
                                                    <td>Thêm mới</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" {{ (isset($permission->kkdvvtxk->edit) && $permission->kkdvvtxk->edit == 1) ? 'checked' : '' }} value="1" name="roles[kkdvvtxk][edit]"/></td>
                                                    <td>Chỉnh sửa</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" {{ (isset($permission->kkdvvtxk->delete) && $permission->kkdvvtxk->delete == 1) ? 'checked' : '' }} value="1" name="roles[kkdvvtxk][delete]"/></td>
                                                    <td>Xóa</td>
                                                </tr>
                                                @endif
                                                <tr>
                                                    <td><input type="checkbox" {{ (isset($permission->kkdvvtxk->approve) && $permission->kkdvvtxk->approve == 1) ? 'checked' : '' }} value="1" name="roles[kkdvvtxk][approve]"/></td>
                                                    <td>{{($model->level == 'T') ? 'Xét duyệt' : 'Chuyển'}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                @endif
                            @endif
                            <!--Vận tải xe khách-->
                            <!--Vận tải xe buýt-->
                            @if(canGeneral('dvvt','vtxb'))
                                @if($model->level == 'DVVT')
                                    @if(canDVVT($setting,'dvvt','vtxb'))
                                    <div class="col-md-3">
                                        <h4 style="text-align: center;color: #0000ff  ">Vận tải xe buýt</h4>
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead class="action">
                                            <tr>
                                                <th class="table-checkbox" width="5%">
                                                    <!--input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes"/-->
                                                </th>
                                                <th>Chức năng</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->dvvtxb->index) && $permission->dvvtxb->index == 1) ? 'checked' : '' }} value="1" name="roles[dvvtxb][index]"/></td>
                                                <td>Xem</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->dvvtxb->create) && $permission->dvvtxb->create == 1) ? 'checked' : '' }} value="1" name="roles[dvvtxb][create]"/></td>
                                                <td>Thêm mới</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->dvvtxb->edit) && $permission->dvvtxb->edit == 1) ? 'checked' : '' }} value="1" name="roles[dvvtxb][edit]"/></td>
                                                <td>Chỉnh sửa</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->dvvtxb->delete) && $permission->dvvtxb->delete == 1) ? 'checked' : '' }} value="1" name="roles[dvvtxb][delete]"/></td>
                                                <td>Xóa</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    @endif
                                @endif
                                @if(canDVVT($setting,'dvvt','vtxb') || $model->level == 'T')
                                    <div class="col-md-3">
                                        <h4 style="text-align: center;color: #0000ff  ">Kê khai dịch vụ vận tải xe buýt</h4>
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead class="action">
                                            <tr>
                                                <th class="table-checkbox" width="5%">
                                                    <!--input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes"/-->
                                                </th>
                                                <th>Chức năng</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->kkdvvtxb->index) && $permission->kkdvvtxb->index == 1) ? 'checked' : '' }} value="1" name="roles[kkdvvtxb][index]"/></td>
                                                <td>Xem</td>
                                            </tr>
                                            @if($model->level !=='T')
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->kkdvvtxb->create) && $permission->kkdvvtxb->create == 1) ? 'checked' : '' }} value="1" name="roles[kkdvvtxb][create]"/></td>
                                                <td>Thêm mới</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->kkdvvtxb->edit) && $permission->kkdvvtxb->edit == 1) ? 'checked' : '' }} value="1" name="roles[kkdvvtxb][edit]"/></td>
                                                <td>Chỉnh sửa</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->kkdvvtxb->delete) && $permission->kkdvvtxb->delete == 1) ? 'checked' : '' }} value="1" name="roles[kkdvvtxb][delete]"/></td>
                                                <td>Xóa</td>
                                            </tr>
                                            @endif
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->kkdvvtxb->approve) && $permission->kkdvvtxb->approve == 1) ? 'checked' : '' }} value="1" name="roles[kkdvvtxb][approve]"/></td>
                                                <td>{{($model->level == 'T') ? 'Xét duyệt' : 'Chuyển'}}</td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                            @endif
                            <!--End Vận tải xe buýt-->
                            <!--Vận tải xe taxi-->
                            @if(canGeneral('dvvt','vtxtx'))
                                @if($model->level == 'DVVT')
                                    @if(canDVVT($setting,'dvvt','vtxtx'))
                                    <div class="col-md-3">
                                        <h4 style="text-align: center;color: #0000ff  ">Vận tải xe taxi</h4>
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead class="action">
                                            <tr>
                                                <th class="table-checkbox" width="5%">
                                                    <!--input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes"/-->
                                                </th>
                                                <th>Chức năng</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->dvvtxtx->index) && $permission->dvvtxtx->index == 1) ? 'checked' : '' }} value="1" name="roles[dvvtxtx][index]"/></td>
                                                <td>Xem</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->dvvtxtx->create) && $permission->dvvtxtx->create == 1) ? 'checked' : '' }} value="1" name="roles[dvvtxtx][create]"/></td>
                                                <td>Thêm mới</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->dvvtxtx->edit) && $permission->dvvtxtx->edit == 1) ? 'checked' : '' }} value="1" name="roles[dvvtxtx][edit]"/></td>
                                                <td>Chỉnh sửa</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->dvvtxtx->delete) && $permission->dvvtxtx->delete == 1) ? 'checked' : '' }} value="1" name="roles[dvvtxtx][delete]"/></td>
                                                <td>Xóa</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    @endif
                                @endif
                                @if(canDVVT($setting,'dvvt','vtxtx') || $model->level == 'T')
                                    <div class="col-md-3">
                                        <h4 style="text-align: center;color: #0000ff  ">Kê khai dịch vụ vận tải xe taxi</h4>
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead class="action">
                                            <tr>
                                                <th class="table-checkbox" width="5%">
                                                    <!--input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes"/-->
                                                </th>
                                                <th>Chức năng</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->kkdvvtxtx->index) && $permission->kkdvvtxtx->index == 1) ? 'checked' : '' }} value="1" name="roles[kkdvvtxtx][index]"/></td>
                                                <td>Xem</td>
                                            </tr>
                                            @if($model->level !=='T')
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->kkdvvtxtx->create) && $permission->kkdvvtxtx->create == 1) ? 'checked' : '' }} value="1" name="roles[kkdvvtxtx][create]"/></td>
                                                <td>Thêm mới</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->kkdvvtxtx->edit) && $permission->kkdvvtxtx->edit == 1) ? 'checked' : '' }} value="1" name="roles[kkdvvtxtx][edit]"/></td>
                                                <td>Chỉnh sửa</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->kkdvvtxtx->delete) && $permission->kkdvvtxtx->delete == 1) ? 'checked' : '' }} value="1" name="roles[kkdvvtxtx][delete]"/></td>
                                                <td>Xóa</td>
                                            </tr>
                                            @endif
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->kkdvvtxtx->approve) && $permission->kkdvvtxtx->approve == 1) ? 'checked' : '' }} value="1" name="roles[kkdvvtxtx][approve]"/></td>
                                                <td>{{($model->level == 'T') ? 'Xét duyệt' : 'Chuyển'}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                            @endif
                            <!--End Vận tải xe taxi-->
                            <!--Vận tải chở hàng-->
                            @if(canGeneral('dvvt','vtch'))
                                @if($model->level == 'DVVT')
                                    @if(canDVVT($setting,'dvvt','vtch'))
                                    <div class="col-md-3">
                                        <h4 style="text-align: center;color: #0000ff  ">Vận tải chở hàng</h4>
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead class="action">
                                            <tr>
                                                <th class="table-checkbox" width="5%">
                                                    <!--input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes"/-->
                                                </th>
                                                <th>Chức năng</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->dvvtch->index) && $permission->dvvtch->index == 1) ? 'checked' : '' }} value="1" name="roles[dvvtch][index]"/></td>
                                                <td>Xem</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->dvvtch->create) && $permission->dvvtch->create == 1) ? 'checked' : '' }} value="1" name="roles[dvvtch][create]"/></td>
                                                <td>Thêm mới</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->dvvtch->edit) && $permission->dvvtch->edit == 1) ? 'checked' : '' }} value="1" name="roles[dvvtch][edit]"/></td>
                                                <td>Chỉnh sửa</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->dvvtch->delete) && $permission->dvvtch->delete == 1) ? 'checked' : '' }} value="1" name="roles[dvvtch][delete]"/></td>
                                                <td>Xóa</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    @endif
                                @endif
                                @if(canDVVT($setting,'dvvt','vtch') || $model->level == 'T')
                                    <div class="col-md-3">
                                        <h4 style="text-align: center;color: #0000ff  ">Kê khai dịch vụ vận tải chở hàng</h4>
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead class="action">
                                            <tr>
                                                <th class="table-checkbox" width="5%">
                                                    <!--input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes"/-->
                                                </th>
                                                <th>Chức năng</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->kkdvvtch->index) && $permission->kkdvvtch->index == 1) ? 'checked' : '' }} value="1" name="roles[kkdvvtch][index]"/></td>
                                                <td>Xem</td>
                                            </tr>
                                            @if($model->level !=='T')
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->kkdvvtch->create) && $permission->kkdvvtch->create == 1) ? 'checked' : '' }} value="1" name="roles[kkdvvtch][create]"/></td>
                                                <td>Thêm mới</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->kkdvvtch->edit) && $permission->kkdvvtch->edit == 1) ? 'checked' : '' }} value="1" name="roles[kkdvvtch][edit]"/></td>
                                                <td>Chỉnh sửa</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->kkdvvtch->delete) && $permission->kkdvvtch->delete == 1) ? 'checked' : '' }} value="1" name="roles[kkdvvtch][delete]"/></td>
                                                <td>Xóa</td>
                                            </tr>
                                            @endif
                                            <tr>
                                                <td><input type="checkbox" {{ (isset($permission->kkdvvtch->approve) && $permission->kkdvvtch->approve == 1) ? 'checked' : '' }} value="1" name="roles[kkdvvtch][approve]"/></td>
                                                <td>{{($model->level == 'T') ? 'Xét duyệt' : 'Chuyển'}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                            @endif
                        <!--End Vận tải xe taxi-->

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="text-align: center">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Cập nhật</button>
                            <?php
                                if($model->level == 'T')
                                    $pl = 'quan_ly';
                                elseif($model->level == 'DVLT')
                                    $pl= 'dich_vu_luu_tru';
                                elseif($model->level == 'DVVT')
                                    $pl= 'dich_vu_van_tai';

                            ?>
                        <a href="{{url('users/pl='.$pl)}}" class="btn green"><i class="fa fa-mail-reply"></i>&nbsp;Quay lại</a>
                        </div>
                    </div>
                </div>

                <!-- END EXAMPLE TABLE PORTLET-->
                {!! Form::hidden('id', $model->id)!!}
                {!! Form::close() !!}
            </div>
        </div>

        <!-- BEGIN DASHBOARD STATS -->

        <!-- END DASHBOARD STATS -->
        <div class="clearfix"></div>


</div>
@stop