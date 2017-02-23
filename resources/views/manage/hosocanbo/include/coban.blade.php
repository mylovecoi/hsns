<!--form1 thông tin cơ bản -->
<div id="tab1" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Mã số cán bộ </label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('macanbo', null, array('id' => 'macanbo','class' => 'form-control','readonly'=>'true'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Phòng ban <span class="require">*</span></label>

                    <div class="col-sm-8 controls">
                        <select name="mapb" id="mapb" class="form-control" autofocus="autofocus" required="required">
                            @if($type=='create')
                                <option value="">-- Chọn phòng ban ---</option>
                                @foreach($m_pb as $pb)
                                    <option value="{{$pb->mapb}}">{{$pb->tenpb}}</option>
                                @endforeach
                            @else
                                @foreach($m_pb as $pb)
                                    <option value="{{$pb->mapb}}" {{$model->mapb == $pb->mapb ? 'selected' : ''}}>{{$pb->tenpb}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Chức vụ <span class="require">*</span> </label>

                    <div class="col-sm-8">
                        <select name="macvcq" id="macvcq" class="form-control" required="required">
                            @if($type=='create')
                                <option value="">-- Chọn chức vụ ---</option>
                                @foreach($m_cvcq as $cv)
                                    <option value="{{$cv->macvcq}}">{{$cv->tencv}}</option>
                                @endforeach
                            @else
                                @foreach($m_cvcq as $cv)
                                    <option value="{{$cv->macvcq}}" {{$model->macvcq==$cv->macvcq?'selected':''}}>{{$cv->tencv}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Họ tên <span class="require">*</span></label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('tencanbo', null, array('id' => 'tencanbo','class' => 'form-control', 'required'=>'required'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Tên gọi khác </label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('tenkhac', null, array('id' => 'tenkhac','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Mã công chức </label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('macongchuc', null, array('id' => 'macongchuc','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày sinh <span class="require">*</span></label>

                    <div class="col-sm-8 controls">
                        <input type="date" name="ngaysinh" id="ngaysinh" class="form-control" required="required" value="{{!isset($model)?'':$model->ngaysinh}}"/>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Giới tính</label>

                    <div class="col-sm-8">
                        {!! Form::select(
                        'gioitinh',
                        array(
                        'Nam' => 'Nam',
                        'Nữ' => 'Nữ'
                        ),null,
                        array('id' => 'gioitinh', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Dân tộc <span class="require">*</span></label>

                    <div class="col-sm-8 controls">
                        <select name="dantoc" id="dantoc" class="form-control" required="required">
                            @if($type=='create')
                                <option value="">-- Chọn dân tộc ---</option>
                                @foreach($m_dt as $dt)
                                    <option value="{{$dt->dantoc}}">{{$dt->dantoc}}</option>
                                @endforeach
                            @else
                                @foreach($m_dt as $dt)
                                    <option value="{{$dt->dantoc}}" {{$model->dantoc==$dt->dantoc?'selected':''}}>{{$dt->dantoc}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-md-4 control-label">Tôn giáo </label>

                    <div class="col-md-8">
                        {!!Form::text('tongiao', null, array('id' => 'tongiao','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Số điện thoại </label>

                    <div class="col-sm-8">
                        {!!Form::text('sodt', null, array('id' => 'sodt','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Email </label>

                    <div class="col-sm-8">
                        {!!Form::text('email', null, array('id' => 'email','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Số CMTND </label>

                    <div class="col-sm-8">
                        {!!Form::text('socmnd', null, array('id' => 'socmnd','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày cấp </label>

                    <div class="col-sm-8 controls">
                        <input type="date" id="ngaycap" name="ngaycap" class="form-control" value="{{!isset($model)?'':$model->ngaycap}}" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi cấp </label>

                    <div class="col-sm-8">
                        {!!Form::text('noicap', null, array('id' => 'noicap','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi sinh-Xã </label>

                    <div class="col-sm-8">
                        {!!Form::text('nsxa', null, array('id' => 'nsxa','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Huyện </label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('nshuyen', null, array('id' => 'nshuyen','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Tỉnh </label>

                    <div class="col-sm-8">
                        {!!Form::text('nstinh', null, array('id' => 'nstinh','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quê quán-Xã </label>

                    <div class="col-sm-8">
                        {!!Form::text('qqxa', null, array('id' => 'qqxa','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Huyện </label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('qqhuyen', null, array('id' => 'qqhuyen','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Tỉnh </label>

                    <div class="col-sm-8">
                        {!!Form::text('qqtinh', null, array('id' => 'qqtinh','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nơi ở hiện nay </label>

                    <div class="col-sm-10">
                        {!!Form::text('noio', null, array('id' => 'noio','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="col-md-2 col-sm-4 control-label">Hộ khẩu thường trú </label>

                    <div class="col-md-10 col-sm-8">
                        {!!Form::text('hktt', null, array('id' => 'hktt','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label class="col-md-2 col-sm-4 control-label">Ảnh </label>

                    <div class="col-md-10 col-sm-8">
                        @if(isset($model))
                            <p><img src="{{$model->anh}}" width="120"></p>
                        @endif
                        {!!Form::file('anh', array('id' => 'anh'))!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
        $('#create-hscb :submit').click(function(){
            var str = '',strb1='',strb2='',strb4='';
            var ok = true;

            if($('#mapb').val()==''){
                strb1 += ' - Phòng ban \n';
                $('#mapb').parent().addClass('state-error');
                ok = false;
            }

            if($('#macvcq').val()==''){
                strb1 += '  - Chức vụ \n';
                $('#macvcq').parent().addClass('state-error');
                ok = false;
            }

            if(!$('#tencanbo').val()){
                strb1 += '  - Họ tên \n';
                $('#tencanbo').parent().addClass('state-error');
                ok = false;
            }

            if(!$('#ngaysinh').val()){
                strb1 += '  - Ngày sinh \n';
                $('#ngaysinh').parent().addClass('state-error');
                ok = false;
            }

            if($('#dantoc').val()==''){
                strb1 += '  - Dân tộc \n';
                $('#dantoc').parent().addClass('state-error');
                ok = false;
            }

            //Bước 2
            if(!$('#ngaybc').val()){
                strb2 += ' - Ngày biên chế, hợp đồng \n';
                $('#ngaybc').parent().addClass('state-error');
                ok = false;
            }

            if($('#sunghiep').val()==''){
                strb2 += '  - Sự nghiệp cán bộ \n';
                $('#sunghiep').parent().addClass('state-error');
                ok = false;
            }

            if($('#phanloaict').val()==''){
                strb2 += '  - Phân loại công tác \n';
                $('#phanloaict').parent().addClass('state-error');
                ok = false;
            }

            if($('#kieuct').val()==''){
                strb2 += '  - Kiểu công tác \n';
                $('#kieuct').parent().addClass('state-error');
                ok = false;
            }

            if($('#tenct').val()==''){
                strb2 += '  - Tên công tác \n';
                $('#tenct').parent().addClass('state-error');
                ok = false;
            }

            //Bước 4
            if(!$('#msngbac').val()){
                strb4 += ' - Mã ngạch lương \n';
                $('#msngbac').parent().addClass('state-error');
                ok = false;
            }

            if(!$('#ngaytu').val()){
                strb4 += ' - Thời gian hưởng lương: Từ ngày \n';
                $('#ngaytu').parent().addClass('state-error');
                ok = false;
            }

            if(!$('#ngayden').val()){
                strb4 += ' - Thời gian hưởng lương: Đến ngày \n';
                $('#ngayden').parent().addClass('state-error');
                ok = false;
            }

            //Kết quả
            if ( ok == false){
                if(strb1!='')
                    str+='Bước 1: \n '+strb1 ;
                if(strb2!='')
                    str+='Bước 2: \n '+strb2 ;
                if(strb4!='')
                    str+='Bước 4: \n '+strb4 ;
                alert('Các trường: \n' + str + 'Không được để trống');
                $("form").submit(function (e) {
                    e.preventDefault();
                });
            }
            else{
                $("form").unbind('submit').submit();
            }
        });
    });
</script>

<script>
    jQuery(function($){
        //Lấy thông tin kiểu công tác khi chọn phân loại công tác
        $('select[name="phanloaict"]').change(function(){
            if($(this).val() != 'all'){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: '/ajax/kieuct/',
                    type: 'GET',
                    data: {
                        _token: CSRF_TOKEN,
                        phanloaict: $(this).val()
                    },
                    dataType: 'JSON',
                    success: function (data) {
                        if(data.status == 'success')
                            $('select[name="kieuct"]').replaceWith(data.message);
                    }
                });
            } else {
                $('select[name="kieuct"]').val('all');
                $('select[name="tenct"]').val('all');
            }
        });
    });
</script>
<!--end form1 Thông tin cơ bản -->