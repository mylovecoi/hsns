<!--form1 thông tin cơ bản -->
<div id="tab5" class="tab-pane" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Tình trạng hôn nhân </label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('tthn', null, array('id' => 'tthn','class' => 'form-control','autofocus'=>'autofocus'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Số sổ BHXH </label>

                    <div class="col-sm-8">
                        {!!Form::text('soBHXH', null, array('id' => 'soBHXH','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Số tài khoản NH </label>

                    <div class="col-sm-8">
                        {!!Form::text('sotk', null, array('id' => 'sotk','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Tên ngân hàng </label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('tennganhang', null, array('id' => 'tennganhang','class' => 'form-control','autofocus'=>'autofocus'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày vào TSCSHCM</label>

                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="ngayctctxh" id="ngayctctxh" value="{{!isset($model)?'':$model->ngayctctxh}}"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Chức vụ đoàn thể </label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('cvtcxh', null, array('id' => 'cvtcxh','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày vào Đảng </label>

                    <div class="col-sm-8 controls">
                        <input type="date" class="form-control" name="ngayvd" id="ngayvd" value="{{!isset($model)?'':$model->ngayvd}}"/>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày vào chính thức </label>

                    <div class="col-sm-8 controls">
                        <input type="date" class="form-control" name="ngayvdct" id="ngayvdct" value="{{!isset($model)?'':$model->ngayvdct}}"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi kết nạp Đảng</label>

                    <div class="col-sm-8">
                        {!!Form::text('noikn', null, array('id' => 'noikn','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Chức vụ Đảng </label>

                    <div class="col-sm-8">
                        <select class="form-control" name="macvd" id="macvd">
                            <option value="all">-- Chọn chức vụ --</option>
                            @if($type=='create')
                                @foreach($m_cvd as $cv)
                                    <option value="{{$cv->macvd}}">{{$cv->tencv}}</option>
                                @endforeach
                            @else
                                @foreach($m_cvd as $cv)
                                    <option value="{{$cv->macvd}}" {{$model->macvd==$cv->macvd?'selected':''}}>{{$cv->tencv}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quân hàm cao nhất</label>

                    <div class="col-sm-8">
                        {!!Form::text('qhcn', null, array('id' => 'qhcn','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Danh hiệu cao nhất </label>

                    <div class="col-sm-8">
                        {!!Form::text('dhpt', null, array('id' => 'dhpt','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Tình trạng sức khỏe</label>

                    <div class="col-sm-8">
                        {!!Form::text('ttsk', null, array('id' => 'ttsk','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Chiều cao </label>

                    <div class="col-sm-8">
                        {!!Form::text('chieucao', null, array('id' => 'chieucao','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Cân nặng</label>

                    <div class="col-sm-8">
                        {!!Form::text('cannang', null, array('id' => 'cannang','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nhóm máu </label>

                    <div class="col-sm-8">
                        <select name="nhommau" class="form-control">
                            @if($type=='create')
                                <option value="Nhóm máu A">Nhóm máu A</option>
                                <option value="Nhóm máu AB">Nhóm máu AB</option>
                                <option value="Nhóm máu B">Nhóm máu B</option>
                                <option value="Nhóm máu O">Nhóm máu O</option>
                            @else
                                <option value="Nhóm máu A" {{$model->nhommau=='Nhóm máu A'?'selected':''}}>Nhóm máu A</option>
                                <option value="Nhóm máu AB" {{$model->nhommau=='Nhóm máu AB'?'selected':''}}>Nhóm máu AB</option>
                                <option value="Nhóm máu B" {{$model->nhommau=='Nhóm máu B'?'selected':''}}>Nhóm máu B</option>
                                <option value="Nhóm máu O" {{$model->nhommau=='Nhóm máu O'?'selected':''}}>Nhóm máu O</option>
                            @endif

                        </select>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!--end form5  -->