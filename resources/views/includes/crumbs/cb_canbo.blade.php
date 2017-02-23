<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 7/13/2016
 * Time: 9:49 AM
 */
        ?>
<div class="row">
    <div class="form-group">
        <label class="control-label col-md-3">Họ tên cán bộ </label>
        <div class="col-md-5">
            <select class="form-control select2me" class="col-md-5" id="cbmacb" name="cbmacb" onchange="getInfo()">
                <option value="all" selected>-- Nhập họ tên cán bộ --</option>
                @foreach($m_pb as $pb)
                    <optgroup label="{{$pb->tenpb}}">
                        @if(isset($model))
                            @foreach($m_cb as $cb)
                                @if($cb->mapb==$pb->mapb)
                                    <option value="{{$cb->macanbo}}" {{$cb->macanbo==$macanbo?'selected':''}}>{{$cb->tencanbo}}</option>
                                @endif
                            @endforeach
                        @else
                            @foreach($m_cb as $cb)
                                @if($cb->mapb==$pb->mapb)
                                    <option value="{{$cb->macanbo}}">{{$cb->tencanbo}}</option>
                                @endif
                            @endforeach
                        @endif
                    </optgroup>
                @endforeach
            </select>
        </div>
    </div>
</div>