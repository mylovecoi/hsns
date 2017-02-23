@extends('main')

@section('content')
    <div class="portlet box">
        <div class="portlet-header">
            <div class="caption">
                THÔNG TIN CHI TIẾT LƯƠNG CỦA CÁN BỘ {{$model->tencanbo}}
            </div>
            <div class="actions">

            </div>
        </div>
        <div class="portlet-body">
            {!! Form::model($model, ['url'=>'/chucnang/luong/updatect/'.$model->id, 'method' => 'POST', 'files'=>true, 'id' => 'create-hscb', 'class'=>'horizontal-form form-validate', 'enctype'=>'multipart/form-data']) !!}
                <div class="form-horizontal">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Mã ngạch </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('msngbac', null, array('id' => 'msngbac','class' => 'form-control','readonly'=>'true'))!!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Nhóm ngạch bậc </label>

                                <div class="col-sm-6">
                                    {!!Form::text('plnb', null, array('id' => 'plnb','class' => 'form-control','readonly'=>'true'))!!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Tên ngạch bậc </label>
                                <div class="col-sm-6">
                                    {!!Form::text('tennb', null, array('id' => 'tennb','class' => 'form-control','readonly'=>'true'))!!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Hệ số lương </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('heso', null, array('id' => 'heso','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Hệ số vượt khung </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('vuotkhung', null, array('id' => 'vuotkhung','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Phụ cấp chức vụ </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('pccv', null, array('id' => 'pccv','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">PC thâm niên nghề </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('pctnn', null, array('id' => 'pctnn','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">PC thâm niên VK </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('pcvk', null, array('id' => 'pcvk','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Phụ cấp kiêm nhiệm </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('pckn', null, array('id' => 'pckn','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Phụ cấp trách nhiệm </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('pctn', null, array('id' => 'pctn','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Phụ cấp khu vực </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('pckv', null, array('id' => 'pckv','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Phụ cấp thu hút </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('pcth', null, array('id' => 'pcth','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Phụ cấp ưu đãi </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('pcudn', null, array('id' => 'pcudn','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Phụ cấp đặc biệt </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('pcdbn', null, array('id' => 'pcdbn','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Phụ cấp lưu động </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('pcld', null, array('id' => 'pcld','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Phụ cấp độc hại </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('pcdh', null, array('id' => 'pcdh','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Phụ cấp khác </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('pck', null, array('id' => 'pck','class' => 'form-control heso', 'data-mask'=>'fdecimal'))!!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Tổng hệ số </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('tonghs', null, array('id' => 'tonghs','class' => 'form-control', 'data-mask'=>'fdecimal','readonly'=>'true','style'=>'font-weight:bold'))!!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Tổng tiền lương </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('ttl', null, array('id' => 'ttl','class' => 'form-control', 'data-mask'=>'fdecimal','readonly'=>'true','style'=>'font-weight:bold'))!!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Giảm trừ lương </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('giaml', null, array('id' => 'giaml','class' => 'form-control tienluong', 'data-mask'=>'fdecimal'))!!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Bảo hiểm chi trả </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('bhct', null, array('id' => 'bhct','class' => 'form-control tienluong', 'data-mask'=>'fdecimal'))!!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Số tiền BHXH </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('stbhxh', null, array('id' => 'stbhxh','class' => 'form-control tienluong', 'data-mask'=>'fdecimal'))!!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Số tiền BHYT </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('stbhyt', null, array('id' => 'stbhyt','class' => 'form-control tienluong', 'data-mask'=>'fdecimal'))!!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Số tiền KPCĐ </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('stkpcd', null, array('id' => 'stkpcd','class' => 'form-control tienluong', 'data-mask'=>'fdecimal'))!!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Số tiền BHTN </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('stbhtn', null, array('id' => 'stbhtn','class' => 'form-control tienluong', 'data-mask'=>'fdecimal'))!!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Tổng tiền bảo hiểm </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('ttbh', null, array('id' => 'ttbh','class' => 'form-control', 'data-mask'=>'fdecimal','readonly'=>'true','style'=>'font-weight:bold'))!!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Lương thực nhận </label>

                                <div class="col-sm-6 controls">
                                    {!!Form::text('luongtn', null, array('id' => 'luongtn','class' => 'form-control', 'data-mask'=>'fdecimal','readonly'=>'true','style'=>'font-weight:bold'))!!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions text-right pal">
                        <div class="col-md-12" align="center">
                            <button type="submit" class="btn btn-success">Hoàn thành<i class="fa fa-save mlx"></i></button>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    <script>
        function getdl(str){
            var kq=0;
            str=str.replace(',','');
            if(!isNaN(str)){
                kq=str;
            }
            return parseFloat(kq);
        }

        function tonghs() {
            var hs = 0;
            $('.heso').each(function () {
                hs += getdl($(this).val());
            });
            $('#tonghs').val(hs.toFixed(2));
        }

        function tongtl(){
            var hs=$('#tonghs').val();
            var luong = {{getGeneralConfigs()['luongcb']}};
            return (hs*luong);
        }

        function baohiem(){
            var stbhxh=getdl($('#stbhxh').val());
            var stbhyt=getdl($('#stbhyt').val());
            var stkpcd=getdl($('#stkpcd').val());
            var stbhtn=getdl($('#stbhtn').val());
            //alert(stbhxh);
            return stbhxh+stbhyt+stkpcd+stbhtn;
        }

        function giamtru(){
            var giaml=getdl($('#giaml').val());
            var bhct=getdl($('#bhct').val());
            return bhct-giaml;
        }

        function luongtn() {
            var ttl = parseFloat(tongtl().toFixed(0));
            var bh = baohiem();
            var gt =giamtru();
            $('#ttl').val(ttl);
            $('#ttbh').val(bh);
            $('#luongtn').val(ttl + gt - bh);
        }
        $('.heso').change(function(){
            tonghs();
            luongtn();
        })

        $('.tienluong').change(function(){
            luongtn();
        })

    </script>
    @include('includes.script.scripts')
@stop