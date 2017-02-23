<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{$pageTitle}}</title>
    <style type="text/css">
        body {
            font: normal 14px/16px time, serif;
        }

        .header tr td {
            padding-top: 0px;
            padding-bottom: 10px;
        }

        table, p {
            width: 98%;
            margin: auto;
        }

        table tr td:first-child {
            text-align: center;
        }

        td, th {
            padding: 10px;
        }
        p{
            padding: 5px;
        }
        span{
            text-transform: uppercase;
            font-weight: bold;
        }
    </style>
</head>
<body style="font:normal 14px Times, serif;">

<table class="header" width="96%" border="0" cellspacing="0" cellpadding="8" style="margin:0 auto 25px; text-align: center;">
    <tr>
        <td  style="text-align: left">
            <b>Đơn vị chủ quản: {{$m_dv->tenct}}</b>
        </td>
    </tr>
    <tr>
        <td style="text-align: left">
            <b>Đơn vị: {{$m_dv->tendv}}</b>
        </td>
    </tr>
</table>
<p style="text-align: center; font-weight: bold; font-size: 20px;">BÁO CÁO ĐỘI NGŨ CÁN BỘ</p>
<p style="text-align: center; font-style: italic">Ngày báo cáo {{getDayVn($thongtin['ngaybaocao'])}}</p>

<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
    <tr>
        <th style="width: 10%" rowspan="2">STT</th>
        <th rowspan="2">Phòng ban </br>Chức vụ</th>
        <th style="width: 10%" rowspan="2">Tổng số</th>
        <th style="width: 30%" colspan="3">Phân loại cán bộ</th>
    </tr>
    <tr>
        <th>Biên chế</th>
        <th>Hợp đồng</th>
        <th>Tập sự</th>
    </tr>
    <?php $stt=1;?>
    @foreach($m_pb as $pb)
        <tr style="font-weight: bold; text-align: center">
            <td>{{$stt++}}</td>
            <td style="text-align: left">{{$pb['tenpb']}}</td>
            <td>{{$pb['bienche']+$pb['hopdong']+$pb['tapsu']}}</td>
            <td>{{$pb['bienche']}}</td>
            <td>{{$pb['hopdong']}}</td>
            <td>{{$pb['tapsu']}}</td>
        </tr>
        @foreach($model as $ct)
            @if($pb['mapb']==$ct['mapb'])
                <tr style="text-align: center">
                    <td></td>
                    <td style="text-align: left">{{$ct['tencv']}}</td>
                    <td>{{$ct['tongcong']}}</td>
                    <td>{{$ct['bienche']}}</td>
                    <td>{{$ct['hopdong']}}</td>
                    <td>{{$ct['tapsu']}}</td>
                </tr>
            @endif
        @endforeach
    @endforeach
    <tr style="font-weight: bold; text-align: center">
        <td></td>
        <td>Tổng cộng</td>
        <td>{{array_sum(array_column($model,'tongcong'))}}</td>
        <td>{{array_sum(array_column($model,'bienche'))}}</td>
        <td>{{array_sum(array_column($model,'hopdong'))}}</td>
        <td>{{array_sum(array_column($model,'tapsu'))}}</td>
    </tr>
</table>
<table class="header" width="96%" border="0" cellspacing="0" cellpadding="8" style="margin:20px auto; text-align: center;">
    <tr>
        <td style="text-align: left;" width="50%"></td>
        <td style="text-align: center; font-style: italic" width="50%">........,Ngày......tháng.......năm..........</td>
    </tr>
    <tr style="font-weight: bold">
        <td style="text-align: center;" width="50%">Người lập bảng</td>
        <td style="text-align: center;" width="50%">Thủ trưởng đơn vị</td>
    </tr>
    <tr style="font-style: italic">
        <td style="text-align: center;" width="50%">(Ghi rõ họ tên)</td>
        <td style="text-align: center;" width="50%">((Ký tên, đóng dấu))</td>
    </tr>
    <tr>
        <td><br><br><br></td>
    </tr>

    <tr>
        <td style="text-align: center;" width="50%">{{$thongtin['nguoilap']}}</td>
        <td style="text-align: center;" width="50%">{{$m_dv->lanhdao}}</td>
    </tr>
</table>

</body>
</html>