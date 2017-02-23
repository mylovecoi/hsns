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
<p style="text-align: center; font-weight: bold; font-size: 20px;">BÁO CÁO CHẤT LƯỢNG ĐẢNG VIÊN</p>
<p style="text-align: center; font-style: italic">Ngày báo cáo {{getDayVn($thongtin['ngaybaocao'])}}</p>

<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
    <tr>
        <th style="width: 4%" rowspan="2">STT</th>
        <th rowspan="2">Chức danh</th>
        <th style="width: 5%" rowspan="2">Tổng số</th>
        <th style="width: 22.5%" colspan="5">Chia theo trình độ chuyên môn</th>
        <th style="width: 22.5%" colspan="5">Chia theo độ tuổi</th>
        <th style="width: 22.5%" colspan="5">Chia theo tuổi đảng</th>
        <th style="width: 4.5%" rowspan="2">Phụ<br>nữ</th>
        <th style="width: 4.5%" rowspan="2">Dân tộc<br>ít người</th>
    </tr>
    <tr>
        <th style="width: 4.5%">Trên<br>ĐH</th>
        <th style="width: 4.5%">Đại<br>học</th>
        <th style="width: 4.5%">Cao<br>đẳng</th>
        <th style="width: 4.5%">Trung<br>cấp</th>
        <th style="width: 4.5%">Khác</th>

        <th style="width: 4.5%">Dưới 31</th>
        <th style="width: 4.5%">Từ 31-40</th>
        <th style="width: 4.5%">Từ 41-50</th>
        <th style="width: 4.5%">Từ 51-55</th>
        <th style="width: 4.5%">Trên 55</th>

        <th style="width: 4.5%">Dưới 5</th>
        <th style="width: 4.5%">Từ 5-10</th>
        <th style="width: 4.5%">Từ 11-20</th>
        <th style="width: 4.5%">Từ 21-30</th>
        <th style="width: 4.5%">Trên 30</th>
    </tr>
    <?php $stt=1;?>
    @foreach($model as $ct)
        <tr style="text-align: center">
            <td>{{$stt++}}</td>
            <td style="text-align: left">{{$ct['tencv']}}</td>
            <td>{{$ct['tong']}}</td>           
            <td>{{$ct['trendh']}}</td>
            <td>{{$ct['daihoc']}}</td>
            <td>{{$ct['caodang']}}</td>
            <td>{{$ct['trungcap']}}</td>
            <td>{{$ct['khac']}}</td>
            
            <td>{{$ct['d31']}}</td>
            <td>{{$ct['d40']}}</td>
            <td>{{$ct['d50']}}</td>
            <td>{{$ct['d55']}}</td>
            <td>{{$ct['dk']}}</td>
            
            <td>{{$ct['dv5']}}</td>
            <td>{{$ct['dv10']}}</td>
            <td>{{$ct['dv20']}}</td>
            <td>{{$ct['dv30']}}</td>
            <td>{{$ct['dvk']}}</td>
            
            <td>{{$ct['nu']}}</td>
            <td>{{$ct['thieuso']}}</td>
        </tr>
    @endforeach

    <tr style="font-weight: bold; text-align: center">
        <td></td>
        <td>Tổng cộng</td>
        <td>{{array_sum(array_column($model,'tong'))}}</td>
        <td>{{array_sum(array_column($model,'trendh'))}}</td>
        <td>{{array_sum(array_column($model,'daihoc'))}}</td>
        <td>{{array_sum(array_column($model,'caodang'))}}</td>
        <td>{{array_sum(array_column($model,'trungcap'))}}</td>
        <td>{{array_sum(array_column($model,'khac'))}}</td>

        <td>{{array_sum(array_column($model,'d31'))}}</td>
        <td>{{array_sum(array_column($model,'d40'))}}</td>
        <td>{{array_sum(array_column($model,'d50'))}}</td>
        <td>{{array_sum(array_column($model,'d55'))}}</td>
        <td>{{array_sum(array_column($model,'dk'))}}</td>

        <td>{{array_sum(array_column($model,'dv5'))}}</td>
        <td>{{array_sum(array_column($model,'dv10'))}}</td>
        <td>{{array_sum(array_column($model,'dv20'))}}</td>
        <td>{{array_sum(array_column($model,'dv30'))}}</td>
        <td>{{array_sum(array_column($model,'dvk'))}}</td>

        <td>{{array_sum(array_column($model,'nu'))}}</td>
        <td>{{array_sum(array_column($model,'thieuso'))}}</td>
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