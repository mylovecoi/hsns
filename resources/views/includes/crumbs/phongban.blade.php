<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 7/18/2016
 * Time: 2:57 PM
 */
?>
<div class="form-group">
    <label class="col-md-4 control-label"> Phòng ban<span class="require">*</span></label>
    <div class="col-md-8">
        <select name="mapb" id="mapb" class="form-control">
            @if(isset($m_pbm))
                @foreach($m_pbm as $pb)
                    <option value="{{$pb['mapb']}}">{{$pb['tenpb']}}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>