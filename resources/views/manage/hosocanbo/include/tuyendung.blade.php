<!--form1 thông tin cơ bản -->
<div id="tab2" class="tab-pane" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày tuyển dụng </label>

                    <div class="col-sm-8 controls">
                        <input type="date" name="ngaytd" id="ngaytd" class="form-control" autofocus="autofocus" value="{{!isset($model)?'':$model->ngaytd}}"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Cơ quan tuyển dụng </label>

                    <div class="col-sm-8">
                        {!!Form::text('cqtd', null, array('id' => 'cqtd','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Hình thức tuyển dụng </label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('httd', null, array('id' => 'httd','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Lĩnh vực tuyển dụng </label>

                    <div class="col-sm-8">
                        <select class="form-control" id="lvtd" name="lvtd">
                            @if($type=='create')
                                <option value="">-- Chọn lĩnh vực hoạt động --</option>
                                <option value="Giáo dục">Giáo dục</option>
                                <option value="Y tế">Y tế</option>
                                <option value="Nghiên cứu khoa học">Nghiên cứu khoa học</option>
                                <option value="Quản lý nhà nước">Quản lý nhà nước</option>
                                <option value="Văn hóa thể thao">Văn hóa thể thao</option>
                                <option value="Khác">Khác</option>
                            @else
                                <option value="">-- Chọn lĩnh vực hoạt động --</option>
                                <option value="Giáo dục" {{$model->lvtd=='Giáo dục'?'selected':''}}>Giáo dục</option>
                                <option value="Y tế" {{$model->lvtd=='Y tế'?'selected':''}}>Y tế</option>
                                <option value="Nghiên cứu khoa học" {{$model->lvtd=='Nghiên cứu khoa học'?'selected':''}}>Nghiên cứu khoa học</option>
                                <option value="Quản lý nhà nước" {{$model->lvtd=='Quản lý nhà nước'?'selected':''}}>Quản lý nhà nước</option>
                                <option value="Văn hóa thể thao" {{$model->lvtd=='Văn hóa thể thao'?'selected':''}}>Văn hóa thể thao</option>
                                <option value="Khác" {{$model->lvtd=='Khác'?'selected':''}}>Khác</option>
                            @endif
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Công việc chính </label>

                    <div class="col-sm-8">
                        {!!Form::text('cvcn', null, array('id' => 'cvcn','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Sở trường công tác </label>

                    <div class="col-sm-8">
                        {!!Form::text('stct', null, array('id' => 'stct','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày biên chế <span class="require">*</span></label>

                    <div class="col-sm-8">
                        <input type="date" name="ngaybc" id="ngaybc" class="form-control" required="required" value="{{!isset($model)?'':$model->ngaybc}}" />
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày về cơ quan </label>

                    <div class="col-sm-8">
                        <input type="date" name="ngayvao" id="ngayvao" class="form-control" value="{{!isset($model)?'':$model->ngayvao}}" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Sự nghiệp cán bộ <span class="require">*</span></label>

                    <div class="col-sm-8">
                        <select class="form-control" name="sunghiep" id="sunghiep" required="required">
                            <option value="">-- Chọn sự nghiệp cán bộ --</option>
                            @if($type=='create')
                                <option value="Công chức">Công chức</option>
                                <option value="Viên chức">Viên chức</option>
                                <option value="Khác">Khác</option>
                            @else
                                <option value="Công chức" {{$model->sunghiep=='Công chức'?'selected':''}}>Công chức</option>
                                <option value="Viên chức" {{$model->sunghiep=='Viên chức'?'selected':''}}>Viên chức</option>
                                <option value="Khác" {{$model->sunghiep=='Khác'?'selected':''}}>Khác</option>
                            @endif
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Lĩnh vực công tác </label>

                    <div class="col-sm-8">
                        <select class="form-control" id="lvhd" name="lvhd">
                            <option value="">-- Chọn lĩnh vực hoạt động --</option>
                            @if($type=='create')
                                <option value="Giáo dục">Giáo dục</option>
                                <option value="Y tế">Y tế</option>
                                <option value="Nghiên cứu khoa học">Nghiên cứu khoa học</option>
                                <option value="Quản lý nhà nước">Quản lý nhà nước</option>
                                <option value="Văn hóa thể thao">Văn hóa thể thao</option>
                                <option value="Khác">Khác</option>
                            @else
                                <option value="Giáo dục" {{$model->lvhd=='Giáo dục'?'selected':''}}>Giáo dục</option>
                                <option value="Y tế" {{$model->lvhd=='Y tế'?'selected':''}}>Y tế</option>
                                <option value="Nghiên cứu khoa học" {{$model->lvhd=='Nghiên cứu khoa học'?'selected':''}}>Nghiên cứu khoa học</option>
                                <option value="Quản lý nhà nước" {{$model->lvhd=='Quản lý nhà nước'?'selected':''}}>Quản lý nhà nước</option>
                                <option value="Văn hóa thể thao" {{$model->lvhd=='Văn hóa thể thao'?'selected':''}}>Văn hóa thể thao</option>
                                <option value="Khác" {{$model->lvhd=='Khác'?'selected':''}}>Khác</option>
                            @endif
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-- Thêm thông tin vào tình trạng công tác -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Phân loại công tác <span class="require">*</span></label>

                    <div class="col-sm-8">
                        <select class="form-control" name="phanloaict" id="phanloaict" required="required">
                            <option value="">-- Chọn phân loại công tác --</option>
                            @if($type=='create')
                                @foreach($m_phanloai as $m_pl)
                                    <option value="{{$m_pl->phanloaict}}">{{$m_pl->phanloaict}}</option>
                                @endforeach
                            @else
                                @foreach($m_phanloai as $m_pl)
                                    <option value="{{$m_pl->phanloaict}}" {{$m_hosoct->phanloaict==$m_pl->phanloaict?'selected':''}}>{{$m_pl->phanloaict}}</option>
                                @endforeach
                            @endif

                        </select>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Kiểu công tác <span class="require">*</span></label>

                    <div class="col-sm-8">
                        <select class="form-control" name="kieuct" id="kieuct" onchange="getTenCT()" required="required">
                            <option value="">-- Chọn kiểu công tác --</option>
                            @if($type!='create')
                                @foreach($m_kieuct as $m_pl)
                                    <option value="{{$m_pl->kieuct}}" {{$m_hosoct->kieuct==$m_pl->kieuct?'selected':''}}>{{$m_pl->kieuct}}</option>
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
                    <label class="col-sm-4 control-label">Tên công tác <span class="require">*</span></label>

                    <div class="col-sm-8">
                        <select class="form-control" name="tenct" id="tenct" required="required">
                            <option value="">-- Chọn tên công tác --</option>
                            @if($type!='create')
                                @foreach($m_tenct as $m_pl)
                                    <option value="{{$m_pl->tenct}}" {{$m_hosoct->tenct==$m_pl->tenct?'selected':''}}>{{$m_pl->tenct}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hết -->
    </div>
</div>

<script>
    function getTenCT(){
        //alert($('select[name="kieuct"]').val());
        if($('select[name="kieuct"]').val() != 'all'){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '/ajax/tenct/',
                type: 'GET',
                data: {
                    _token: CSRF_TOKEN,
                    kieuct: $('select[name="kieuct"]').val()
                },
                dataType: 'JSON',
                success: function (data) {
                    if(data.status == 'success')
                        $('select[name="tenct"]').replaceWith(data.message);
                }
            });
        } else {
            $('select[name="tenct"]').val('all');
        }
    }
</script>

<!--end form1 Thông tin cơ bản -->