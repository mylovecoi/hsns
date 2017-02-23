<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 7/14/2016
 * Time: 10:17 AM
 */
        ?>
<td>
    <button type="button" onclick="edit('{{$value->id}}')" class="btn btn-info btn-xs mbs">
        <i class="fa fa-edit"></i>&nbsp; Chỉnh sửa</button>
    <button type="button" onclick="cfDel('{{$furl.'del/'.$value->id}}')" class="btn btn-danger btn-xs mbs" data-target="#delete-modal-confirm" data-toggle="modal">
        <i class="fa fa-trash-o"></i>&nbsp; Xóa</button>
</td>