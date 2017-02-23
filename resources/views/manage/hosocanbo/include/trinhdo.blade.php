<!--form2 thông tin trình độ hiện tại của cán bộ -->
<div id="tab3" class="tab-pane" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Trình độ chuyên môn </label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('tdcm', null, array('id' => 'tdcm','class' => 'form-control','autofocus'=>'autofocus'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Chuyên ngành đào tạo </label>

                    <div class="col-sm-8">
                        {!!Form::text('chuyennganh', null, array('id' => 'chuyennganh','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Hình thức đào tạo </label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('hinhthuc', null, array('id' => 'hinhthuc','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi đào tạo </label>

                    <div class="col-sm-8">
                        {!!Form::text('noidt', null, array('id' => 'noidt','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Trình độ văn hóa <span
                            class="require"></span></label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('tdgdpt', null, array('id' => 'tdgdpt','class' => 'form-control',))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Trình độ tin học </label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('trinhdoth', null, array('id' => 'trinhdoth','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngoại ngữ </label>

                    <div class="col-sm-8">
                        {!!Form::text('ngoaingu', null, array('id' => 'ngoaingu','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Trình độ ngoại ngữ </label>

                    <div class="col-sm-8">
                        {!!Form::text('trinhdonn', null, array('id' => 'trinhdonn','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Trình độ chính trị </label>

                    <div class="col-sm-8">
                        {!!Form::text('llct', null, array('id' => 'llct','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quản lý nhà nước </label>

                    <div class="col-sm-8">
                        {!!Form::text('qlnhanuoc', null, array('id' => 'qlnhanuoc','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--end form2 -->