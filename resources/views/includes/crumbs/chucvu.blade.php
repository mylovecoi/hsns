<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 7/18/2016
 * Time: 2:59 PM
 */
?>
<div class="form-group">
    <label class="col-md-4 control-label"> Chức vụ<span class="require">*</span></label>
    <div class="col-md-8">
        <select name="macvcq" id="macvcq" class="form-control">
            @if(isset($m_cvm))
                @foreach($m_cvm as $cv)
                    <option value="{{$cv['macvcq']}}">{{$cv['tencv']}}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>